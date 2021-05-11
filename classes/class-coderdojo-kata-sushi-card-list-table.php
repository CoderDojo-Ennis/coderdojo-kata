<?php
/**
 * Custom page walker for this theme.
 *
 * @package WordPress
 * @subpackage CoderDojo
 * @since CoderDojo 1.0
 */

if ( ! class_exists( 'Sushi_Card_List_Table' ) ) {
	/**
	 * CUSTOM PAGE WALKER
	 * A custom walker for pages.
	 */
    if( ! class_exists( 'WP_List_Table' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
    }

	class Sushi_Card_List_Table extends WP_List_Table {

		var $items = array();
        var $ID = 0;
        

        /**
	 * REQUIRED. Set up a constructor that references the parent constructor. We 
	 * use the parent reference to set some default configs.
	 */
        function __construct($parent_post_ID) {
            $this->ID = $parent_post_ID;
            //Set parent defaults
            parent::__construct(
                array(
                    //singular name of the listed records
                    'singular'	=> 'movie',
                    //plural name of the listed records
                    'plural'	=> 'movies',
                    //does this table support ajax?
                    'ajax'		=> true,
                    //
                    'ID'        => $parent_post_ID,
                )
            );
            
        }

        function get_columns(){
            $columns = array(
            'post_title' => 'Title',
            'post_parent'    => 'Parent',
            'order'    => 'Order',
            'post_status'      => 'Status'
            );
            return $columns;
        }

        function prepare_items() {
            //global $post;
            $sushi_cards = array();
            $sushi_card_objects = get_posts( array(
                'title_li'    => '',
                'post_parent'    => $this->ID,
                'post_type'   => 'sushi-card',
                'post_status' => array('publish', 'pending', 'draft', 'future', 'private', 'inherit'),
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'posts_per_page' => -1,
                'echo' => false,
            ) );
            
            foreach($sushi_card_objects as $sushi_card_object)
            {   
                $card = array('ID' => $sushi_card_object->ID,'post_title' => $sushi_card_object->post_title, 'post_parent' => $sushi_card_object->post_parent, 'order' => $sushi_card_object->menu_order, 'post_status' => $sushi_card_object->post_status);
                array_push($sushi_cards ,$card);
            }

            $this->items = $sushi_cards;

            $columns = $this->get_columns();
            $hidden = array();
            $sortable = array();
            $this->_column_headers = array($columns, $hidden, $sortable);
        }
        
        function column_default( $item, $column_name ) {
            switch( $column_name ) { 
                case 'post_title':
                    return column_post_title($item);
                case 'post_parent':
                case 'order':
                case 'post_status':
                return $item[ $column_name ];
                default:
                return; //print_r( $item, true ) ; //Show the whole array for troubleshooting purposes
            }
        }
        
        function column_post_title($item) {
            $actions = array(
                    'edit'      => sprintf('<a href="?post=%s&action=%s">Edit</a>',$item['ID'],'edit'),
                    'delete'    => sprintf('<a href="?post=%s&action=%s">Delete</a>',$item['ID'],'delete'),
                );
        
            return sprintf('%1$s %2$s', $item['post_title'], $this->row_actions($actions) );
        }

        /**
         * Display the table
         * Adds a Nonce field and calls parent's display method
         *
         * @since 3.1.0
         * @access public
         */
        function display() {

            wp_nonce_field( 'ajax-custom-list-nonce', '_ajax_custom_list_nonce' );

            parent::display();
        }

        /**
         * Generate the table navigation above or below the table
         * http://lukeberndt.com/2012/wp_list_table-and-an-extra-nonce/
         *
         * @since 3.1.0
         * @access public
         */
        function display_tablenav($which) {

            
        }

        

        /**
         * Handle an incoming ajax request (called from admin-ajax.php)
         *
         * @since 3.1.0
         * @access public
         */
        function ajax_response() {

            //check_ajax_referer( 'ajax-custom-list-nonce', '_ajax_custom_list_nonce' );
    
            $this->prepare_items();
    
            extract( $this->_args );
            extract( $this->_pagination_args, EXTR_SKIP );
    
            ob_start();
            if ( ! empty( $_REQUEST['no_placeholder'] ) )
                $this->display_rows();
            else
                $this->display_rows_or_placeholder();
            $rows = ob_get_clean();
    
            ob_start();
            $this->print_column_headers();
            $headers = ob_get_clean();
    
            ob_start();
            $this->pagination('top');
            $pagination_top = ob_get_clean();
    
            ob_start();
            $this->pagination('bottom');
            $pagination_bottom = ob_get_clean();
    
            $response = array( 'rows' => $rows );
            $response['pagination']['top'] = $pagination_top;
            $response['pagination']['bottom'] = $pagination_bottom;
            $response['column_headers'] = $headers;
    
            if ( isset( $total_items ) )
                $response['total_items_i18n'] = sprintf( _n( '1 item', '%s items', $total_items ), number_format_i18n( $total_items ) );
    
            if ( isset( $total_pages ) ) {
                $response['total_pages'] = $total_pages;
                $response['total_pages_i18n'] = number_format_i18n( $total_pages );
            }
    
            die( json_encode( $response ) );
        }
	}
}
<?php
/**
 * Add aditional admin menu pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoderDojo Kata
 * @subpackage CoderDojo
 * @since 1.0.0
 */

function coderdojo_kata_register_menu_pages() {
    
    global $submenu;
	
    $software_link = array(
        __( 'The Software Pad', 'coderdojo-kata' ),
        'edit_posts',
        'edit.php?post_type=sushi-deck&groups=software'
    );

    $hardware_link = array(
        __( 'The Hardware Laboratory', 'coderdojo-kata' ),
        'edit_posts',
        'edit.php?post_type=sushi-deck&groups=hardware'
    );

    $studio_link = array(
        __( 'The Studio', 'coderdojo-kata' ),
        'edit_posts',
        'edit.php?post_type=sushi-deck&groups=studio'
    );

    $arcade_link = array(
        __( 'The Arcade', 'coderdojo-kata' ),
        'edit_posts',
        'edit.php?post_type=sushi-deck&groups=arcade'
    );

    $other_link = array(
        __( 'Other Resources', 'coderdojo-kata' ),
        'edit_posts',
        'edit.php?post_type=sushi-deck&groups=other'
    );

    $submenu['edit.php?post_type=sushi-deck']=array(
        0=>$software_link,
        1=>$hardware_link,
        2=>$studio_link,
        3=>$arcade_link,
        4=>$other_link,
    ) + $submenu['edit.php?post_type=sushi-deck']; 

    unset($submenu['edit.php?post_type=sushi-deck'][10]);

}
add_action( 'admin_menu', 'coderdojo_kata_register_menu_pages' );
 
/**
 * Fix Parent Admin Menu Item
 */
function coderdojo_kata_parent_file( $parent_file ){
 
    global $current_screen;
    global $submenu_file;

    if ( in_array( $current_screen->base, array( 'post', 'edit' ) ) && 'sushi-deck' == $current_screen->post_type && isset( $_REQUEST[ 'groups' ])) {

        $group_slug = get_query_var( 'groups' );
        $group_term = get_term_by( 
            'slug',
            $group_slug,
            'groups'
        );
        
        if($group_term->parent == 0) {
            $submenu_file = 'edit.php?post_type=sushi-deck&groups=' . $group_slug;
        } else {
            $secondary_group_term = get_term_by( 
                'id',
                $group_term->parent,
                'groups'
            );
            $submenu_file = 'edit.php?post_type=sushi-deck&groups=' . $group_slug . '&groups=' . $secondary_group_term->slug;
        }
    }
    return $parent_file;
}
add_filter( 'parent_file', 'coderdojo_kata_parent_file' );

function coderdojo_kata_groups_filter($post_type ){
    
    if( $post_type !== 'sushi-deck' || !isset( $_REQUEST[ 'groups' ])){
        return;
    }

    $group_term = get_term_by( 
        'slug',
        $_REQUEST[ 'groups' ],
        'groups'
    );

    if ($group_term->parent != 0) {
        return;
    }
    
    $group_terms = coderdojo_kata_get_group_terms($group_term->term_id);?>

    <select name="groups" id="groups">
        <option value="">All Groups</option>
            <?php foreach ($group_terms as $term) {
                echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
            }?> 
    </select>
    

    <?php
    
}
add_action('restrict_manage_posts','coderdojo_kata_groups_filter');



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

	$bento_boxes_link = array(
		__( 'Bento Boxes', 'coderdojo-kata' ),
		'edit_posts',
		'edit.php?post_type=bento_box'
	);

	$pathways_link = array(
			__( 'Learning Pathways', 'coderdojo-kata' ),
			'edit_posts',
			'edit.php?post_type=sushi_shoe'
	);

	$collections_link = array(
			__( 'Collections', 'coderdojo-kata' ),
			'edit_posts',
			'edit-tags.php?taxonomy=collection&post_type=sushi_deck'
	);

	$projects_link = array(
			__( 'Projects', 'coderdojo-kata' ),
			'edit_posts',
			'edit.php?post_type=sushi_deck'
	);

	$groups_link = array(
			__( 'Groups', 'coderdojo-kata' ),
			'edit_posts',
			'edit-tags.php?taxonomy=sushi_group&post_type=sushi_deck'
	);

	$types_link = array(
			__( 'Types', 'coderdojo-kata' ),
			'edit_posts',
			'edit-tags.php?taxonomy=sushi_type&post_type=sushi_deck'
	);

	$levels_link = array(
			__( 'Levels', 'coderdojo-kata' ),
			'edit_posts',
			'edit-tags.php?taxonomy=sushi_level&post_type=sushi_deck'
	);

    $software_link = array(
        __( 'The Software Pad', 'coderdojo-kata' ),
        'edit_posts',
        'edit.php?post_type=sushi_deck&sushi_group=software'
    );

    $hardware_link = array(
        __( 'The Hardware Laboratory', 'coderdojo-kata' ),
        'edit_posts',
        'edit.php?post_type=sushi_deck&sushi_group=hardware'
    );

    $studio_link = array(
        __( 'The Studio', 'coderdojo-kata' ),
        'edit_posts',
        'edit.php?post_type=sushi_deck&sushi_group=studio'
    );

    $arcade_link = array(
        __( 'The Arcade', 'coderdojo-kata' ),
        'edit_posts',
        'edit.php?post_type=sushi_deck&sushi_group=arcade'
    );

    $other_link = array(
        __( 'Other Resources', 'coderdojo-kata' ),
        'edit_posts',
        'edit.php?post_type=sushi_deck&sushi_group=other'
    );

    $submenu['edit.php?post_type=sushi_deck']=array(
	  	0=>$bento_boxes_link,
	    1=>$pathways_link,
		2=>$projects_link,
    ) + $submenu['edit.php?post_type=sushi_deck'];

	unset($submenu['edit.php?post_type=sushi_deck'][5]);
    unset($submenu['edit.php?post_type=sushi_deck'][10]);

}
add_action( 'admin_menu', 'coderdojo_kata_register_menu_pages' );

/**
 * Fix Parent Admin Menu Item
 */
function coderdojo_kata_parent_file( $parent_file ){

    global $current_screen;
    global $submenu_file;

    if ( in_array( $current_screen->base, array( 'post', 'edit' ) ) && 'sushi_deck' == $current_screen->post_type && isset( $_REQUEST[ 'sushi_group' ])) {

        $group_slug = get_query_var( 'sushi_group' );
        $group_term = get_term_by(
            'slug',
            $group_slug,
            'sushi_group'
        );

        if($group_term->parent == 0) {
            $submenu_file = 'edit.php?post_type=sushi_deck&sushi_group=' . $group_slug;
        } else {
            $secondary_group_term = get_term_by(
                'id',
                $group_term->parent,
                'groups'
            );
            $submenu_file = 'edit.php?post_type=sushi_deck&groups=' . $group_slug . '&groups=' . $secondary_group_term->slug;
        }
    }
    return $parent_file;
}
add_filter( 'parent_file', 'coderdojo_kata_parent_file' );

function coderdojo_kata_groups_filter($post_type ){

    if( $post_type !== 'sushi_deck' || !isset( $_REQUEST[ 'groups' ])){
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



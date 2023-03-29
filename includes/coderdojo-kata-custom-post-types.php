<?php
/**
 * Add aditional post types
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoderDojo Kata
 * @subpackage CoderDojo
 * @since 1.0.0
 */

function coderdojo_kata_register_custom_post_types() {

	/**
	 * Post Type: Learning Paths.
	 */

	$labels = [
		"name" => esc_html__( "Learning Paths", "coderdojo-kata" ),
		"singular_name" => esc_html__( "Learning Path", "coderdojo-kata" ),
		"menu_name" => esc_html__( "My Learning Paths", "coderdojo-kata" ),
		"all_items" => esc_html__( "All Learning Paths", "coderdojo-kata" ),
		"add_new" => esc_html__( "Add new", "coderdojo-kata" ),
		"add_new_item" => esc_html__( "Add new Learning Path", "coderdojo-kata" ),
		"edit_item" => esc_html__( "Edit Learning Path", "coderdojo-kata" ),
		"new_item" => esc_html__( "New Learning Path", "coderdojo-kata" ),
		"view_item" => esc_html__( "View Learning Path", "coderdojo-kata" ),
		"view_items" => esc_html__( "View Learning Paths", "coderdojo-kata" ),
		"search_items" => esc_html__( "Search Learning Paths", "coderdojo-kata" ),
		"not_found" => esc_html__( "No Learning Paths found", "coderdojo-kata" ),
		"not_found_in_trash" => esc_html__( "No Learning Paths found in trash", "coderdojo-kata" ),
		"parent" => esc_html__( "Parent Learning Path:", "coderdojo-kata" ),
		"featured_image" => esc_html__( "Featured image for this Learning Path", "coderdojo-kata" ),
		"set_featured_image" => esc_html__( "Set featured image for this Learning Path", "coderdojo-kata" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Learning Path", "coderdojo-kata" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Learning Path", "coderdojo-kata" ),
		"archives" => esc_html__( "Learning Path archives", "coderdojo-kata" ),
		"insert_into_item" => esc_html__( "Insert into Learning Path", "coderdojo-kata" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Learning Path", "coderdojo-kata" ),
		"filter_items_list" => esc_html__( "Filter Learning Paths list", "coderdojo-kata" ),
		"items_list_navigation" => esc_html__( "Learning Paths list navigation", "coderdojo-kata" ),
		"items_list" => esc_html__( "Learning Paths list", "coderdojo-kata" ),
		"attributes" => esc_html__( "Learning Paths attributes", "coderdojo-kata" ),
		"name_admin_bar" => esc_html__( "Learning Path", "coderdojo-kata" ),
		"item_published" => esc_html__( "Learning Path published", "coderdojo-kata" ),
		"item_published_privately" => esc_html__( "Learning Path published privately.", "coderdojo-kata" ),
		"item_reverted_to_draft" => esc_html__( "Learning Path reverted to draft.", "coderdojo-kata" ),
		"item_scheduled" => esc_html__( "Learning Path scheduled", "coderdojo-kata" ),
		"item_updated" => esc_html__( "Learning Path updated.", "coderdojo-kata" ),
		"parent_item_colon" => esc_html__( "Parent Learning Path:", "coderdojo-kata" ),
	];

	$args = [
		"label" => esc_html__( "Learning Paths", "coderdojo-kata" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => "pathways",
		"show_in_menu" => false,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "pathways", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-learn-more",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies" => [ "groups" ],
		"show_in_graphql" => false,
	];

	register_post_type( "sushi_shoe", $args );

	/**
	 * Post Type: sushi_deck.
	 */

	$labels = [
		"name" => __( "Projects", "coderdojo-kata" ),
		"singular_name" => __( "Project", "coderdojo-kata" ),
		"menu_name" => __( "Kata", "coderdojo-kata" ),
		"all_items" => __( "All Projects", "coderdojo-kata" ),
		"add_new" => __( "Add new", "coderdojo-kata" ),
		"add_new_item" => __( "Add new Project", "coderdojo-kata" ),
		"edit_item" => __( "Edit Project", "coderdojo-kata" ),
		"new_item" => __( "New Project", "coderdojo-kata" ),
		"view_item" => __( "View Project", "coderdojo-kata" ),
		"view_items" => __( "View Projects", "coderdojo-kata" ),
		"search_items" => __( "Search Projects", "coderdojo-kata" ),
		"not_found" => __( "No Projects found", "coderdojo-kata" ),
		"not_found_in_trash" => __( "No Projects found in bin", "coderdojo-kata" ),
		"parent" => __( "Learning Path:", "coderdojo-kata" ),
		"featured_image" => __( "Featured image for this Project", "coderdojo-kata" ),
		"set_featured_image" => __( "Set featured image for this Project", "coderdojo-kata" ),
		"remove_featured_image" => __( "Remove featured image for this Project", "coderdojo-kata" ),
		"use_featured_image" => __( "Use as featured image for this Project", "coderdojo-kata" ),
		"archives" => __( "Project archives", "coderdojo-kata" ),
		"insert_into_item" => __( "Insert into Project", "coderdojo-kata" ),
		"uploaded_to_this_item" => __( "Upload to this Project", "coderdojo-kata" ),
		"filter_items_list" => __( "Filter Projects list", "coderdojo-kata" ),
		"items_list_navigation" => __( "Projects list navigation", "coderdojo-kata" ),
		"items_list" => __( "Projects list", "coderdojo-kata" ),
		"attributes" => __( "Projects attributes", "coderdojo-kata" ),
		"name_admin_bar" => __( "Project", "coderdojo-kata" ),
		"item_published" => __( "Project published", "coderdojo-kata" ),
		"item_published_privately" => __( "Project published privately.", "coderdojo-kata" ),
		"item_reverted_to_draft" => __( "Project reverted to draft.", "coderdojo-kata" ),
		"item_scheduled" => __( "Project scheduled", "coderdojo-kata" ),
		"item_updated" => __( "Project updated.", "coderdojo-kata" ),
		"parent_item_colon" => __( "Learning Path:", "coderdojo-kata" ),
	];

	$args = [
		"label" => __( "Projects", "coderdojo-kata" ),
		"labels" => $labels,
		"description" => "Projects used buy Mentors and Ninjas to further their development",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => '/kata/projects/',
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		'capability_type' => 'post',
        'map_meta_cap'    => true,
		"hierarchical" => true,
		"rewrite" => [
            "slug" => "kata/projects",
            "with_front" => false,
            "feeds" => true,
            "pages" => true,
        ],
		"query_var" => true,
		"menu_position" => 21,
		"menu_icon" => "dashicons-media-code",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "author", ],
		"taxonomies" => [ "topic", "hardware", "software", "level", "groups", "types", "levels" ],
		"show_in_graphql" => false,
	];

	register_post_type( "sushi_deck", $args );

	/**
	 * Post Type: sushi_card.
	 */

	$labels = [
		"name" => __( "Step", "coderdojo-kata" ),
		"singular_name" => __( "Step", "coderdojo-kata" ),
		"menu_name" => __( "Kata Settings", "coderdojo-kata" ),
		"all_items" => __( "All Steps", "coderdojo-kata" ),
		"add_new" => __( "Add new", "coderdojo-kata" ),
		"add_new_item" => __( "Add new Step", "coderdojo-kata" ),
		"edit_item" => __( "Edit Step", "coderdojo-kata" ),
		"new_item" => __( "New Step", "coderdojo-kata" ),
		"view_item" => __( "View Step", "coderdojo-kata" ),
		"view_items" => __( "View Steps", "coderdojo-kata" ),
		"search_items" => __( "Search Steps", "coderdojo-kata" ),
		"not_found" => __( "No Steps found", "coderdojo-kata" ),
		"not_found_in_trash" => __( "No Steps found in bin", "coderdojo-kata" ),
		"parent" => __( "Project:", "coderdojo-kata" ),
		"featured_image" => __( "Featured image for this Step", "coderdojo-kata" ),
		"set_featured_image" => __( "Set featured image for this Step", "coderdojo-kata" ),
		"remove_featured_image" => __( "Remove featured image for this Step", "coderdojov" ),
		"use_featured_image" => __( "Use as featured image for this Step", "coderdojo-kata" ),
		"archives" => __( "Step archives", "coderdojo-kata" ),
		"insert_into_item" => __( "Insert into Step", "coderdojo-kata" ),
		"uploaded_to_this_item" => __( "Upload to this Step", "coderdojo-kata" ),
		"filter_items_list" => __( "Filter Steps list", "coderdojo-kata" ),
		"items_list_navigation" => __( "Steps list navigation", "coderdojo-kata" ),
		"items_list" => __( "Steps list", "coderdojo-kata" ),
		"attributes" => __( "Steps attributes", "coderdojo-kata" ),
		"name_admin_bar" => __( "Step", "coderdojo-kata" ),
		"item_published" => __( "Step published", "coderdojo-kata" ),
		"item_published_privately" => __( "Step published privately.", "coderdojov" ),
		"item_reverted_to_draft" => __( "Step reverted to draft.", "coderdojo-kata" ),
		"item_scheduled" => __( "Step scheduled", "coderdojo-kata" ),
		"item_updated" => __( "Step updated.", "coderdojo-kata" ),
		"parent_item_colon" => __( "Project:", "coderdojo-kata" ),
	];

	$args = [
		"label" => __( "Steps", "coderdojo-kata" ),
		"labels" => $labels,
		"description" => "Databases, frameworks and much much more.",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => 'edit.php?post_type=sushi-deck',
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		'capability_type' => 'post',
        'map_meta_cap'    => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 76,
		"menu_icon" => "dashicons-admin-generic",
		"supports" => [ "title", "editor", "page-attributes" ],
	];

	register_post_type( "sushi_card", $args );
}

add_action( 'init', 'coderdojo_kata_register_custom_post_types' );

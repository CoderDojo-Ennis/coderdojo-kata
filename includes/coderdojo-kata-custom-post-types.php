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
	 * Post Type: Sushi Cards.
	 */

	$labels = [
		"name" => __( "Sushi Decks", "coderdojo-kata" ),
		"singular_name" => __( "Sushi Deck", "coderdojo-kata" ),
		"menu_name" => __( "Resources", "coderdojo-kata" ),
		"all_items" => __( "All Sushi Decks", "coderdojo-kata" ),
		"add_new" => __( "Add new", "coderdojo-kata" ),
		"add_new_item" => __( "Add new Sushi Deck", "coderdojo-kata" ),
		"edit_item" => __( "Edit Sushi Deck", "coderdojo-kata" ),
		"new_item" => __( "New Sushi Deck", "coderdojo-kata" ),
		"view_item" => __( "View Sushi Deck", "coderdojo-kata" ),
		"view_items" => __( "View Sushi Decks", "coderdojo-kata" ),
		"search_items" => __( "Search Sushi Decks", "coderdojo-kata" ),
		"not_found" => __( "No Sushi Decks found", "coderdojo-kata" ),
		"not_found_in_trash" => __( "No Sushi Decks found in bin", "coderdojo-kata" ),
		"parent" => __( "Parent Sushi Deck:", "coderdojo-kata" ),
		"featured_image" => __( "Featured image for this Sushi Deck", "coderdojo-kata" ),
		"set_featured_image" => __( "Set featured image for this Sushi Deck", "coderdojo-kata" ),
		"remove_featured_image" => __( "Remove featured image for this Sushi Deck", "coderdojo-kata" ),
		"use_featured_image" => __( "Use as featured image for this Sushi Deck", "coderdojo-kata" ),
		"archives" => __( "Sushi Deck archives", "coderdojo-kata" ),
		"insert_into_item" => __( "Insert into Sushi Deck", "coderdojo-kata" ),
		"uploaded_to_this_item" => __( "Upload to this Sushi Deck", "coderdojo-kata" ),
		"filter_items_list" => __( "Filter Sushi Decks list", "coderdojo-kata" ),
		"items_list_navigation" => __( "Sushi Decks list navigation", "coderdojo-kata" ),
		"items_list" => __( "Sushi Decks list", "coderdojo-kata" ),
		"attributes" => __( "Sushi Decks attributes", "coderdojo-kata" ),
		"name_admin_bar" => __( "Sushi Deck", "coderdojo-kata" ),
		"item_published" => __( "Sushi Deck published", "coderdojo-kata" ),
		"item_published_privately" => __( "Sushi Deck published privately.", "coderdojo-kata" ),
		"item_reverted_to_draft" => __( "Sushi Deck reverted to draft.", "coderdojo-kata" ),
		"item_scheduled" => __( "Sushi Deck scheduled", "coderdojo-kata" ),
		"item_updated" => __( "Sushi Deck updated.", "coderdojo-kata" ),
		"parent_item_colon" => __( "Parent Sushi Deck:", "coderdojo-kata" ),
	];

	$args = [
		"label" => __( "Sushi Decks", "coderdojo-kata" ),
		"labels" => $labels,
		"description" => "Databases, frameworks and much much more.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => '/kata/resources/',
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		'capability_type' => 'post', //custom capability type
        'map_meta_cap'    => true,
		"hierarchical" => true,
		"rewrite" => [ 
            "slug" => "kata/%area%/%group%/%type%", 
            "with_front" => false,
            "feeds" => true,
            "pages" => true,
        ],
		"query_var" => true,
		"menu_position" => 21,
		"menu_icon" => "dashicons-media-code",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "author", ],
	];

	register_post_type( "sushi-deck", $args );

	/**
	 * Post Type: Sushi Cards.
	 */

	$labels = [
		"name" => __( "Sushi Cards", "coderdojo-kata" ),
		"singular_name" => __( "Sushi Card", "coderdojo-kata" ),
		"menu_name" => __( "Kata Settings", "coderdojo-kata" ),
		"all_items" => __( "All Sushi Cards", "coderdojo-kata" ),
		"add_new" => __( "Add new", "coderdojo-kata" ),
		"add_new_item" => __( "Add new Sushi Card", "coderdojo-kata" ),
		"edit_item" => __( "Edit Sushi Card", "coderdojo-kata" ),
		"new_item" => __( "New Sushi Card", "coderdojo-kata" ),
		"view_item" => __( "View Sushi Card", "coderdojo-kata" ),
		"view_items" => __( "View Sushi Cards", "coderdojo-kata" ),
		"search_items" => __( "Search Sushi Cards", "coderdojo-kata" ),
		"not_found" => __( "No Sushi Cards found", "coderdojo-kata" ),
		"not_found_in_trash" => __( "No Sushi Cards found in bin", "coderdojo-kata" ),
		"parent" => __( "Parent Sushi Deck:", "coderdojo-kata" ),
		"featured_image" => __( "Featured image for this Sushi Card", "coderdojo-kata" ),
		"set_featured_image" => __( "Set featured image for this Sushi Card", "coderdojo-kata" ),
		"remove_featured_image" => __( "Remove featured image for this Sushi Card", "coderdojov" ),
		"use_featured_image" => __( "Use as featured image for this Sushi Card", "coderdojo-kata" ),
		"archives" => __( "Sushi Card archives", "coderdojo-kata" ),
		"insert_into_item" => __( "Insert into Sushi Card", "coderdojo-kata" ),
		"uploaded_to_this_item" => __( "Upload to this Sushi Card", "coderdojo-kata" ),
		"filter_items_list" => __( "Filter Sushi Cards list", "coderdojo-kata" ),
		"items_list_navigation" => __( "Sushi Cards list navigation", "coderdojo-kata" ),
		"items_list" => __( "Sushi Cards list", "coderdojo-kata" ),
		"attributes" => __( "Sushi Cards attributes", "coderdojo-kata" ),
		"name_admin_bar" => __( "Sushi Card", "coderdojo-kata" ),
		"item_published" => __( "Sushi Card published", "coderdojo-kata" ),
		"item_published_privately" => __( "Sushi Card published privately.", "coderdojov" ),
		"item_reverted_to_draft" => __( "Sushi Card reverted to draft.", "coderdojo-kata" ),
		"item_scheduled" => __( "Sushi Card scheduled", "coderdojo-kata" ),
		"item_updated" => __( "Sushi Card updated.", "coderdojo-kata" ),
		"parent_item_colon" => __( "Parent Sushi Deck:", "coderdojo-kata" ),
	];

	$args = [
		"label" => __( "Sushi Cards", "coderdojo" ),
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
		'capability_type' => 'post', //custom capability type
        'map_meta_cap'    => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 76,
		"menu_icon" => "dashicons-admin-generic",
		"supports" => [ "title", "editor", "page-attributes" ],
	];

	register_post_type( "sushi-card", $args );
}

add_action( 'init', 'coderdojo_kata_register_custom_post_types' );
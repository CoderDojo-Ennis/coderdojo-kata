<?php

/**
 * Add taxonomies
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoderDojo Kata
 * @subpackage CoderDojo
 * @since 1.0.0
 */

function coderdojo_kata_register_custom_taxonomies() {

	/**
	 * Taxonomy: Groups.
	 */

	$labels = [
		"name" => __( "Groups", "coderdojo-kata" ),
		"singular_name" => __( "Group", "coderdojo-kata" ),
		"menu_name" => __( "Groups", "coderdojo-kata" ),
		"all_items" => __( "All Groups", "coderdojo-kata" ),
		"edit_item" => __( "Edit Group", "coderdojo-kata" ),
		"view_item" => __( "View Group", "coderdojo-kata" ),
		"update_item" => __( "Update Group name", "coderdojo-kata" ),
		"add_new_item" => __( "Add new Group", "coderdojo-kata" ),
		"new_item_name" => __( "New Group name", "coderdojo-kata" ),
		"parent_item" => __( "Parent Group", "coderdojo-kata" ),
		"parent_item_colon" => __( "Parent Group:", "coderdojo-kata" ),
		"search_items" => __( "Search Groups", "coderdojo-kata" ),
		"popular_items" => __( "Popular Groups", "coderdojo-kata" ),
		"separate_items_with_commas" => __( "Separate Groups with commas", "coderdojo-kata" ),
		"add_or_remove_items" => __( "Add or remove Groups", "coderdojo-kata" ),
		"choose_from_most_used" => __( "Choose from the most used Groups", "coderdojo-kata" ),
		"not_found" => __( "No Groups found", "coderdojo-kata" ),
		"no_terms" => __( "No Groups", "coderdojo-kata" ),
		"items_list_navigation" => __( "Groups list navigation", "coderdojo-kata" ),
		"items_list" => __( "Groups list", "coderdojo-kata" ),
		"back_to_items" => __( "Back to Groups", "coderdojo-kata" ),
	];


	$args = [
		"label" => __( "Groups", "coderdojo-kata" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => 'resources',
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'kata', 'with_front' => false,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "groups",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "groups", [ "sushi_shoe","sushi_deck" ], $args );

	/**
	 * Taxonomy: Types.
	 */

	$labels = [
		"name" => __( "Types", "coderdojo-kata" ),
		"singular_name" => __( "Type", "coderdojo-kata" ),
		"menu_name" => __( "Types", "coderdojo-kata" ),
		"all_items" => __( "All Types", "coderdojo-kata" ),
		"edit_item" => __( "Edit Type", "coderdojo-kata" ),
		"view_item" => __( "View Type", "coderdojo-kata" ),
		"update_item" => __( "Update Type name", "coderdojo-kata" ),
		"add_new_item" => __( "Add new Type", "coderdojo-kata" ),
		"new_item_name" => __( "New Type name", "coderdojo-kata" ),
		"parent_item" => __( "Parent Type", "coderdojo-kata" ),
		"parent_item_colon" => __( "Parent Type:", "coderdojo-kata" ),
		"search_items" => __( "Search Types", "coderdojo-kata" ),
		"popular_items" => __( "Popular Types", "coderdojo-kata" ),
		"separate_items_with_commas" => __( "Separate Types with commas", "coderdojo-kata" ),
		"add_or_remove_items" => __( "Add or remove Types", "coderdojo-kata" ),
		"choose_from_most_used" => __( "Choose from the most used Types", "coderdojo-kata" ),
		"not_found" => __( "No Types found", "coderdojo-kata" ),
		"no_terms" => __( "No Types", "coderdojo-kata" ),
		"items_list_navigation" => __( "Types list navigation", "coderdojo-kata" ),
		"items_list" => __( "Types list", "coderdojo-kata" ),
		"back_to_items" => __( "Back to Types", "coderdojo-kata" ),
	];


	$args = [
		"label" => __( "Types", "coderdojo-kata" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'types', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "types",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "types", [ "sushi_deck" ], $args );

	/**
	 * Taxonomy: Levels.
	 */

	$labels = [
		"name" => __( "Levels", "coderdojo-kata" ),
		"singular_name" => __( "Level", "coderdojo-kata" ),
		"menu_name" => __( "Levels", "coderdojo-kata" ),
		"all_items" => __( "All Levels", "coderdojo-kata" ),
		"edit_item" => __( "Edit Level", "coderdojo-kata" ),
		"view_item" => __( "View Level", "coderdojo-kata" ),
		"update_item" => __( "Update Level name", "coderdojo-kata" ),
		"add_new_item" => __( "Add new Level", "coderdojo-kata" ),
		"new_item_name" => __( "New Level name", "coderdojo-kata" ),
		"parent_item" => __( "Parent Level", "coderdojo-kata" ),
		"parent_item_colon" => __( "Parent Level:", "coderdojo-kata" ),
		"search_items" => __( "Search Levels", "coderdojo-kata" ),
		"popular_items" => __( "Popular Levels", "coderdojo-kata" ),
		"separate_items_with_commas" => __( "Separate Levels with commas", "coderdojo-kata" ),
		"add_or_remove_items" => __( "Add or remove Levels", "coderdojo-kata" ),
		"choose_from_most_used" => __( "Choose from the most used Levels", "coderdojo-kata" ),
		"not_found" => __( "No Levels found", "coderdojo-kata" ),
		"no_terms" => __( "No Levels", "coderdojo-kata" ),
		"items_list_navigation" => __( "Levels list navigation", "coderdojo-kata" ),
		"items_list" => __( "Levels list", "coderdojo-kata" ),
		"back_to_items" => __( "Back to Levels", "coderdojo-kata" ),
	];


	$args = [
		"label" => __( "Levels", "coderdojo-kata" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'levels', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "levels",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "levels", [ "sushi_deck" ], $args );
}

add_action( 'init', 'coderdojo_kata_register_custom_taxonomies' );


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
	 * Taxonomy: Resource Groups.
	 */

	$labels = [
		"name" => __( "Resource Groups", "coderdojo-kata" ),
		"singular_name" => __( "Resource Group", "coderdojo-kata" ),
		"menu_name" => __( "Resource Groups", "coderdojo-kata" ),
		"all_items" => __( "All Resource Groups", "coderdojo-kata" ),
		"edit_item" => __( "Edit Resource Group", "coderdojo-kata" ),
		"view_item" => __( "View Resource Group", "coderdojo-kata" ),
		"update_item" => __( "Update Resource Group name", "coderdojo-kata" ),
		"add_new_item" => __( "Add new Resource Group", "coderdojo-kata" ),
		"new_item_name" => __( "New Resource Group name", "coderdojo-kata" ),
		"parent_item" => __( "Parent Resource Group", "coderdojo-kata" ),
		"parent_item_colon" => __( "Parent Resource Group:", "coderdojo-kata" ),
		"search_items" => __( "Search Resource Groups", "coderdojo-kata" ),
		"popular_items" => __( "Popular Resource Groups", "coderdojo-kata" ),
		"separate_items_with_commas" => __( "Separate Resource Groups with commas", "coderdojo-kata" ),
		"add_or_remove_items" => __( "Add or remove Resource Groups", "coderdojo-kata" ),
		"choose_from_most_used" => __( "Choose from the most used Resource Groups", "coderdojo-kata" ),
		"not_found" => __( "No Resource Groups found", "coderdojo-kata" ),
		"no_terms" => __( "No Resource Groups", "coderdojo-kata" ),
		"items_list_navigation" => __( "Resource Groups list navigation", "coderdojo-kata" ),
		"items_list" => __( "Resource Groups list", "coderdojo-kata" ),
		"back_to_items" => __( "Back to Resource Groups", "coderdojo-kata" ),
	];

	
	$args = [
		"label" => __( "Resource Groups", "coderdojo-kata" ),
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
	register_taxonomy( "groups", [ "sushi-deck" ], $args );

	/**
	 * Taxonomy: Resource Types.
	 */

	$labels = [
		"name" => __( "Resource Types", "coderdojo-kata" ),
		"singular_name" => __( "Resource Type", "coderdojo-kata" ),
		"menu_name" => __( "Resource Types", "coderdojo-kata" ),
		"all_items" => __( "All Resource Types", "coderdojo-kata" ),
		"edit_item" => __( "Edit Resource Type", "coderdojo-kata" ),
		"view_item" => __( "View Resource Type", "coderdojo-kata" ),
		"update_item" => __( "Update Resource Type name", "coderdojo-kata" ),
		"add_new_item" => __( "Add new Resource Type", "coderdojo-kata" ),
		"new_item_name" => __( "New Resource Type name", "coderdojo-kata" ),
		"parent_item" => __( "Parent Resource Type", "coderdojo-kata" ),
		"parent_item_colon" => __( "Parent Resource Type:", "coderdojo-kata" ),
		"search_items" => __( "Search Resource Types", "coderdojo-kata" ),
		"popular_items" => __( "Popular Resource Types", "coderdojo-kata" ),
		"separate_items_with_commas" => __( "Separate Resource Types with commas", "coderdojo-kata" ),
		"add_or_remove_items" => __( "Add or remove Resource Types", "coderdojo-kata" ),
		"choose_from_most_used" => __( "Choose from the most used Resource Types", "coderdojo-kata" ),
		"not_found" => __( "No Resource Types found", "coderdojo-kata" ),
		"no_terms" => __( "No Resource Types", "coderdojo-kata" ),
		"items_list_navigation" => __( "Resource Types list navigation", "coderdojo-kata" ),
		"items_list" => __( "Resource Types list", "coderdojo-kata" ),
		"back_to_items" => __( "Back to Resource Types", "coderdojo-kata" ),
	];

	
	$args = [
		"label" => __( "Resource Types", "coderdojo-kata" ),
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
	register_taxonomy( "types", [ "sushi-deck" ], $args );

	/**
	 * Taxonomy: Resource Levels.
	 */

	$labels = [
		"name" => __( "Resource Levels", "coderdojo-kata" ),
		"singular_name" => __( "Resource Level", "coderdojo-kata" ),
		"menu_name" => __( "Resource Levels", "coderdojo-kata" ),
		"all_items" => __( "All Resource Levels", "coderdojo-kata" ),
		"edit_item" => __( "Edit Resource Level", "coderdojo-kata" ),
		"view_item" => __( "View Resource Level", "coderdojo-kata" ),
		"update_item" => __( "Update Resource Level name", "coderdojo-kata" ),
		"add_new_item" => __( "Add new Resource Level", "coderdojo-kata" ),
		"new_item_name" => __( "New Resource Level name", "coderdojo-kata" ),
		"parent_item" => __( "Parent Resource Level", "coderdojo-kata" ),
		"parent_item_colon" => __( "Parent Resource Level:", "coderdojo-kata" ),
		"search_items" => __( "Search Resource Levels", "coderdojo-kata" ),
		"popular_items" => __( "Popular Resource Levels", "coderdojo-kata" ),
		"separate_items_with_commas" => __( "Separate Resource Levels with commas", "coderdojo-kata" ),
		"add_or_remove_items" => __( "Add or remove Resource Levels", "coderdojo-kata" ),
		"choose_from_most_used" => __( "Choose from the most used Resource Levels", "coderdojo-kata" ),
		"not_found" => __( "No Resource Levels found", "coderdojo-kata" ),
		"no_terms" => __( "No Resource Levels", "coderdojo-kata" ),
		"items_list_navigation" => __( "Resource Levels list navigation", "coderdojo-kata" ),
		"items_list" => __( "Resource Levels list", "coderdojo-kata" ),
		"back_to_items" => __( "Back to Resource Levels", "coderdojo-kata" ),
	];

	
	$args = [
		"label" => __( "Resource Levels", "coderdojo-kata" ),
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
	register_taxonomy( "levels", [ "sushi-deck" ], $args );
}

add_action( 'init', 'coderdojo_kata_register_custom_taxonomies' );


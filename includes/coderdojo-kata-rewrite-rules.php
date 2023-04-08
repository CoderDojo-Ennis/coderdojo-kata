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

add_action( 'init', function() {

	add_rewrite_rule( '^kata/projects/(.*)/([^/]+)/?$','index.php?sushi_card=$matches[2]','top' );
	add_rewrite_rule( '^kata/(.+?)/(.+?)/([^/]+)/?$', 'index.php?sushi_group=$matches[1]&sushi_group=$matches[2]&sushi_type=$matches[3]', 'top');

});

add_filter( 'post_type_link', function( $link, $post ) {
	if ( 'sushi_card' == get_post_type( $post ) ) {
		//Lets go to get the parent cartoon-series name
		if( $post->post_parent ) {
			$parent = get_post( $post->post_parent );
			if( !empty($parent->post_name) ) {
				return str_replace( '%sushi_deck%', $parent->post_name, $link );
			}
		} else {
			//This seems to not work. It is intented to build pretty permalinks
			//when episodes has not parent, but it seems that it would need
			//additional rewrite rules
			//return str_replace( '/%series_name%', '', $link );
		}

	}
	return $link;
}, 10, 2 );


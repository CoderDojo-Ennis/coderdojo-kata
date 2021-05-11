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

function coderdojo_kata_add_rewrite_rules() {
	add_rewrite_tag('%sushi-card%', '([^/]+)', 'sushi-card=');
	add_permastruct('sushi-card', '/kata/%area%/%sushi-card%', false);
	add_rewrite_rule('^kata/([^/]+)/([^/]+)/([^/]+)/([^/]+)/([^/]+)/?','index.php?sushi-card=$matches[5]','top');
	add_rewrite_rule('^editor/([^/]+)/([^/]+)/([^/]+)/([^/]+)/([^/]+)/?','index.php?sushi-card=$matches[5]','top');
    add_rewrite_rule('^kata/([^/]+)/([^/]+)/([^/]+)/([^/]+)/?','index.php?post_type=sushi-deck&types=$matches[3]&name=$matches[4]','top');
	add_rewrite_rule('^editor/([^/]+)/([^/]+)/([^/]+)/([^/]+)/?','index.php?post_type=sushi-deck&types=$matches[3]&name=$matches[4]','top');
	add_rewrite_rule('^teams/([^/]+)/([^/]+)/([^/]+)/([^/]+)/?','index.php?post_type=sushi-deck&types=$matches[3]&name=$matches[4]','top');
	add_rewrite_rule('^kata/([^/]+)/([^/]+)/([^/]+)/?','index.php?groups=$matches[1]&groups=$matches[2]&types=$matches[3]','top');
}
add_action( 'init', 'coderdojo_kata_add_rewrite_rules' );

function my_permalinks($permalink, $post, $leavename) {

	if($post->post_type != 'sushi-card' || empty($permalink) || in_array($post->post_status, array('draft', 'pending', 'auto-draft')))
	 	return $permalink;

	//$parent = $post->post_parent;
	//$parent_post = get_post( 7 );

	$parent_url = get_permalink( $post->post_parent );
        $permalink = $parent_url . $post->post_name . '/';

	return $permalink;
}
add_filter('post_type_link', 'my_permalinks', 10, 3);

function coderdojo_kata_filter_post_link( $permalink, $post ) {
	
	if ($post->post_type != 'sushi-deck' || empty($permalink) || in_array($post->post_status, array('draft', 'pending', 'auto-draft'))) {
		return $permalink;
	}
	
	$area_term = coderdojo_kata_get_area_meta($post->ID);
	$group_term = coderdojo_kata_get_group_meta($post->ID);
	$type_term = coderdojo_kata_get_type_meta($post->ID);

	$area = urlencode( $area_term->slug );
	$group = urlencode( $group_term->slug );
    $type = urlencode( $type_term->slug );

    $placeholders = array('%area%', '%group%', "%type%");
    $taxonomies   = array($area, $group, $type);
    $permalink = str_replace($placeholders, $taxonomies , $permalink ); 

    return $permalink;
}
add_filter('post_type_link', 'coderdojo_kata_filter_post_link', 10, 2 );


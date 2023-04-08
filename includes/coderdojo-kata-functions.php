<?php


function coderdojo_kata_get_area_terms() {

    return get_terms(
        array(
            'taxonomy' => 'sushi_group',
            'orderby' => 'term_id',
            'order' => 'ASC',
            'parent' => 0,
            'hide_empty' => false
        )
    );
}

function coderdojo_kata_get_area_meta($post_ID) {

    $area_terms =  wp_get_object_terms( $post_ID, 'sushi_group', array('orderby' => 'term_id'));

	$area = NULL;
    if($area_terms) {
        $area = $area_terms[0];
    }
    return $area;
}

function coderdojo_kata_get_group_terms($area_ID, $number_of_terms = '') {

    return  get_terms( array(
        'taxonomy' => 'sushi_group',
        'order' => 'ASC',
        'orderby' => 'term_id',
        'parent' => $area_ID,
        'number' => $number_of_terms,
        'hide_empty' => false
    ) );
}

function coderdojo_kata_get_group_meta($post_ID) {

    $group_terms =  wp_get_object_terms( $post_ID, 'sushi_group', array('orderby' => 'term_id'));

	$group = array(
		 'name' => ''
	);
    if($group_terms) {
        $group = $group_terms[1];
    }
    return $group;
}

function coderdojo_kata_get_type_terms() {

    return get_terms(
        array(
            'taxonomy' => 'sushi_type',
            'orderby' => 'term_id',
            'order' => 'ASC',
            'hide_empty' => false
        )
    );
}

function coderdojo_kata_get_type_meta($post_ID) {

    $type_terms =  wp_get_object_terms( $post_ID, 'sushi_type' );

    $type = array(
        'name' => ''
    );
    if($type_terms) {
            $type = $type_terms[0];
    }

    return $type;
}

function coderdojo_kata_get_level_terms() {

    return get_terms(
        array(
            'taxonomy' => 'sushi_level',
            'orderby' => 'term_id',
            'order' => 'ASC',
            'hide_empty' => false
        )
    );
}

function coderdojo_kata_get_level_meta($post_ID) {

    $level_terms =  wp_get_object_terms( $post_ID, 'sushi_level' );

    $level = array(
        'name' => ''
    );
    if($level_terms) {
            $level = $level_terms[0];
    }

    return $level;
}


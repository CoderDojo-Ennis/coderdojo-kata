<?php

// Add meta boxes to top level parent only
function coderdojo_kata_register_metaboxes( $post_type, $post ) {
    
	if (!$post_type == 'sushi-deck') {
		return;
	}

	//add_meta_box('theme_box_ID', __('Theme'), 'your_styling_function', 'sushi-deck', 'side', 'core');
	add_meta_box( 
		'sushi-deck-metabox',
		'Sushi Deck Details',
		'sushi_deck_metabox_callback',
		'sushi-deck',
		'side',
		'high'
	);
 
	add_meta_box( 
	 'sushi-cards-metabox',
	 'Sushi Cards',
	 'sushi_cards_metabox_callback',
	 'sushi-deck',
	 'advanced',
	 'high'
	 );
	
}
add_action( 'add_meta_boxes', 'coderdojo_kata_register_metaboxes', 10, 2 );


function sushi_deck_metabox_callback(){
	
	global $post;
	$groups;$group;
	
	$areas = coderdojo_kata_get_area_terms();
	$area = coderdojo_kata_get_area_meta($post->ID);

	if($area != null) {
		$groups = coderdojo_kata_get_group_terms($area->term_id);
		$group = coderdojo_kata_get_group_meta($post->ID);
	}
	
	$types = coderdojo_kata_get_type_terms();
	$type = coderdojo_kata_get_type_meta($post->ID);

	$levels= coderdojo_kata_get_level_terms();
	$level = coderdojo_kata_get_level_meta($post->ID);

	$duration = get_post_meta( $post->ID, $key = 'sushi_deck_duration');

	$trinket = get_post_meta( $post->ID, $key = 'sushi_deck_trinket');
	if(empty($trinket)) {
		$trinket_url = "";
	} else {
		$trinket_url = $trinket[0];
	}
 
	?>
	<div class="components-panel__row"> 
		<div class="editor-post-format__content">
			<label for="post-format-selector-0">Area</label>
			<select name="form_area" id="form_area" onChange="groupdropdownupdate()">
				<option value="">Select...</option>
				<?php foreach ($areas as $term) {
					if($area->name == $term->name){
						echo '<option value="' . $term->slug . '"selected>' . $term->name . '</option>';
					} else {
						echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
					}
				}?>
			</select>
		</div>
	</div>
	<div class="components-panel__row">
		<div class="editor-post-format__content">
			<label for="post-format-selector-0">Group</label>
			<select name="form_group" id="form_group">
				<option value="">Select...</option>
					<?php foreach ($groups as $term) {
					if($group->name == $term->name){
						echo '<option value="' . $term->slug . '"selected>' . $term->name . '</option>';
					} else {
						echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
					}
				}?> 
			</select>
		</div>
	</div>
	<div class="components-panel__row">
		<div class="editor-post-format__content">
			<label for="post-format-selector-0">Type</label>
			<select name="form_type" id="form_type">
				<option value="">Select...</option>
				<?php foreach ($types as $term) {
					if($type->name == $term->name){
						echo '<option value="' . $term->slug . '"selected>' . $term->name . '</option>';
					} else {
						echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
					}
				}?>
			</select>
		</div>
	</div>
	<div class="components-panel__row">
		<div class="editor-post-format__content">
			<label for="post-format-selector-0">Level</label>
			<select name="form_level" id="form_level">
				<option value="">Select...</option>
				<?php foreach ($levels as $term) {
					if($level->name == $term->name){
						echo '<option value="' . $term->slug . '"selected>' . $term->name . '</option>';
					} else {
						echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
					}
				}?>
			</select>
		</div>
	</div>
	<div class="components-panel__row">
		<div class="components-base-control editor-page-attributes__order css-wdf2ti-Wrapper e1puf3u0">
			<div class="components-base-control__field css-11vcxb9-StyledField e1puf3u1">
				<label class="components-base-control__label css-pezhm9-StyledLabel e1puf3u2" for="inspector-text-control-1">Duration</label>
				<input class="components-text-control__input" type="number" name="form_duration" id="form_duration" size="6" value="<?php echo $duration[0] ?>">
			</div>
		</div>
	</div> 
	<div class="components-panel__row">
		<div class="components-base-control editor-page-attributes__order css-wdf2ti-Wrapper e1puf3u0">
			<div class="components-base-control__field css-11vcxb9-StyledField e1puf3u1">
				<label class="components-base-control__label css-pezhm9-StyledLabel e1puf3u2" for="inspector-text-control-1">Trinket</label>
				<input class="components-text-control__input" type="string" name="form_trinket" id="form_trinket" size="6" value="<?php echo $trinket_url ?>">
			</div>
		</div>
	</div>
 
	<?php
 }
 
function save_sushi_deck_custom_metabox( $post_id ) {

	global $post;

	if ( array_key_exists( 'form_area', $_POST) && array_key_exists( 'form_group', $_POST) ) {
		$tags = array(
			$_POST['form_area'],
			$_POST['form_group']
		);
		wp_set_object_terms( $post_id, $tags, 'groups' );
	}

	if ( array_key_exists( 'form_type', $_POST ) ) {
		$tag = array( $_POST['form_type'] ); 
		wp_set_object_terms( $post_id, $_POST['form_type'], 'types' );
	}

	if ( array_key_exists( 'form_level', $_POST ) ) { 
		wp_set_object_terms( $post_id, $_POST['form_level'], 'levels' );
	}

	if ( array_key_exists( 'form_duration', $_POST ) ) { 
		update_post_meta($post_id, 'sushi_deck_duration', $_POST['form_duration']);
	}

	if ( array_key_exists( 'form_trinket', $_POST ) ) { 
		update_post_meta($post_id, 'sushi_deck_trinket', $_POST['form_trinket']);
	}

}
add_action( 'save_post', 'save_sushi_deck_custom_metabox' );
 
 function sushi_cards_metabox_callback() {
 
	 global $post;
 
	 
	 
	 if ( $post->post_status == 'auto-draft' ) {
		 return;
	 }
	 echo '<div class="form-field form-required sushi-card-name-wrap">';
	 echo '<label for="sushi-card-name">Name</label>';
	 echo '<input name="sushi-card-name" id="sushi-card-name" type="text" value="" size="40" aria-required="true" spellcheck="false" data-ms-editor="true">';
	 echo '<p>The name of your new Sushi Card.</p>';
	 echo '<a class="button action" onclick="apfaddpost(' .  $post->ID . ');" style="cursor: pointer">Add new Sushi Card</a>';
	 echo '</div>';
 
	 $sushi_Card_Table = new Sushi_Card_List_Table($post->ID);
	 $sushi_Card_Table->prepare_items(); 
	 $sushi_Card_Table->display(); 	
 }
 
 function _ajax_fetch_custom_list_callback() {
 
	 $post_ID = $_POST['post_ID'];
	 $post_Name = $_POST['post_name'];
	 $id = $_GET['post'];

	 
	 
	 $post_id = wp_insert_post( array(
		 'post_title'        => $post_Name,
		 'post_status'       => 'draft',
		 'post_parent'       => $post_ID,
		 'post_type'         => 'sushi-card'
	 ) );
 
	 $sushi_Card_Table = new Sushi_Card_List_Table($post_ID);
	 $sushi_Card_Table->ajax_response();
 }
 add_action( 'wp_ajax_nopriv__ajax_fetch_custom_list', '_ajax_fetch_custom_list_callback' );
 add_action('wp_ajax__ajax_fetch_custom_list', '_ajax_fetch_custom_list_callback');
 
 
 function _ajax_fetch_group_list_callback() {
 
	$group_slug = $_POST['term_slug'];
	$group = get_term_by( 'slug', $group_slug, 'groups');
	$group_terms = coderdojo_kata_get_group_terms($group->term_id);
	/* $group_terms = get_terms( array(
        'taxonomy' => 'groups',
        'order' => 'ASC',
        'orderby' => 'term_id',
        'parent' => $group->term_id,
        'hide_empty' => false
    ) ); */

	$terms = array();
	foreach($group_terms as $group_term) {
		$term = array(
			'slug' => $group_term->slug,
			'term_name' => $group_term->name
		);
		array_push($terms, $term);
	}
	$response = array( 'terms' => $terms );

	echo json_encode($response);
	wp_die();
	
	
}
add_action( 'wp_ajax_nopriv__ajax_fetch_group_list', '_ajax_fetch_group_list_callback' );
add_action('wp_ajax__ajax_fetch_group_list', '_ajax_fetch_group_list_callback');
 
 
 
 


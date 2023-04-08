<?php

function coderdojo_kata_register_rewrite_tags(){

//    add_rewrite_tag('%software%', '([^&]+)', 'software=');
//    add_rewrite_tag('%hardware%', '([^&]+)', 'hardware=');
//    add_rewrite_tag('%studio%', '([^&]+)', 'studio=');
//    add_rewrite_tag('%arcade%', '([^&]+)', 'arcade=');
//    add_rewrite_tag('%other%', '([^&]+)', 'other=');
//
//    add_rewrite_tag('%area%', '([^&]+)', 'post_type=');
//    add_rewrite_tag('%software_group%', '([^&]+)', 'software_group=');
//    add_rewrite_tag('%hardware_group%', '([^&]+)', 'hardware_group=');
//    add_rewrite_tag('%studio_group%', '([^&]+)', 'studio_group=');
//    add_rewrite_tag('%arcade_group%', '([^&]+)', 'arcade_group=');
//    add_rewrite_tag('%other_group%', '([^&]+)', 'other_group=');
    add_rewrite_tag('%sushi_type%', '([^&]+)', 'sushi_type=');
    add_rewrite_tag('%sushi_level%', '([^&]+)', 'sushi_level=');
    add_rewrite_tag('%sushi_deck%', '([^&]+)', 'sushi_deck=');
}
add_action( 'init', 'coderdojo_kata_register_rewrite_tags' );

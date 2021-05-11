<?php
/**
 * Plugin Name:     Coderdojo Kata
 * Description:     Make your own resources with this handy plugin.
 * Version:         0.1.0
 * Author:          Anthony Nolan
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     coderdojo-kata
 *
 * @package         coderdojo
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Custom Fuctions */
require_once dirname( __FILE__ ) . '/includes/coderdojo-kata-functions.php';

/** Custom Post Types */
require_once dirname( __FILE__ ) . '/includes/coderdojo-kata-custom-post-types.php';

/** Custom Menu Pages */
require_once dirname( __FILE__ ) . '/includes/coderdojo-kata-menu-pages.php';

/** Custom Meta Boxes */
require_once dirname( __FILE__ ) . '/includes/coderdojo-kata-meta-boxes.php';

/** Custom Rewrite Rules */
require_once dirname( __FILE__ ) . '/includes/coderdojo-kata-rewrite-rules.php';

/** Custom Rewrite Tags */
//require_once dirname( __FILE__ ) . '/includes/coderdojo-kata-rewrite-tags.php';

/** Custom Taxonomies */
require_once dirname( __FILE__ ) . '/includes/coderdojo-kata-taxonomies.php';

/** Custom Terms */
require_once dirname( __FILE__ ) . '/includes/coderdojo-kata-terms.php';

/** Custom Terms */
//require_once dirname( __FILE__ ) . '/includes/coderdojo-kata-list-sushi-cards.php';

/** Custom List Table */
require_once dirname( __FILE__ ) . '/classes/class-coderdojo-kata-sushi-card-list-table.php';

/** Custom Sushi Card Walker */
require_once dirname( __FILE__ ) . '/classes/class-coderdojo-kata-walker-sushi-card.php';


/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function coderdojo_kata_block_init() {
	register_block_type_from_metadata( __DIR__ . '/src/code');
	register_block_type_from_metadata( __DIR__ . '/src/hints');
	register_block_type_from_metadata( __DIR__ . '/src/hint');
	register_block_type_from_metadata( __DIR__ . '/src/ingredient');
	register_block_type_from_metadata( __DIR__ . '/src/task');
}
add_action( 'init', 'coderdojo_kata_block_init' );

function coderdojo_kata_setup() {
	
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	$editor_stylesheet_path = './assets/css/style-editor.css';

	// Enqueue editor styles.
	add_editor_style( $editor_stylesheet_path );
}
add_action( 'after_setup_theme', 'coderdojo_kata_setup' );

function coderdojo_kata_enqueue_script() {   
    wp_enqueue_script( 'sushi-cards_script', plugin_dir_url( __FILE__ ) . 'assets/js/index.js' );
}
add_action('wp_enqueue_scripts', 'coderdojo_kata_enqueue_script');

add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_style( 'coderdojo-custom-block-editor-styles', plugin_dir_url( __FILE__ ) . 'assets/css/style-editor.css');
	wp_enqueue_script( 'sushi-cards_editor__script', plugin_dir_url( __FILE__ ) . 'assets/js/editor-index.js' );
	wp_localize_script( 'sushi-cards_editor__script', 'apfajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
} );



define('APFSURL', WP_PLUGIN_URL."/".dirname( plugin_basename( __FILE__ ) ) );
define('APFPATH', WP_PLUGIN_DIR."/".dirname( plugin_basename( __FILE__ ) ) );





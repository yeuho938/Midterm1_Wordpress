<?php
/**
 * Plugin Name: Gutenberg Post Blocks
 * Description: Gutenberg Post blocks is a Gutenberg block Plugin for creating dynamic blog listing, grid and slider.
 * Version:     1.2.6
 * Author:      wpxpo
 * Author URI:  https://wpxpo.com/
 * Text Domain: ultimate-post
 * License:     GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

defined( 'ABSPATH' ) || exit;

// Define
define('ULTP_VER', '1.2.6');
define('ULTP_URL', plugin_dir_url(__FILE__));
define('ULTP_PATH', plugin_dir_path(__FILE__));

// Language Load
add_action('init', 'ultp_language_load');
function ultp_language_load() {
    load_plugin_textdomain( 'ultimate-post', false, basename(dirname(__FILE__))."/languages/" );
}

// Common Function
if(!function_exists('ultimate_post')) {
    function ultimate_post() {
        require_once ULTP_PATH . 'classes/Functions.php';
        return new \ULTP\Functions();
    }
}

// Plugin Initialization
if (!class_exists( 'ultp_Initialization' )) {
    require_once ULTP_PATH . 'classes/Initialization.php';
    new \ULTP\Initialization();
}

// Template
require_once ULTP_PATH . 'classes/Templates.php';
new \ULTP\Templates();
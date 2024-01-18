<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://www.closingtags.com
 * @since             1.0.0
 * @package           Cfmsugarwod
 *
 * @wordpress-plugin
 * Plugin Name:       CrossFit Minot Sugar WOD
 * Plugin URI:        https://https://cfminot.com
 * Description:       Show the CrossFit Minot Sugar WOD on a given page.
 * Version:           1.0.0
 * Author:            Dylan Hildenbrand
 * Author URI:        https://https://www.closingtags.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cfmsugarwod
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CFMSUGARWOD_VERSION', '1.0.0' );

add_action( 'plugins_loaded', function(){
  load_plugin_textdomain( 'cfmsugarwod' );
} );

// create menu page in admin interface
add_action('admin_menu', function() {
  add_submenu_page(
    'options-general.php', // top level menu page
    'CrossFit Minot SugarWOD', // title of the settings page
    'CrossFit Minot SugarWOD', // title of the submenu
    'manage_options', // capability of the user to see this page
    'cfmsugarwod', // slug of the settings page
    function() {require 'admin/partials/cfmsugarwod-admin-display.php';} // callback function when rendering the page
  );
});


// create options to store in DB
add_action('admin_init', function() {
  register_setting('cfmsugarwod_options', 'cfmsugarwod_api');
});

function cfmsugarwod_shortcode($atts, $content, $tag) {
  require('public/partials/cfmsugarwod-public-display.php');
}

function shortcode_init() {
  add_shortcode('cfmsugarwod', 'cfmsugarwod_shortcode'); 
}
add_action('init', 'shortcode_init');


wp_enqueue_style( 'cfmsugarwod', plugin_dir_url( __FILE__ ) . 'public/css/cfmsugarwod-public.css');

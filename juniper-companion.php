<?php
/*
Plugin Name: Juniper Companion
Plugin URI: http://themeshift.com/free/juniper/#plugin
Description: Add many additional features and settings to the Juniper theme.
Version: 1.0.0
Author: ThemeShift
Author URI: http://themeshift.com/
Text Domain: juniper-companion
Domain Path: /languages
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// load text domain

add_action( 'plugins_loaded', 'juniper_companion_load_textdomain' );
function juniper_companion_load_textdomain() {
	load_plugin_textdomain( 'juniper-companion', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

$juniper_companion_check_theme = wp_get_theme();
if ( ('Juniper' != $juniper_companion_check_theme->name) && ('Juniper' != $juniper_companion_check_theme->parent_theme) ) {
	add_action( 'admin_notices', 'juniper_companion_no_theme' );
	function juniper_companion_no_theme() {
	    ?>
	    <div class="notice notice-error is-dismissible">
	        <p><?php _e( 'The Juniper Companion plugin provides additional features to the Juniper WordPress theme. You currently do not have the Juniper theme installed and so will not benifit from this plugin. Please install and activate Juniper or deactivate this plugin. ', 'juniper-companion' ); ?></p>
	    </div>
	    <?php
	}
} else {
	add_action( 'plugins_loaded', 'juniper_companion' );
	function juniper_companion() {
		// Include Kirki
		include_once( get_template_directory() . '/inc/kirki/kirki.php' );
		// include widgets and options
		include_once( dirname( __FILE__ ) . '/inc/options.php' );
		include_once( dirname( __FILE__ ) . '/inc/widgets.php' );
	}
}
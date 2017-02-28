<?php
/*
 * Plugin Name: PoPUp plugin
 * Version: 1.0
 * Plugin URI: http://www.spagi.eu/
 * Description: PopUp plugin
 * Author: Jan Strnadel
 * Author URI: http://www.spagi.eu/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: popup-plugin
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Jan Strnadel
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-popup.php' );
require_once( 'includes/class-popup-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-popup-admin-api.php' );
require_once( 'includes/lib/class-popup-post-type.php' );
require_once( 'includes/lib/class-popup-taxonomy.php' );

/**
 * Returns the main instance of WordPress_Plugin_Template to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object WordPress_Plugin_Template
 */
function PopUp () {
	$instance = PopUp::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Popup_Settings::instance( $instance );
	}

	return $instance;
}

PopUp();
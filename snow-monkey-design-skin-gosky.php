<?php
/**
 * Plugin name: Snow Monkey Design Skin Gosky
 * Description: Snow Monkey のデザインスキンです。
 * Version:			nightly
 * Author:			Ko Takagi
 * Author URI:	https://go-sign.info
 * License:			GPLv2
 */

require_once( __DIR__ . '/vendor/autoload.php' );

add_action( 'plugins_loaded', function() {
	add_action( 'init', function() {
		$plugin_slug = plugin_basename( __FILE__ );
		$gh_user = 'ko31';
		$gh_repo = 'snow-monkey-design-skin-gosky';
		new Miya\WP\GH_Auto_Updater( $plugin_slug, $gh_user, $gh_repo );
	} );

	add_filter( 'snow_monkey_design_skin_choices', function( $choices ) {
		$plugin_data = get_file_data( __FILE__, [
			'label' => 'Plugin Name',
		], 'plugin');
		$choices[ basename( __FILE__, '.php' ) ] = $plugin_data['label'];
		return $choices;
	} );
} );

add_action( 'after_setup_theme', function() {
	if ( class_exists( '\Snow_Monkey\app\model\Design_Skin' ) ) {
		new \Snow_Monkey\app\model\Design_Skin( __FILE__ );
	}

	if ( class_exists( '\Framework\Model\Design_Skin' ) ) {
		new \Framework\Model\Design_Skin( __FILE__ );
	}
} );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'gosky-google-fonts', 'https://fonts.googleapis.com/earlyaccess/mplus1p.css' );
} );

<?php
/**
 * Plugin name: Snow Monkey Design Skin Gosky
 * Description: Snow Monkey のデザインスキンです。
 * Version:			1.0.0
 * Author:			Ko Takagi
 * Author URI:	https://go-sign.info
 * License:			GPLv2
 */

add_action( 'plugins_loaded', function() {
	add_filter( 'snow_monkey_design_skin_choices', function( $choices ) {
		$plugin_data = get_file_data( __FILE__, [
			'label' => 'Plugin Name',
		], 'plugin');
		$choices[ basename( __FILE__, '.php' ) ] = $plugin_data['label'];
		return $choices;
	} );
} );

add_action( 'after_setup_theme', function() {
	new \Snow_Monkey\app\model\Design_Skin( __FILE__ );
} );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'gosky-google-fonts', 'https://fonts.googleapis.com/earlyaccess/mplus1p.css' );
} );

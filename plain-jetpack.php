<?php

/*
 * Plugin Name: Plain Styles for Jetpack
 * Plugin URI:  http://github.com/georgestephanis/plain-jetpack/
 * Description: Remove the Jetpack stylings from the Jetpack pages.
 * Author:      George Stephanis
 * Version:     0.1
 * Author URI:  http://stephanis.info
 * License:     GPL2+
 */

if ( is_admin() ) {
	add_action( 'admin_print_styles', 'plain_jetpack_admin_print_styles' );
	function plain_jetpack_admin_print_styles() {
		if ( wp_style_is( 'jetpack-admin', 'enqueued' ) ) {
			wp_add_inline_style( 'jetpack-admin', file_get_contents( plugin_dir_path( __FILE__ ) . 'plain-jetpack.css' ) );
		}
	}
}

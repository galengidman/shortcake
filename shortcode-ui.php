<?php
/**
 * Plugin Name: Shortcode UI
 * Version: 1.0-alpha
 * Description: User Interface for adding shortcodes.
 * Author: Human Made Limited
 * Author URI: http://hmn.md
 * Text Domain: shortcode-ui
 * License: GPL v2 or later
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

require_once( 'inc/class-shortcode-ui.php' );

add_action( 'init', function() {
	$instance = Shortcode_UI::get_instance();
}, 5 );

/**
 * Register UI for Shortcode
 *
 * @param  string $shortcode_tag
 * @param  array  $args
 * @return null
 */
function shortcode_ui_register_for_shortcode( $shortcode_tag, $args = array() ) {
	Shortcode_UI::get_instance()->register_shortcode_ui( $shortcode_tag, $args );
}
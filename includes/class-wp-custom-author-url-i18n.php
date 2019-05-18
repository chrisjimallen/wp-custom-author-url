<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://chrisjallen.com
 * @since      1.0.0
 *
 * @package    Wp_Custom_Author_Url
 * @subpackage Wp_Custom_Author_Url/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Custom_Author_Url
 * @subpackage Wp_Custom_Author_Url/includes
 * @author     Chris Allen <me@chrisjallen.com>
 */
class Wp_Custom_Author_Url_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-custom-author-url',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

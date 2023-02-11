<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://malavvasita.github.io
 * @since      1.0.0
 *
 * @package    Food_Bloggers
 * @subpackage Food_Bloggers/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Food_Bloggers
 * @subpackage Food_Bloggers/includes
 * @author     Malav V <malavvasita.mv@gmail.com>
 */
class Food_Bloggers_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'food-bloggers',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://malavvasita.github.io
 * @since             1.0.0
 * @package           Food_Bloggers
 *
 * @wordpress-plugin
 * Plugin Name:       Food Bloggers
 * Plugin URI:        https://optimtechstudio.com
 * Description:       Allows food bloggers to automate their site with different recipes at regular intervals.
 * Version:           1.0.0
 * Author:            Malav V
 * Author URI:        https://malavvasita.github.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       food-bloggers
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
define( 'FOOD_BLOGGERS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-food-bloggers-activator.php
 */
function activate_food_bloggers() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-food-bloggers-activator.php';
	Food_Bloggers_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-food-bloggers-deactivator.php
 */
function deactivate_food_bloggers() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-food-bloggers-deactivator.php';
	Food_Bloggers_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_food_bloggers' );
register_deactivation_hook( __FILE__, 'deactivate_food_bloggers' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-food-bloggers.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_food_bloggers() {

	$plugin = new Food_Bloggers();
	$plugin->run();

}
run_food_bloggers();

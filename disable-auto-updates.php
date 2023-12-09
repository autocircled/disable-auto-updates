<?php
/**
 * Plugin Name: Disable auto updates
 * Description: Disable auto updates
 * Version: 1.0
 * Author: Moktadir Rahman
 * Author URI: https://github.com/autocircled
 * Text Domain: disable-auto-updates
 */

add_filter( 'automatic_updater_disabled', '__return_true' );
add_filter( 'allow_dev_auto_core_updates', '__return_false' ); 
add_filter( 'allow_minor_auto_core_updates', '__return_false' ); 
add_filter( 'allow_major_auto_core_updates', '__return_false' ); 
add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );
add_filter( 'auto_update_translation', '__return_false' );
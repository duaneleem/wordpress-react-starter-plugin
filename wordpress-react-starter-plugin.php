<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://duaneleem.com
 * @since             1.0.0
 * @package           DL_WP_React_Starter
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress React Starter Plugin
 * Plugin URI:        https://github.com/duaneleem/wordpress-react-starter-plugin
 * Description:       Turn /react route to a React application.
 * Version:           1.0.0
 * Author:            Duane Leem
 * Author URI:        https://duaneleem.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dl-wp-react-starter
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }

// Set Route
add_filter( 'generate_rewrite_rules', function ( $wp_rewrite ) {
  $wp_rewrite->rules = array_merge(
    ['react-starter/?$' => 'index.php?custom=1'],
    $wp_rewrite->rules
  );
});

add_filter( 'query_vars', function( $query_vars ) {
  $query_vars[] = 'custom';
  return $query_vars;
});

// TODO: Serve React Page
add_action( 'template_redirect', function() {
  $custom = intval( get_query_var( 'custom' ) );
  if ( $custom ) {
    include plugin_dir_path( __FILE__ ) . 'docs/index.php';
    die;
  } // if
} );


// add_action( 'init', function() {
//   add_rewrite_endpoint( 'changelog', EP_PERMALINK );
// } );

// add_action( 'template_redirect', function() {
//   global $wp_query;
//   if ( ! is_singular( 'product' ) || ! isset( $wp_query->query_vars['changelog'] ) ) {
//       return;
//   }
//   include plugin_dir_path( __FILE__ ) . 'docs/index.php';
//   die;
// } );
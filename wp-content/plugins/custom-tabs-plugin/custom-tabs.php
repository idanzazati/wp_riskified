<?php
/**
 * Plugin Name: Custom Tabs
 * Description: Displying a component with options page to manage the content
 * Author: Idan Zazati
 * Version: 1.0.0
 * Text Domain: custom-tabs
 */

 if(!defined('ABSPATH')) {
  // code for security
  exit;
 }

 class CustomTabs {
  public function __construct()
  {
    // add assets
    add_action('wp_enqueue_scripts', array($this, 'load_assets'));

    //add shortcode
    add_shortcode('custom-tabs', array($this, 'load_shortcode'));
  }

  public function load_assets() 
  {
    wp_enqueue_style(
      'custom-tabs', 
      plugin_dir_url(__FILE__) . 'css/custom-tabs.css',
      array(), 
      '1.0.0', 
      'all'
  );

    wp_enqueue_style( 'typekit-fonts', 'https://use.typekit.net/wuz0gtr.css', array(), null );

    wp_enqueue_script(
      'custom_tabs',
      plugin_dir_url( __FILE__ ) . 'js/custom-tabs.js',
      array(),
      1,
      true
    );
  }

  public function load_shortcode() 
  {
    ob_start();
    include plugin_dir_path(__FILE__) . 'views/tabs.php';
    return ob_get_clean();

  }
}

new CustomTabs;
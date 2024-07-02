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
  
      // Fetch the Pods custom settings page data
      $custom_tabs_settings = pods('custom_tabs');
      
      if ($custom_tabs_settings->exists()) {
          // Retrieve your custom fields once
          $links = $custom_tabs_settings->field('link');
          $bg_image = $custom_tabs_settings->field('bg_image.guid');
          $bg_image_mobile = $custom_tabs_settings->field('bg_image_mobile.guid');
          $para_icon = $custom_tabs_settings->field('para_icon.guid');
          $left_para = $custom_tabs_settings->field('left_para');
          $avatar = $custom_tabs_settings->field('avatar.guid');
          $avatar_name = $custom_tabs_settings->field('avatar_name');
          $avatar_job = $custom_tabs_settings->field('avatar_job');
          $left_logo = $custom_tabs_settings->field('left_logo.guid');
          $percentage = $custom_tabs_settings->field('percentage');
          $right_para = $custom_tabs_settings->field('right_para');
          $btn = $custom_tabs_settings->field('btn');
          $btn_icon = $custom_tabs_settings->field('btn_icon.guid');
          $logos = $custom_tabs_settings->field('logo.guid');
          
          // Include your component file
          include(plugin_dir_path(__FILE__) . 'views/tabs.php');
      }
  
      return ob_get_clean();
  }
}

new CustomTabs;
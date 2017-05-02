<?php

  if (!function_exists('odontoiatria_mone_setup')) {

    function odontoiatria_mone_setup() {
      
      // Let WordPress manage the document title -------------------------------
			
      add_theme_support('title-tag');

			// Enable support for Post Thumbnails on posts and pages -----------------
			
      add_theme_support('post-thumbnails');

      // Enable support for HTML5 ----------------------------------------------

      add_theme_support('html5', array('caption'));

      // SVG support -----------------------------------------------------------

      function svg_upload($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
      }
      add_filter('upload_mimes', 'svg_upload');

			// Enables dynamic navigation --------------------------------------------

      register_nav_menus( array(
				'menu' => 'Menu'
			));

      // Load the assets -------------------------------------------------------
			
			function init_assets() {
        wp_enqueue_style('css', get_template_directory_uri() . '/dist/css/all.css', array(), '1.0.0');
        wp_enqueue_script('plugins', get_template_directory_uri() . '/dist/js/plugins.js', array('jquery'), '1.0.0', true);

        if (is_page_template('template-pages/contact.php')) {
          wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBqcuWjVT_P93S8C9Vit5A2eMKAr8VfFbY', array(), '1.0.0', true);
        }

        wp_enqueue_script('scripts', get_template_directory_uri() . '/dist/js/scripts.js', array('jquery'), '1.0.0', true);
			}
			add_action('wp_enqueue_scripts', 'init_assets');
      
      // Content Width ---------------------------------------------------------
      
      if (!isset($content_width)) $content_width = 1280;

      // Soil ------------------------------------------------------------------
      
      get_template_part('inc/soil');

      // Advanced Custom Fields ------------------------------------------------

      get_template_part('inc/acf');
      
      // Custom dashboard message ----------------------------------------------

      get_template_part('inc/dashboard-custom-widget');

    }

  }
  add_action('after_setup_theme', 'odontoiatria_mone_setup');

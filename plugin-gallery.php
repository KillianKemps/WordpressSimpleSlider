<?php

/*
Plugin Name: Simple Slider Wordpress
Plugin URI: http://www.killiankemps.fr
Description: Basic Slider
Author: Killian Kemps
Version: 1.0
Author URI: http://www.killiankemps.fr
*/

//Plugin Constants
define ('SIMPLE_SLIDER_WP_URL', plugin_dir_url(__FILE__));
define ('SIMPLE_SLIDER_WP_DIR', plugin_dir_path(__FILE__));

//Classes
require_once( SIMPLE_SLIDER_WP_DIR . '/inc/cpt.php');
require_once( SIMPLE_SLIDER_WP_DIR . '/inc/fields.php');
require_once( SIMPLE_SLIDER_WP_DIR . '/inc/shortcode.php');

new shortcode_gallery();


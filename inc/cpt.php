<?php

add_action( 'init', 'register_my_cpt_gallery', 10 );

function register_my_cpt_gallery() {

register_post_type( "gallery", array (
  'labels' => 
  array (
    'name' => 'Galleries',
    'singular_name' => 'Gallery',
    'add_new' => 'Add',
    'add_new_item' => 'Add a gallery',
    'edit_item' => 'Edit the gallery',
    'new_item' => 'New gallery',
    'view_item' => 'View gallery',
    'search_items' => 'Search gallery',
    'not_found' => 'Gallery not found',
    'not_found_in_trash' => 'Gallery not found in trash',
    'parent_item_colon' => 'Parent gallery:',
  ),
  'description' => '',
  'publicly_queryable' => true,
  'exclude_from_search' => false,
  'map_meta_cap' => true,
  'capability_type' => 'post',
  'public' => true,
  'hierarchical' => false,
  'rewrite' => 
  array (
    'slug' => 'gallery',
    'with_front' => true,
    'pages' => true,
    'feeds' => 'gallery',
  ),
  'has_archive' => 'gallery',
  'query_var' => 'gallery',
  'supports' => 
  array (
    0 => 'title',
    1 => 'editor',
    2 => 'thumbnail',
  ),
  'taxonomies' => 
  array (
  ),
  'show_ui' => true,
  'menu_position' => 30,
  'menu_icon' => false,
  'can_export' => true,
  'show_in_nav_menus' => true,
  'show_in_menu' => true,
) );

}
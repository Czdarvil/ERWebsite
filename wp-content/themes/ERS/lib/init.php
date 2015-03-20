<?php

namespace Roots\Sage\Init;

use Roots\Sage\Assets;
use Roots\Sage\Utils;

/**
 * Theme setup
 */
function setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style(Assets\asset_path('styles/editor-style.css'));

  add_image_size( 'gallery_carousel', 485, 485, true );
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s col-sm-4">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');


function add_custom_post_types() {
  /**
   * Employees
   */
  Utils\new_post_type('employee', 'Employees', 'Employee', false, array(
    'menu_icon' => 'dashicons-id',
    'has_archive'   => 'employees'
  ));
  register_taxonomy( 'team', 'employee', array(
    'label' => 'Teams',
    'rewrite' => array( 'slug' => 'team' ),
    // 'hierarchical' => 'true'
  ));

  /**
   * Products
   */
  Utils\new_post_type('product', 'Products', 'Product', true, array(
    'menu_icon' => 'dashicons-cart',
    'has_archive' => 'products'
  ));
  register_taxonomy( 'type', 'product', array(
    'label' => 'Product Types',
    // 'rewrite' => array( 'slug' => 'type' ),
    'rewrite' => false,
    'public' => false,
    'show_ui' => true,
    'hierarchical' => true
  ));

  /**
   * Product Modules
   */
  Utils\new_post_type('module', 'Modules', 'Module', true, array(
    'menu_icon' => 'dashicons-screenoptions',
    'has_archive' => 'modules'
  ));
  register_taxonomy( 'feature', 'module', array(
    'label' => 'Features',
    'rewrite' => false,
    'hierarchical' => true,
    'public' => false,
    'show_ui' => true
    // 'rewrite' => array( 'slug' => 'features' )
  ));
}
add_action('init', __NAMESPACE__ . '\\add_custom_post_types');

/**
 * Link products and modules together using Posts 2 Posts plugin
 *
 * This allows when editing a module to assign products it belongs to
 * and products
 */
function product_module_relationship() {
  p2p_register_connection_type( array(
    'name'     => 'product_modules',
    'from'     => 'module',
    'to'       => 'product',
    'sortable' => 'any',
    'admin_box' => array(
      'context'  => 'side',
      'priority' => 'default'
    ),
    'title'    => array(
      'from' => 'Products that support this Module',
      'to'   => 'Modules included in this product'
    ),
    'from_labels' => array(
      'create' => 'Include Module'
    ),
    'to_labels' => array(
      'create' => 'Include in Product'
    )
  ) );
}
add_action( 'p2p_init', __NAMESPACE__ . '\\product_module_relationship' );


function add_search_to_primary_nav($items) {
  $items .= '<li class="" id="navbar-search">
  <a href="#" class="hidden-sm hidden-xs">
    <i class="fa fa-search"></i>
  </a>
  <div class="hidden" id="navbar-search-box">
    <form role="search" method="get" action="'.esc_url(home_url('/')).'">
      <div class="input-group">
        <input type="search" value="'.get_search_query().'" class="form-control" placeholder="Search" name="s">
        <span class="input-group-btn">
          <button class="search-submit btn btn-default" type="submit">Go!</button>
        </span>
      </div>
    </form>
  </div>
</li>';

return $items;
}
add_action( 'wp_nav_menu_primary-navigation_items', __NAMESPACE__ .'\\add_search_to_primary_nav' );

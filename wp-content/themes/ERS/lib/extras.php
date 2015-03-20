<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  // if (Config\display_sidebar()) {
  //   $classes[] = 'sidebar-primary';
  // }
  // if(get_field('page_layout')) {
  //   $classes[] = get_field('page_layout');
  // }

  if ( Config\page_should_have_sidebar() ) {
    $classes[] = Config\page_should_have_sidebar();
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/**
 * Remove the "{Archive type}: " text from get_the_archive_title()
 *
 * Archive title function returns title strings with the archive
 * type prepended to the actual title.
 *
 * @see https://developer.wordpress.org/reference/functions/get_the_archive_title/
 */
function clean_archive_titles($title) {
  $title = explode(': ', $title, 2);

  return $title[1];
}
add_filter('get_the_archive_title',  __NAMESPACE__ . '\\clean_archive_titles');


function sage_wrap_base_cpts($templates) {
  $cpt = get_post_type(); // Get the current post type
  if ($cpt) {
     array_unshift($templates, 'base-' . $cpt . '.php'); // Shift the template to the front of the array
  }
  return $templates; // Return our modified array with base-$cpt.php at the front of the queue
}
add_filter('sage/wrap_base', __NAMESPACE__ . '\\sage_wrap_base_cpts'); // Add our function to the sage_wrap_base filter


/**
 * Specific archives use isotope.js for post filtering
 * This adds the appropriate filter widget to those archives
 *
 * @see  templates/widget-isotope_filters.php
 * @see  Extra/add_isotope_filter_widget()
 */
function sidebar_isotope_filters() {
  $filterable_page = false;

  if ( is_post_type_archive( 'employee' ) ) {
    $filterable_page = true;
    $filter_by_title = 'Team';
    $filter_by_slug = 'team';
  }
  if ( is_post_type_archive( 'module' ) ) {
    $filterable_page = true;
    $filter_by_title = 'Module Feature';
    $filter_by_slug = 'feature';
  }
  if ( is_post_type_archive( 'product' ) ) {
    $filterable_page = true;
    $filter_by_title = 'Product Type';
    $filter_by_slug = 'type';
  }

  if (!$filterable_page) { return; }

  add_isotope_filter_widget($filter_by_title, $filter_by_slug);
}
add_action('before_sidebar', __NAMESPACE__ . '\\sidebar_isotope_filters');

/**
 * Helper function to add isotope filter widget
 *
 * @param string $filter_by_title Appears in widget title
 * @param string $filter_by_slug  Term slug to pull tags form
 */
function add_isotope_filter_widget(  $filter_by_title, $filter_by_slug ) {
  include( locate_template('templates/widget-isotope_filters.php') );
}

<?php
/**
 * ACF advanced Filters
 */

/**
 * Apply alternate default sidebar layouts to specific post types
 */
function default_page_layouts( $field ){
  if (!is_admin()) {return $field;}

  $screen = get_current_screen();
  if (!$screen) {return $field;}

  switch ( $screen->post_type ) {
    case 'post':
      $field['default_value'] = 'right_sidebar';
      break;
  }

  return $field;
}
add_filter('acf/load_field/name=page_layout', __NAMESPACE__ . '\\default_page_layouts' );

/**
 * Apply alternate default page heads
 */
function default_page_head( $field ){
  if (!is_admin()) {return $field;}

  $screen = get_current_screen();
  if (!$screen) {return $field;}

  switch ( $screen->post_type ) {
    case 'product':
      $field['default_value'] = 'parallax';
      break;
  }

  return $field;
}
add_filter('acf/load_field/name=page_head_type', __NAMESPACE__ . '\\default_page_head' );


/**
 * When editing a Product the Module Grid
 * will have "All Modules in this product" option.
 * which will display all modules in the current product.
 * via the posts 2 posts plugin relationship.
 */
function alternate_display_method_module( $field ){
  if (!is_admin()) {return $field;}

  $screen = get_current_screen();
  if (!$screen) {return $field;}

  switch ( $screen->post_type ) {
    case 'product':
      $field['choices']['this_product'] = "All Modules Included in this Product";
      $field['default_value'] = 'this_product';
      break;
  }

  return $field;
}
add_filter('acf/load_field/name=display_method_module', __NAMESPACE__ . '\\alternate_display_method_module' );

/**
 * When editing a Product the Product Grid
 * will have "All Products that Included this Module" option
 * Which will display all products that include that module
 * via the posts 2 posts plugin relationship.
 */
function alternate_display_method_product( $field ){
  if (!is_admin()) {return $field;}

  $screen = get_current_screen();
  if (!$screen) {return $field;}

  switch ( $screen->post_type ) {
    case 'module':
      $field['choices']['this_module'] = "All Products that Included this Module";
      $field['default_value'] = 'this_module';
      break;
  }

  return $field;
}
add_filter('acf/load_field/name=display_method_product', __NAMESPACE__ . '\\alternate_display_method_product' );

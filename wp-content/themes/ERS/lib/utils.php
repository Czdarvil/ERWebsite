<?php

namespace Roots\Sage\Utils;

/**
 * Tell WordPress to use searchform.php from the templates/ directory
 */
function get_search_form() {
  $form = '';
  locate_template('/templates/searchform.php', true, false);
  return $form;
}
add_filter('get_search_form', __NAMESPACE__ . '\\get_search_form');

/**
 * Make a URL relative
 */
function root_relative_url($input) {
  preg_match('|https?://([^/]+)(/.*)|i', $input, $matches);
  if (!isset($matches[1]) || !isset($matches[2])) {
    return $input;
  } elseif (($matches[1] === $_SERVER['SERVER_NAME']) || $matches[1] === $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']) {
    return wp_make_link_relative($input);
  } else {
    return $input;
  }
}

/**
 * Compare URL against relative URL
 */
function url_compare($url, $rel) {
  $url = trailingslashit($url);
  $rel = trailingslashit($rel);
  if ((strcasecmp($url, $rel) === 0) || root_relative_url($url) == $rel) {
    return true;
  } else {
    return false;
  }
}

/**
 * Check if element is empty
 */
function is_element_empty($element) {
  $element = trim($element);
  return !empty($element);
}


/**
 * Quick custom post types
 * Use within 'init' action hooks
 *
 * @uses register_post_type()
 *
 * @param  string $slug       REQUIRED, Used for url and reference
 * @param  string $name       REQUIRED, Used in admin area (plural)
 * @param  string $singleName REQUIRED, Used in admin area (singular)
 * @param  bool   $searchable add this post type to search results
 * @param  array  $opts       Option overrides, same as standard regster_post_types
 * @return null
 *
 * Minimum use.
 * @example new_post_type( 'boat', 'Boats', 'Boat' );
 *
 * Add post to search results.
 * @example new_post_type( 'meeting', 'Meetings', 'Meeting', true );
 *
 * Change the menu_icon
 * @example new_post_type( 'book', 'Books', 'Book', true, array( 'menu_icon'=>'dashicons-book-alt' ) );
 */
function new_post_type( $slug, $name, $singleName, $searchable = false, $opts = array() ) {
    $defaults = array(
        'labels' => array(
            'name'               => $name,
            'singular_name'      => $singleName,
            'add_new'            => "Add New",
            'add_new_item'       => "Add New {$singleName}",
            'edit'               => "Edit",
            'edit_item'          => "Edit {$singleName}",
            'new_item'           => "New {$singleName}",
            'view'               => "View",
            'view_item'          => "View {$singleName}",
            'search_items'       => "Search {$name}",
            'not_found'          => "No {$name} found",
            'not_found_in_trash' => "No {$name} found in Trash",
            'parent'             => "Parent {$singleName}"
        ),
        'rewrite' => array(
            'slug' => $slug
        ),
        'public'        => true,
        'menu_position' => 20,
        'menu_icon'     => 'dashicons-welcome-add-page',
        'supports'      => array( 'title', 'editor' ),
        'taxonomies'    => array( '' ),
        'has_archive'   => false
    );

    $args = array_merge( $defaults, $opts );

    register_post_type( $slug, $args);

    if ( $searchable ) {
      add_filter('searchable_post_types', function ($posts) use ($slug){
        $posts[] = $slug;
        return $posts;
      });
    }
}

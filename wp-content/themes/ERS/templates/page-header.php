<?php
/**
 * The <div class="wrapper">
 * element lives here and is closed in the base.php
 *
 * "Full" hero image is required to be just outside that element
 */

if ( is_archive() || is_search() ) {
  echo '<div class="page-header-wrapper">';
    get_template_part('templates/page-header-title-bar');
  echo '</div>';
} else {
  switch (get_field('page_head_type')) {
    case 'parallax':
      echo '<div class="page-header-wrapper">';
      if (get_field('hero_image')) {
        get_template_part('templates/page-header-hero');
      } else {
        get_template_part('templates/page-header-title-bar');
      }
      echo '</div>';
      break;

    case 'full':
      if (get_field('hero_image')) {
        get_template_part('templates/page-header-hero-full');
      } else {
        echo '<div class="page-header-wrapper">';
        get_template_part('templates/page-header-title-bar');
        echo '</div>';
      }
      break;

    case 'slideshow':
      echo '<div class="page-header-wrapper">';
      get_template_part('templates/page-header-slider');
      echo '</div>';
      break;

    default:
      echo '<div class="page-header-wrapper">';
      get_template_part('templates/page-header-title-bar');
      echo '</div>';
      break;
  }
}
 ?>

<?php
if ( is_archive() || is_search() ) {
  echo '<div class="page-header-wrapper">';
    get_template_part('templates/page-header-title-bar');
  echo '</div>';
} else {
  if ( is_single() && get_field('single_posts_use_hero_image', 'options') && has_post_thumbnail() ) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post_feature_bg' );
    echo '<div class="hero-image post-hero-image" style="background-image: url('.$image[0].');"><!-- Hero Image holder --></div>';
  } else {
    if (is_home()) {
      $post = get_post( get_option( 'page_for_posts' ) );
      setup_postdata( $post );
    }
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
    if (is_home()) {
      wp_reset_postdata();
    }
  }
}
 ?>

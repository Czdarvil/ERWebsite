<?php
/**
 * Fallback Content Excerpt
 */
use Roots\Sage\Extras;

if ( have_rows('components') ) {
  $found_excerpt = false;
  $word_limit = 55;

  while ( have_rows( 'components' ) ) {
    the_row();
    switch( get_row_layout() ) {
      case 'content_block':
      case 'intro_block':
        echo Extras\generate_content_excerpt( get_sub_field( 'content' ), $word_limit );
        $found_excerpt = true;
        break;
      case 'two_up':
        echo Extras\generate_content_excerpt( get_sub_field( 'left_content' ), $word_limit );
        $found_excerpt = true;
        break;
      case 'pricing_inquiry':
        echo Extras\generate_content_excerpt( get_sub_field( 'form_intro' ), $word_limit );
        $found_excerpt = true;
        break;
    }
    if ( $found_excerpt ) {
      break;
    }
  }
} else {
  the_excerpt();
}

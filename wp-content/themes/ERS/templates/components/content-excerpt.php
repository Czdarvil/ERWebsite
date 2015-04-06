<?php
/**
 * Fallback Content Excerpt
 */
use Roots\Sage\Extras;

if ( have_rows('components') ) {
  $word_limit = 55;
  $excerpt = '';
  while ( have_rows( 'components' ) ) {
    the_row();
    switch( get_row_layout() ) {
      case 'content_block':
      case 'intro_block':
      case 'two_up':
      case 'pricing_inquiry':
        $excerpt .= get_sub_field( 'heading' ) . ' ';
        $excerpt .= get_sub_field( 'subheading' ) . ' ';
        $excerpt .= get_sub_field( 'content' ) . ' ';
        $excerpt .= get_sub_field( 'left_content' ) . ' ';
        $excerpt .= get_sub_field( 'right_content' ) . ' ';
        $excerpt .= get_sub_field( 'form_intro' ) . ' ';
        break;
    }
  }
  echo Extras\generate_content_excerpt( $excerpt, $word_limit );
} else {
  the_excerpt();
}

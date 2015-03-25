<?php
/**
 * Custom Shortcodes
 */

function shortcode_progress_bar($atts){
  extract( shortcode_atts( array(
    'percent' => null,
    'title' => null,
    'theme' => 'primary'
  ), $atts ) );

  if ( !$percent ) { return; }

  $progress_bar = '<div class="progress">
    <div class="progress-bar progress-bar-theme-'.$theme.'" role="progressbar" aria-valuenow="'.$percent.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$percent.'%">
      <span>'.$title.'</span>
    </div>
  </div>';

  return $progress_bar;
}
add_shortcode('meter', 'shortcode_progress_bar');
add_shortcode('progress', 'shortcode_progress_bar');

/**
 * [current_year]
 *
 * @return  string  full current year
 */
function sg_current_year() {
  return date( 'Y' );
}
add_shortcode( 'current_year', 'sg_current_year' );

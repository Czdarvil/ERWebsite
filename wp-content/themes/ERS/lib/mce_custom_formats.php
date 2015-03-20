<?php
/**
 * Add "Formats" drop-down
 */
function mce_custom_editor_buttons($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2',  __NAMESPACE__ . '\\mce_custom_editor_buttons');

function mce_custom_editor_settings($settings) {
  if (!empty($settings['theme_advanced_styles']))
    $settings['theme_advanced_styles'] .= ';';
  else
    $settings['theme_advanced_styles'] = '';


  $style_formats = array(

    /**
     * BUTTONS
     */
    array(
      'title' => 'Buttons (Links only)',
      'items' => array(
        array(
          'title' => 'Types',
          'items' => array(
            array(
                'title' => 'Button Maroon',
                'selector' => 'a',
                'classes' => 'btn btn-theme-primary'
            ),
            array(
                'title' => 'Button Orange',
                'selector' => 'a',
                'classes' => 'btn btn-theme-secondary'
            ),
            array(
                'title' => 'Button Gray',
                'selector' => 'a',
                'classes' => 'btn btn-theme-tirtiary'
            )
          )
        ),
        array(
          'title' => 'Sizes',
          'items' => array(
            array(
                'title' => 'Large',
                'selector' => 'a',
                'classes' => 'btn-lg'
            ),
            array(
                'title' => 'Small',
                'selector' => 'a',
                'classes' => 'btn-sm'
            ),
            array(
                'title' => 'Extra Small',
                'selector' => 'a',
                'classes' => 'btn-xs'
            )
          )
        )
      )
    ),

    /**
     * INFO BOARDS
     */
    array(
      'title' => 'Info Boards',
      'items' => array(
        array(
          'title'   => 'Orange',
          'classes' => 'info-board info-board-theme-primary',
          'block'   => 'div',
          'wrapper' => true
        ),
        array(
          'title'   => 'Blue',
          'classes' => 'info-board info-board-theme-secondary',
          'block'   => 'div',
          'wrapper' => true
        ),
        array(
          'title'   => 'Base',
          'classes' => 'info-board',
          'block'   => 'div',
          'wrapper' => true
        )
      )
    ),

    /**
     * TEXT COLORS
     */
    array(
      'title' => 'Text Colors',
      'items' => array(
        array(
          'title' => 'Theme Primary (maroon)',
          'classes' => 'text-theme-primary',
          'selector' => '*'
        ),
        array(
          'title' => 'Theme Secondary (orange)',
          'classes' => 'text-theme-secondary',
          'selector' => '*'
        ),
        array(
          'title' => 'Muted (light gray)',
          'classes' => 'text-muted',
          'selector' => '*'
        )
      )
    ),

    /**
     * HEADINGS AND HEADLINES
     */
    array(
      'title' => 'Headlines',
      'items' => array(
        array(
          'title' => 'Headline Large (Centered)',
          'classes' => 'headline-lg',
          'selector' => 'h1, h2, h3, h4, h5, h6'
        ),
        array(
          'title' => 'Headline Large (Left)',
          'classes' => 'headline-lg_left',
          'selector' => 'h1, h2, h3, h4, h5, h6'
        ),
        array(
          'title' => 'Headline Large (Right)',
          'classes' => 'headline-lg_right',
          'selector' => 'h1, h2, h3, h4, h5, h6'
        ),
        array(
          'title' => 'Headline Alt',
          'classes' => 'headline-alt',
          'selector' => 'h1, h2, h3, h4, h5, h6'
        ),
        array(
          'title' => 'Headline',
          'classes' => 'headline',
          'selector' => 'h1, h2, h3, h4, h5, h6',
        )
      )
    ),

    /**
     * LISTS
     */
    array(
      'title' => 'Lists',
      'items' => array(
        array(
          'title' => 'Checkmark List',
          'classes' => 'check-list',
          'selector' => 'ul, ol'
        ),
        array(
          'title' => 'Feature List',
          'classes' => 'ft-list',
          'selector' => 'ul, ol'
        )
      )
    ),

    /**
     * TABLES
     */
    array(
      'title' => 'Tables',
      'items' => array(
        array(
          'title' => 'Base Style',
          'classes' => 'table',
          'selector' => 'table'
        ),
        array(
          'title' => 'Striped',
          'classes' => 'table-striped',
          'selector' => 'table'
        ),
        array(
          'title' => 'Bordered',
          'classes' => 'table-bordered',
          'selector' => 'table'
        ),
        array(
          'title' => 'Hover Rows',
          'classes' => 'table-hover',
          'selector' => 'table'
        ),
        array(
          'title' => 'Condensed',
          'classes' => 'table-condensed',
          'selector' => 'table'
        )
      )
    ),

    /**
     * ANIMATION
     */
    array(
      'title' => 'Animation',
      'items' => array(
        array(
          'title' => 'Type',
          'items' => array(
            array(
              'title' => 'Flash',
              'classes' =>'animated flash',
              'selector' => '*'
            ),
            array(
              'title' => 'Shake',
              'classes' =>'animated shake',
              'selector' => '*'
            ),
            array(
              'title' => 'Bounce',
              'classes' =>'animated bounce',
              'selector' => '*'
            ),
            array(
              'title' => 'Tada',
              'classes' =>'animated tada',
              'selector' => '*'
            ),
            array(
              'title' => 'Swing',
              'classes' =>'animated swing',
              'selector' => '*'
            ),
            array(
              'title' => 'Wobble',
              'classes' =>'animated wobble',
              'selector' => '*'
            ),
            array(
              'title' => 'Pulse',
              'classes' =>'animated pulse',
              'selector' => '*'
            ),
            array(
              'title' => 'Flip',
              'classes' =>'animated flip',
              'selector' => '*'
            ),
            array(
              'title' => 'FlipInX',
              'classes' =>'animated flipInX',
              'selector' => '*'
            ),
            array(
              'title' => 'FlipOutX',
              'classes' =>'animated flipOutX',
              'selector' => '*'
            ),
            array(
              'title' => 'FlipInY',
              'classes' =>'animated flipInY',
              'selector' => '*'
            ),
            array(
              'title' => 'FlipOutY',
              'classes' =>'animated flipOutY',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeIn',
              'classes' =>'animated fadeIn',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeInUp',
              'classes' =>'animated fadeInUp',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeInDown',
              'classes' =>'animated fadeInDown',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeInLeft',
              'classes' =>'animated fadeInLeft',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeInRight',
              'classes' =>'animated fadeInRight',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeInUpBig',
              'classes' =>'animated fadeInUpBig',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeInDownBig',
              'classes' =>'animated fadeInDownBig',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeInLeftBig',
              'classes' =>'animated fadeInLeftBig',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeInRightBig',
              'classes' =>'animated fadeInRightBig',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeOut',
              'classes' =>'animated fadeOut',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeOutUp',
              'classes' =>'animated fadeOutUp',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeOutDown',
              'classes' =>'animated fadeOutDown',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeOutLeft',
              'classes' =>'animated fadeOutLeft',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeOutRight',
              'classes' =>'animated fadeOutRight',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeOutUpBig',
              'classes' =>'animated fadeOutUpBig',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeOutDownBig',
              'classes' =>'animated fadeOutDownBig',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeOutLeftBig',
              'classes' =>'animated fadeOutLeftBig',
              'selector' => '*'
            ),
            array(
              'title' => 'FadeOutRightBig',
              'classes' =>'animated fadeOutRightBig',
              'selector' => '*'
            ),
            array(
              'title' => 'SlideInDown',
              'classes' =>'animated slideInDown',
              'selector' => '*'
            ),
            array(
              'title' => 'SlideInLeft',
              'classes' =>'animated slideInLeft',
              'selector' => '*'
            ),
            array(
              'title' => 'SlideInRight',
              'classes' =>'animated slideInRight',
              'selector' => '*'
            ),
            array(
              'title' => 'SlideOutUp',
              'classes' =>'animated slideOutUp',
              'selector' => '*'
            ),
            array(
              'title' => 'SlideOutLeft',
              'classes' =>'animated slideOutLeft',
              'selector' => '*'
            ),
            array(
              'title' => 'SlideOutRight',
              'classes' =>'animated slideOutRight',
              'selector' => '*'
            ),
            array(
              'title' => 'BounceIn',
              'classes' =>'animated bounceIn',
              'selector' => '*'
            ),
            array(
              'title' => 'BounceInUp',
              'classes' =>'animated bounceInUp',
              'selector' => '*'
            ),
            array(
              'title' => 'BounceInDown',
              'classes' =>'animated bounceInDown',
              'selector' => '*'
            ),
            array(
              'title' => 'BounceInLeft',
              'classes' =>'animated bounceInLeft',
              'selector' => '*'
            ),
            array(
              'title' => 'BounceInRight',
              'classes' =>'animated bounceInRight',
              'selector' => '*'
            ),
            array(
              'title' => 'BounceOut',
              'classes' =>'animated bounceOut',
              'selector' => '*'
            ),
            array(
              'title' => 'BounceOutUp',
              'classes' =>'animated bounceOutUp',
              'selector' => '*'
            ),
            array(
              'title' => 'BounceOutDown',
              'classes' =>'animated bounceOutDown',
              'selector' => '*'
            ),
            array(
              'title' => 'BounceOutLeft',
              'classes' =>'animated bounceOutLeft',
              'selector' => '*'
            ),
            array(
              'title' => 'BounceOutRight',
              'classes' =>'animated bounceOutRight',
              'selector' => '*'
            ),
            array(
              'title' => 'RotateIn',
              'classes' =>'animated rotateIn',
              'selector' => '*'
            ),
            array(
              'title' => 'RotateInUpLeft',
              'classes' =>'animated rotateInUpLeft',
              'selector' => '*'
            ),
            array(
              'title' => 'RotateInDownLeft',
              'classes' =>'animated rotateInDownLeft',
              'selector' => '*'
            ),
            array(
              'title' => 'RotateInUpRight',
              'classes' =>'animated rotateInUpRight',
              'selector' => '*'
            ),
            array(
              'title' => 'RotateInDownRight',
              'classes' =>'animated rotateInDownRight',
              'selector' => '*'
            ),
            array(
              'title' => 'RotateOut',
              'classes' =>'animated rotateOut',
              'selector' => '*'
            ),
            array(
              'title' => 'RotateOutUpLeft',
              'classes' =>'animated rotateOutUpLeft',
              'selector' => '*'
            ),
            array(
              'title' => 'RotateOutDownLeft',
              'classes' =>'animated rotateOutDownLeft',
              'selector' => '*'
            ),
            array(
              'title' => 'RotateOutUpRight',
              'classes' =>'animated rotateOutUpRight',
              'selector' => '*'
            ),
            array(
              'title' => 'RotateOutDownRight',
              'classes' =>'animated rotateOutDownRight',
              'selector' => '*'
            ),
            array(
              'title' => 'LightSpeedIn',
              'classes' =>'animated lightSpeedIn',
              'selector' => '*'
            ),
            array(
              'title' => 'LightSpeedOut',
              'classes' =>'animated lightSpeedOut',
              'selector' => '*'
            ),
            array(
              'title' => 'Hinge',
              'classes' =>'animated hinge',
              'selector' => '*'
            ),
            array(
              'title' => 'RollIn',
              'classes' =>'animated rollIn',
              'selector' => '*'
            ),
            array(
              'title' => 'RollOut',
              'classes' =>'animated rollOut',
              'selector' => '*'
            )
          )
        ),
        array(
          'title' => 'Delay',
          'items' => array(
            array(
              'title' => '300ms',
              'classes' => 'delay-1',
              'selector' => '*'
            ),
            array(
              'title' => '600ms',
              'classes' => 'delay-2',
              'selector' => '*'
            ),
            array(
              'title' => '900ms',
              'classes' => 'delay-3',
              'selector' => '*'
            ),
            array(
              'title' => '1200ms',
              'classes' => 'delay-4',
              'selector' => '*'
            ),
            array(
              'title' => '1500ms',
              'classes' => 'delay-5',
              'selector' => '*'
            ),
            array(
              'title' => '1800ms',
              'classes' => 'delay-6',
              'selector' => '*'
            ),
            array(
              'title' => '2100ms',
              'classes' => 'delay-7',
              'selector' => '*'
            ),
            array(
              'title' => '2400ms',
              'classes' => 'delay-8',
              'selector' => '*'
            ),
          )
        )
      )
    ),
  );

  $settings['style_formats'] = json_encode($style_formats);

  return $settings;
}

add_filter('tiny_mce_before_init',  __NAMESPACE__ . '\\mce_custom_editor_settings');


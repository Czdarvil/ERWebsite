<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/mce_custom_formats.php',    // WYSIWYG custom class/formats dropdown
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/acf-field-filters.php',     // Advanced acf field filters and modifications
  'lib/shortcodes.php',            // Custom Shortcodes
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/nav.php',                   // Custom nav modifications
  'lib/gallery.php',               // Custom [gallery] modifications
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function ers_logo_customizer( $wp_customize ) {
  $wp_customize->add_section( 'ers_logo_section' , array(
    'title'       => 'Logo',
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
  ) );

  $wp_customize->add_setting( 'ers_logo' );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ers_logo', array(
      'label'    => 'Logo',
      'section'  => 'ers_logo_section',
      'settings' => 'ers_logo',
  ) ) );

}
add_action('customize_register',  __NAMESPACE__ . '\\ers_logo_customizer');

function ers_copyright_customizer( $wp_customize ) {
  $wp_customize->add_section('ers_footer', array(
    'title' => 'Footer Copyright',
    'priority' => 80,
    'description' => "Edit the copyright line for the footer. You can use the shortcode [current_year] to output the current year."
  ));
  $wp_customize->add_setting( 'ers_copyright' );

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ers_copyright', array(
    'label' => 'Copyright text',
    'section' => 'ers_footer',
    'settings' => 'ers_copyright'
  )));
}
add_action('customize_register',  __NAMESPACE__ . '\\ers_copyright_customizer');

<?php
/**
 * Testimonials
 */

$bg_image = wp_get_attachment_image_src( get_sub_field('image'), 'full' );
$bg_image_style = '';

if ( $bg_image ) {
  $bg_image_style = ' style="background-image: url('.$bg_image[0].')"';
}

?>

<div class="feedbacks" <?php echo $bg_image_style; ?>>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="headline-lg"><?php the_sub_field('heading'); ?></h2>
        <h4><?php the_sub_field('subheading'); ?></h4>
      </div>
    </div> <!-- / .row -->
    <?php
      $col_count = get_sub_field('display_columns');
      $col_size = floor(12/$col_count);
      $services = count(get_sub_field('testimonials'));
      $iteration = 1;
    ?>
    <div class="row">
      <?php
        while ( have_rows('testimonials') ) {
          the_row();

          $headshot = wp_get_attachment_image_src( get_sub_field('image'), 'thumbnail' );
          $headshot_icon = '<i class="fa fa-user fa-2x"></i>';

          if ( $headshot ) {
            $headshot_icon = '<img src="'.$headshot[0].'">';
          }
      ?>

          <div class="col-sm-6 col-md-4">
            <div class="feedback">
              <?php echo $headshot_icon; ?>
              <div>
                <p>
                  <?php the_sub_field('quote'); ?>
                  <span class="cite"><?php the_sub_field('cite') ?></span>
                </p>
              </div>
            </div>
          </div>

      <?php
          // Break rows
          if ( $iteration%$col_count == 0 && $iteration < $services ) {
            echo '</div><div class="row">';
          }
          $iteration++;
        }
       ?>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</div>

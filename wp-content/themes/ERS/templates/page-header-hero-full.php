<?php
/**
 * Full screen page hero
 */

$background_img = wp_get_attachment_image_src( get_field('hero_image'), 'full' );
?>
<div class="fullscreen" style="background-image: url(<?php echo $background_img[0]; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <?php the_field('full_content'); ?>
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
  <?php if(get_field( 'overlay_image' )): ?>
    <?php $overlay = wp_get_attachment_image_src( get_field('overlay_image'), 'full' ); ?>
    <div class="bg-img hidden-xs">
      <img src="<?php echo $overlay[0]; ?>" alt="">
    </div>
  <?php endif; ?>
</div>

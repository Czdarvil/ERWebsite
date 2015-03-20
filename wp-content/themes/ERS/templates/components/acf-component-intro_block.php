<?php
/**
 * Intro Block
 */

$bg_image = wp_get_attachment_image_src( get_sub_field('background_image'), 'full' );
$feature_image = wp_get_attachment_image_src( get_sub_field('feature_image'), 'full' );
 ?>

<div class="intro-block" style="background-image: url(<?php echo $bg_image[0]; ?>)">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-md-offset-2">
        <?php if($feature_image): ?>
          <div class="feature-image"><img src="<?php echo $feature_image[0]; ?>" alt=""></div>
        <?php endif; ?>

        <?php if(get_sub_field('heading')): ?>
          <h1><?php the_sub_field('heading') ?></h1>
        <?php endif; ?>

        <?php if(get_sub_field('subheading')): ?>
          <h4><?php the_sub_field('subheading') ?></h4>
        <?php endif; ?>

        <?php the_sub_field('content'); ?>
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</div>

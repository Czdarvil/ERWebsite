<?php

$price = get_field($station_type.'_pricing');
$term = get_field($station_type.'_term');
$details = get_field('additional_'.$station_type.'_details');

$image = wp_get_attachment_image_src( get_field('icon_image'), 'thumbnail' );

if ( $state ) {
  while ( have_rows('state_pricing') ):
    the_row();

    if ( $state == get_sub_field('state') ) {
      $state_price = get_sub_field('state_'.$station_type.'_pricing');
      $state_term = get_field('state_'.$station_type.'_term');
      $state_details = get_field('state_additional_'.$station_type.'_details');

      $price = $state_price ? $state_price : $price;
      $term =  $state_term ? $state_term : $term;
      $details = $state_details ? $state_details : $details;
    }
  endwhile;

}

?>
<div class="pricing-option">
  <div class="pricing-inner">
    <div class="pricing-header">
      <img src="<?php echo $image[0] ?>" alt="<?php the_title(); ?>" class="pricing-logo">
      <h5>
        <?php the_title(); ?>
      </h5>
    </div>
    <div class="pricing-number">
      $<?php echo $price; ?> <span class="small"><?php echo $term ?></span>
    </div>
    <div class="pricing-body">
      <ul class="list-style-none" style="height: 125px;">
        <?php while ( have_rows('benefits')): the_row(); ?>
          <li><?php the_sub_field('benefit'); ?></li>
        <?php endwhile; ?>
      </ul>
    </div>
    <div class="pricing-body-well">
      <?php echo $details; ?>
    </div>
    <div class="pricing-button">
      <a href="/get-a-free-trial/" class="btn btn-theme-primary">Get a Free Trial</a>
      <a href="/contact-us/" class="btn btn-theme-tirtiary">Contact Sales</a>
    </div>
  </div>
</div>

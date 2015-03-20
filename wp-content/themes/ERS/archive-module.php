<?php
/**
 * Product Module Archive
 */
 ?>
<div class="container">
  <div id="isotope-container" class="row">
    <?php while (have_posts()) : the_post(); ?>
      <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 <?php foreach(wp_get_post_terms($post->ID, 'feature') as $feature) { echo ' feature_'.$feature->slug; } ?> isotope-item">
        <?php get_template_part( 'templates/components/component', 'module_tile' ); ?>
      </div>
      <?php
    endwhile; ?>
  </div>
</div>

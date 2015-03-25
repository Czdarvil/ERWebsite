<?php
/**
 * Employee Archive
 */
 ?>

<div class="container">
  <div id="isotope-container" class="row">
    <?php while (have_posts()) : the_post(); ?>
      <div class="col-xs-6 col-sm-6 col-md-4 <?php foreach(wp_get_post_terms($post->ID, 'team') as $team) { echo ' team_'.$team->slug; } ?> isotope-item">
        <?php get_template_part( 'templates/components/component', 'avatar' ); ?>
      </div>
      <?php
    endwhile; ?>
  </div>
</div>


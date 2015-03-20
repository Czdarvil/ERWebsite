<?php
/**
 * Template Name: Custom Layout
 */
 ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/layout-components'); ?>
<?php endwhile; ?>

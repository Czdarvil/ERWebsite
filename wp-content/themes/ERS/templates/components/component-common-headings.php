<?php
/**
 * Common Component for Headings
 *
 * @required field heading
 * @required field subheading
 */
?>

<?php if ( get_sub_field('heading') ): ?>
  <h2 class="headline-lg"><?php the_sub_field('heading'); ?></h2>
<?php endif; ?>
<?php if ( get_sub_field('subheading') ): ?>
  <h4><?php the_sub_field('subheading'); ?></h4>
<?php endif; ?>

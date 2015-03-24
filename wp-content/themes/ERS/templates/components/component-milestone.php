<div class="event__title">
  <h3>
    <?php if ( get_sub_field('title_link') ): ?>
      <a href="<?php the_sub_field('title_link'); ?>">
    <?php endif; ?>
    <?php the_sub_field('title') ?>
    <?php if ( get_sub_field('title_link') ): ?>
      </a>
    <?php endif; ?>
  </h3>
  <?php $date = strtotime(get_sub_field('date')); ?>
  <time datetime="<?php echo $date; ?>"><?php the_sub_field('date'); ?></time>
</div>
<div class="event__content">
  <?php the_sub_field('content'); ?>
</div>

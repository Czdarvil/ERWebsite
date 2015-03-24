<?php
/**
 * Milestone Timeline
 */
 ?>

<div class="milestone-timeline">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php get_template_part('templates/components/component-common-headings'); ?>
        <!-- Timeline -->
        <ul class="timeline timeline_<?php the_sub_field('alignment'); ?>">
          <?php if ( get_sub_field('start_year') ): ?>
            <li class="year">
              <span><?php the_sub_field('start_year'); ?></span>
            </li>
            <li></li>
          <?php endif; ?>

          <?php while ( have_rows('milestones') ):
            the_row();
            echo '<li class="event">';
            get_template_part('templates/components/component-milestone');
            echo '</li>';
          endwhile; ?>

          <?php if ( get_sub_field('end_year') ): ?>
            <li class="clearfix"></li> <!-- Always use a cleafix to include a Year inside the Timeline -->
            <li class="year">
              <span><?php the_sub_field('end_year'); ?></span>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

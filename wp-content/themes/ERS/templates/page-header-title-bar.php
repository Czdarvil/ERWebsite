<?php
  use Roots\Sage\Titles;
  use Roots\Sage\Nav;
?>


  <div class="topic">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3><?php echo Titles\title(); ?></h3>
        </div>
        <?php if ( get_field('title_bar_breadcrumbs' ) || is_archive() || Nav\post_type_has_breadcrumbs(get_post_type()) ): ?>
          <div class="col-sm-8">
              <?php Nav\the_breadcrumbs('pull-right hidden-xs'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>


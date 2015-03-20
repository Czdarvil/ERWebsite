<?php
/**
 * Content block
 */
 ?>
<div class="content-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="headline-lg"><?php the_sub_field('heading'); ?></h2>
        <h4><?php the_sub_field('subheading'); ?></h4>
        <div>
            <?php the_sub_field('content'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

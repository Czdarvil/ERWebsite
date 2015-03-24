<?php
/**
 * Content block
 */
 ?>
<div class="content-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php get_template_part('templates/components/component-common-headings'); ?>
        <div>
            <?php the_sub_field('content'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

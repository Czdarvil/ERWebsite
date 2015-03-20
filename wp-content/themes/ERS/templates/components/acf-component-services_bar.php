<?php
/**
 * Home Services
 */
?>
<div class="services-bar">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-7">
        <ul>
          <?php while( have_rows('service_items') ):
            the_row();
            ?>
            <li>
              <i class="fa <?php the_sub_field('icon'); ?>"></i>
              <p>
                <?php echo get_sub_field('hidden_before') ? '<span>'.get_sub_field('hidden_before').'</span>' : ''; ?>
                <?php echo the_sub_field('item_label'); ?>
                <?php echo get_sub_field('hidden_after') ? '<span>'.get_sub_field('hidden_after').'</span>' : ''; ?>
              </p>
              <?php if( get_sub_field('link')): ?>
                <a href="<?php the_sub_field('link'); ?>" class="cover-link">
              <?php endif; ?>
              <?php if( get_sub_field('link')): ?>
                </a>
              <?php endif; ?>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <div class="col-md-5 hidden-sm hidden-xs">
        <p class="lead"><?php the_sub_field('label'); ?></p>
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</div>

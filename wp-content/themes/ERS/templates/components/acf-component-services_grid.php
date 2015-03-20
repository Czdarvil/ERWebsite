<?php
/**
 * Services Grid
 */
 ?>
<div class="services-grid">
  <div class="container">
    <?php
      $col_count = get_sub_field('display_columns');
      $col_size = floor(12/$col_count);
      $services = count(get_sub_field('service_boxes'));
      $iteration = 1;
    ?>
    <div class="row">
      <?php
        while ( have_rows( 'service_boxes' ) ) {
          the_row();

      ?>

          <div class="col-sm-<?php echo $col_size; ?>">
            <div class="services">
            <div class="service-item">
              <i class="fa <?php the_sub_field('icon'); ?>"></i>
              <div class="service-desc">
              <h4>
                <?php if(get_sub_field('link')): ?>
                  <a href="<?php the_sub_field('link') ?>">
                <?php endif; ?>
                <?php the_sub_field('heading') ?>
                <?php if(get_sub_field('link')): ?>
                  </a>
                <?php endif; ?>
              </h4>
              <?php the_sub_field('summary'); ?>
              </div>
            </div>
            </div> <!-- / .services -->
          </div>

      <?php
          // Break rows
          if ( $iteration%$col_count == 0 && $iteration < $services ) {
            echo '</div><div class="row">';
          }
          $iteration++;
        }
       ?>
    </div>
  </div>
</div>

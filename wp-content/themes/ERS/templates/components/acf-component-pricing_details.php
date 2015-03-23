<?php

  if ( isset( $_GET['state'] ) ) {
    $state = $_GET['state'];
  }
  if ( isset($_GET['station_type']) ):
    $station_type = $_GET['station_type'];
 ?>
<div class="pricing-option-result">
  <div class="container">
    <?php
      $collapsible = get_sub_field('results_collapsible');

      if ( $collapsible ) {
        echo '<h4 class="secondary-well-toggler" ><a data-toggle="collapse"href="#collapsible-index" aria-expanded="false">'.get_sub_field('collapse_label').' <i class="fa fa-caret-right"></i></a></h4>';
        echo '<div id="collapsible-index" class="collapse">';
      }
     ?>
    <div class="row">
      <div class="col-sm-12"><?php the_sub_field('results_intro'); ?></div>
    </div>
    <div class="pricing-well primary <?php echo get_sub_field('most_popular') ? '' : 'secondary-pricing-well'; ?>">
      <?php if ( get_sub_field('most_popular') ): ?>
        <div class="row hidden-xs hidden-sm">
          <div class="col-md-4 col-md-offset-4">
            <div class="pricing-favorite">
              <h4><p>Most Popular</p>
              </h4>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <div class="row">
        <?php
          if ( get_sub_field('product_1') ) {
            $post = get_sub_field('product_1');

            setup_postdata( $post );
            echo '<div class="col-sm-6 col-md-4">';
              include( locate_template('templates/components/component-pricing_option.php') );
            echo '</div>';
            wp_reset_postdata();
          }
        ?>

        <?php
          if ( get_sub_field('product_2') ) {
            $post = get_sub_field('product_2');

            setup_postdata( $post );
            echo '<div class="col-sm-6 col-md-4">';
              include( locate_template('templates/components/component-pricing_option.php') );
            echo '</div>';
            wp_reset_postdata();
          }
        ?>

        <?php
          if ( get_sub_field('product_3') ) {
            $post = get_sub_field('product_3');

            setup_postdata( $post );
            echo '<div class="col-sm-6 col-md-4">';
              include( locate_template('templates/components/component-pricing_option.php') );
            echo '</div>';
            wp_reset_postdata();
          }
        ?>
      </div>
    </div>
    <?php echo $collapsible ? '</div>' : ''; ?>
  </div>
</div>
<?php endif;

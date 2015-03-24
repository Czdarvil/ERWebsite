<?php
/**
 * Module Grid
 */
 ?>

<div class="module-grid">
  <div class="container">
    <?php
      $col_count = get_sub_field( 'display_columns' );
      $col_size = floor( 12/$col_count );
    ?>
    <div class="row">
      <div class="col-sm-12">
        <?php get_template_part('templates/components/component-common-headings'); ?>
      </div>
    </div>
    <div class="row modules">
      <?php
        $method = get_sub_field( 'display_method_module' );

        if ( $method == 'all' || $method == 'feature' || $method == 'product' || $method == 'this_product' ) {
          $args = array(
            'post_type' => 'module',
            'posts_per_page' => -1,
            'posts_status' => 'publish',
            'exclude' => $post->ID  // Exclude current post
          );
          if ( $method == 'feature' ) {
            $args['tax_query'] = array(
              array(
                'taxonomy' => 'feature',
                'field' => 'term_id',
                'terms' => get_sub_field( 'module_feature' )
              )
            );
          }
          if ( $method == 'product' ) {
            $args['connected_type'] = 'product_modules';
            $args['connected_items'] = get_sub_field('modules_in_product');
          }
          if ( $method == 'this_product' ) {
            $args['connected_type'] = 'product_modules';
            $args['connected_items'] = get_queried_object();
          }

          $module_posts = get_posts($args);

        } elseif ( $method == 'custom' ) {
          $module_posts = get_sub_field( 'module_selecton' );
        }

        if ( $module_posts ) {
          foreach ($module_posts as $post) {
            setup_postdata( $post );
            echo '<div class="col-xs-6 col-sm-'.$col_size.'">';
            get_template_part( 'templates/components/component', 'module_tile' );
            echo '</div>';
          }

          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</div>

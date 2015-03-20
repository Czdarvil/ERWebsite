<?php
/**
 * Employee Grid
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
        <?php if ( get_sub_field('heading') ): ?>
          <h2 class="headline-lg"><?php the_sub_field('heading'); ?></h2>
        <?php endif; ?>
        <?php if ( get_sub_field('subheading') ): ?>
          <h4><?php the_sub_field('subheading'); ?></h4>
        <?php endif; ?>
      </div>
    </div>
    <div class="row products">
      <?php
        $method = get_sub_field( 'display_method_product' );
        $module_posts = false;

        if ( $method == 'all' || $method == 'type' || $method == 'module' || $method == 'this_module' ) {
          $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
            'posts_status' => 'publish',
            'exclude' => $post->ID  // Exclude current post
          );
          if ( $method == 'type' ) {
            $args['tax_query'] = array(
              array(
                'taxonomy' => 'type',
                'field' => 'term_id',
                'terms' => get_sub_field( 'product_types' )
              )
            );
          }
          if ( $method == 'module' ) {
            $args['connected_type'] = 'product_modules';
            $args['connected_items'] = get_sub_field('module_products');
          }
          if ( $method == 'this_module' ) {
            $args['connected_type'] = 'product_modules';
            $args['connected_items'] = get_queried_object();
          }

          $module_posts = get_posts($args);

        } elseif ( $method == 'custom' ) {
          $module_posts = get_sub_field( 'product_selecton' );
        }

        if ( $module_posts ) {
          foreach ($module_posts as $post) {
            setup_postdata( $post );
            echo '<div class="col-sm-'.$col_size.'">';
            get_template_part( 'templates/components/component', 'product_tile' );
            echo '</div>';
          }

          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</div>

<?php
/**
 * Employee Grid
 */
 ?>

<div class="employee-grid">
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
    <div class="row employees">
      <?php
        $method = get_sub_field('display_method_employees');
        $employee_posts = false;
        if ( $method == 'all' || $method == 'team' ) {
          $args = array(
            'post_type' => 'employee',
            'posts_per_page' => -1,
            'posts_status' => 'publish'
          );
          if ( $method == 'team' ) {
            $args['tax_query'] = array(
              array(
                'taxonomy' => 'team',
                'field' => 'term_id',
                'terms' => get_sub_field( 'team' )
              )
            );
          }
          $employee_posts = get_posts($args);
        } elseif ( $method == 'custom' ) {
          $employee_posts = get_sub_field( 'employee_selection' );
        }


        if ( $employee_posts ) {

          foreach ($employee_posts as $post) {
            setup_postdata( $post );

            echo '<div class="col-xs-6 col-sm-'.$col_size.'">';
            get_template_part( 'templates/components/component', 'avatar' );
            echo '</div>';
          }

          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</div>

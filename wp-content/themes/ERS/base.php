<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <?php the_field( 'scripts_after_opening_body', 'options' ); ?>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

      <?php get_template_part('templates/page', 'header'); ?>

      <div class="wrapper">
        <div class="page-content">
          <div class="main">
            <?php include Wrapper\template_path(); ?>
          </div>
          <?php include Wrapper\sidebar_path(); ?>
        </div>
      </div>

    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <?php the_field( 'scripts_before_closing_body', 'options' ); ?>
  </body>
</html>

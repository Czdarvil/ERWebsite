<?php
use Roots\Sage\Config;
use Roots\Sage\Wrapper;
use Roots\Sage\Nav
 ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="well">
        <?php get_search_form(true); ?>
      </div>
      <div>
        <?php
          $mySearch = new WP_Query("s=$s & showposts=-1");
          $NumResults = $mySearch->post_count;
        ?>
        <p>Website Search (<?php echo $NumResults ?> Matches)</p>
        <hr>
      </div>
      <ul class="b-search-results__links">
        <?php while (have_posts()) : the_post(); ?>
          <li>
            <?php get_template_part('templates/search-item'); ?>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
  <hr>
  <?php Nav\the_post_pagination_navigation(true); ?>
</div>


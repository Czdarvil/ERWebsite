<?php while (have_posts()) : the_post(); ?>
  <?php $terms = get_the_terms($post->ID, 'feature'); ?>
    <?php if ( $terms ) : ?>
      <?php
        foreach ($terms as $term) {
          if ( get_field('icon', $term) ) {
            $icon = get_field('icon', $term);
            $title = $term->name;
            $link = get_field('landing_page', $term);
          }
        }
      ?>
      <div class="feature-category-lead container">
        <div class="row">
          <div class="col-sm-12">
            <h4 class="headline-icon">
              <?php if($link): ?>
                <a href="<?php echo $link; ?>"><i class="fa <?php echo $icon; ?>"></i><span><?php echo $title; ?></span></a>
              <?php else: ?>
                <i class="fa <?php echo $icon; ?>"></i><span><?php echo $title; ?></span>
              <?php endif; ?>
            </h4>
          </div>
        </div>
      </div>
  <? endif; ?>

  <?php get_template_part('templates/layout-components'); ?>
<?php endwhile; ?>

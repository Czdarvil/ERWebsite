      <article <?php post_class('blog'); ?>>
        <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
        <div class="blog-desc">
          <header>
            <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php get_template_part('templates/entry-meta'); ?>
            <?php
            if (get_field('enable_social_widget_script', 'options') && in_array('header', get_field('posts_archive_social_widget_locations', 'options') ) ) {
              the_field('social_widget_script', 'options');
            }
            the_field('archive_posts_social_footer', 'options');
            if ( has_post_thumbnail() ) {
              echo '<a href="'.get_permalink().'">';
                the_post_thumbnail( 'post_feature' );
              echo '</a>';
            }
             ?>
          </header>
          <div class="entry-summary">
            <?php the_excerpt(); ?>
          </div>
          <?php
            if(get_the_tag_list()) {
                echo get_the_tag_list('<p class="blog-tags">',' ','</p>');
              }
            if (get_field('enable_social_widget_script', 'options') && in_array('footer', get_field('posts_archive_social_widget_locations', 'options') ) ) {
              the_field('social_widget_script', 'options');
            }
          ?>
          <hr>
        </div>
      </article>

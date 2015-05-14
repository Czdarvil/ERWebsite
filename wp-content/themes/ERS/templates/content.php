      <article <?php post_class('blog'); ?>>
        <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
        <div class="blog-desc">
          <header>
            <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php get_template_part('templates/entry-meta'); ?>
            <?php
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
          ?>
          <hr>
        </div>
      </article>

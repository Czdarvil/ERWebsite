<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <article <?php post_class('blog'); ?>>
        <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
        <div class="blog-desc">
          <header>
            <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <hr>
            <?php get_template_part('templates/entry-meta'); ?>
          </header>
          <div class="entry-summary">
            <?php the_excerpt(); ?>
          </div>
          <?php
            if(get_the_tag_list()) {
                echo get_the_tag_list('<p class="blog-tags">',' ','</p>');
              }
          ?>
        </div>
      </article>
    </div>
  </div>
</div>

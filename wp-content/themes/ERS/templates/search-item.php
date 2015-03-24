<div class="search-result-item">
  <div class="title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
  <div class="snippet">
    <?php get_template_part('templates/components/content-excerpt', get_post_type() ); ?>
  </div>
  <div class="url">
    <a href="<?php the_permalink(); ?>" class="small"><?php the_permalink(); ?></a>
  </div>
</div>

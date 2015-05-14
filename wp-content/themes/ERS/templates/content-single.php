<div class="container">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <header>
        <h1 class="entry-title first-child"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
        <?php
        if ( !get_field('single_posts_use_hero_image', 'options') ) {
          the_post_thumbnail( 'post_feature' );
        }
        ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <?php comments_template('/templates/comments.php'); ?>
    </article>
  <?php endwhile; ?>
</div>

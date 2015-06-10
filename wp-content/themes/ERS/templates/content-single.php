<div class="container">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <header>
        <?php
        if ( !get_field('single_posts_use_hero_image', 'options') ) {
          the_post_thumbnail( 'post_feature' );
        }
        ?>
        <h1 class="entry-title first-child"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
        <?php
          if (get_field('enable_social_widget_script', 'options') && in_array('header', get_field('single_post_social_widget_locations', 'options') )  ) {
            the_field('social_widget_script', 'options');
          }
        ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <?php
        if (get_field('enable_social_widget_script', 'options') && in_array('footer', get_field('single_post_social_widget_locations', 'options') )  ) {
          the_field('social_widget_script', 'options');
        }
       ?>
      <?php comments_template('/templates/comments.php'); ?>
    </article>
  <?php endwhile; ?>
</div>

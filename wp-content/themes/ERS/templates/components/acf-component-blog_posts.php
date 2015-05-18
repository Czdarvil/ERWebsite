<?php
/**
 * Blog posts
 */
$post_query = array(
  'post_type'      => 'post',
  'posts_per_page' => 2,
  'post_status'    => 'publish',
);
$posts = false;
$method = get_sub_field('display_method');
switch ($method) {
  case 'custom':
    $posts = get_sub_field('posts');
    break;

  case 'category':
    $post_query['category'] = get_sub_field('category');
    $posts = get_posts($post_query);
    break;

  case 'recent':
    $post_query['orderby'] = 'date';
    $post_query['order']   = 'DESC';
    $posts = get_posts($post_query);
    break;
}
 ?>

<?php if ( $posts ): ?>
<div class="recent-posts">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php get_template_part('templates/components/component-common-headings'); ?>
      </div>
    </div>

    <div class="row">
      <?php foreach ($posts as $post): ?>
      <?php setup_postdata( $post ); ?>
      <div class="col-sm-6">
        <div class="blog">
          <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
          <div class="blog-desc">
            <h3>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <hr>
            <?php get_template_part('templates/entry-meta'); ?>
            <div class="entry-summary">
              <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink() ?>" class="btn btn-lg btn-theme-primary">Read more...</a>
          </div>
        </div>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endforeach; ?>
    </div> <!-- / .row -->
  </div>
</div>
<?php endif; ?>

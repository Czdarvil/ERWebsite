<?php
/**
 * Module Grid Item
 */
$module_icon = wp_get_attachment_image_src( get_field('icon_image'), 'thumb' );

// default cat color as double fallback for no cat, no cat color and no override.
$category_color = 'bg-theme-brown';

if (get_field('category_color_override') !== 'default' ) {
  $category_color = get_field('category_color_override');
} else {
  $terms = get_the_terms($post->ID, 'feature');

  if ( $terms ) {
    foreach ($terms as $term) {
      if ( get_field('category_color', $term) ) {
        $category_color = get_field('category_color', $term);
      }
    }
  }
}

$modalId = $post->post_name;

?>
<div class="colored-tile <?php echo $category_color; ?> module-tile">
  <div class="icon">
    <img src="<?php echo $module_icon[0] ?>" alt="<?php the_title(); ?>">
  </div>
  <h4><?php the_title(); ?></h4>
  <h5>module</h5>
  <a href="<?php the_permalink(); ?>" class="cover-link">&nbsp;</a>
</div>

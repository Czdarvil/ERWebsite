<?php
/**
 * Product Grid Item
 */
$product_icon = wp_get_attachment_image_src( get_field('product_thumbnail'), 'thumb' );

?>
<div class="colored-tile product-tile bg-theme-gray">
  <div class="icon">
    <img src="<?php echo $product_icon[0] ?>" alt="<?php the_title(); ?>">
  </div>
  <h4><?php the_title(); ?></h4>
  <a href="<?php the_permalink(); ?>" class="cover-link">&nbsp;</a>
</div>

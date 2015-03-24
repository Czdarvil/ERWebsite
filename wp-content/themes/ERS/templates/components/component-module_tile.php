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

<!-- MODULE MODAL -->
<!-- <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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

            <h4 class="headline-icon">
              <?php if($link): ?>
                <a href="<?php echo $link; ?>"><i class="fa <?php echo $icon; ?>"></i><span><?php echo $title; ?></span></a>
              <?php else: ?>
                <i class="fa <?php echo $icon; ?>"></i><span><?php echo $title; ?></span>
              <?php endif; ?>
            </h4>
        <? endif; ?>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4">
            <div class="colored-tile <?php echo $category_color; ?> module-tile">
              <div class="icon">
                <img src="<?php echo $module_icon[0] ?>" alt="<?php the_title(); ?>">
              </div>
              <h4><?php the_title(); ?></h4>
              <h5>module</h5>
              <div class="mask <?php echo $category_color; ?>"></div>
              <a href="<?php the_permalink(); ?>" class="cover-link">&nbsp;</a>
            </div>
          </div>
          <div class="col-sm-8">
            <?php the_field('module_description'); ?>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-theme-secondary">Read More</a>
      </div>
    </div>
  </div>
</div>
 -->

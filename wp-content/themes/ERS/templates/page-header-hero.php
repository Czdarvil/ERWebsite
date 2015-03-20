<?php
/**
 * Parallax Hero Image
 */

$bg_image = wp_get_attachment_image_src( get_field('hero_image'), 'full' );
?>
<div class="hero-image" style="background-image: url(<?php echo $bg_image[0] ?>);"><!-- Hero Image holder --></div>

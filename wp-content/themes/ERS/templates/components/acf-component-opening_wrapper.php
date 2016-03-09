<?php
global $openWrappers;
$openWrappers++;

$bg_style = '';

$bg_image = wp_get_attachment_image_src( get_sub_field('background_image'), 'full' );
if ($bg_image) {
    $bg_style = 'style="background-image: url('.$bg_image[0].');"';
}
?>
<div class="content-wrapper <?php the_sub_field('background_color'); ?>" <?php echo $bg_style; ?>>

<?php
use Roots\Sage\Config;
use Roots\Sage\Wrapper;
 ?>

<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

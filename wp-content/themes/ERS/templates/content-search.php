<?php
use Roots\Sage\Config;
use Roots\Sage\Wrapper;
 ?>
THIS IS SEARCH;
<ul>
  <?php the_content(); ?>
</ul>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

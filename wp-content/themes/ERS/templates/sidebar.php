<?php
  use Roots\Sage\Config;
?>

<?php if( Config\page_should_have_sidebar() ) : ?>
  <?php do_action('before_sidebar'); ?>
  <aside class="sidebar" role="complementary">
    <?php do_action('before_widgets'); ?>
    <?php dynamic_sidebar('sidebar-primary'); ?>
    <?php do_action('after_widgets'); ?>
  </aside><!-- /.sidebar -->
  <?php do_action('after_sidebar') ?>
<?php endif; ?>

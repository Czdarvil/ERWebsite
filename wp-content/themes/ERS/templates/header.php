<?php use Roots\Sage\Nav; ?>

<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <?php if( isset( $_GET['src'] ) && 'embed' == $_GET['src'] ): ?>
    <base target="_parent" />
  <?php else: ?>
    <div class="top-nav container">
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <img alt="<?php bloginfo('name'); ?>" src="<?php echo esc_url( get_theme_mod( 'ers_logo' ) ); ?>">
      </a>
      <div class="pull-right">
        <a href="<?php the_field('login_url', 'options'); ?>" class="navbar-btn btn btn-theme-primary">Login</a>
      </div>
    </div>
  <?php endif; ?>
  <nav class="menu-container">
    <div class="container mobile-nav-header">
      <?php
      if (has_nav_menu('contact_menu')) :
        wp_nav_menu(['theme_location' => 'contact_menu', 'menu_class' => 'contact-menu']);
      endif;
      ?>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?php echo __('Toggle navigation', 'sage'); ?></span>
        <i class="fa fa-bars"></i>
        <span class="nav-label">Menu</span>
      </button>
    </div>
    <div class="sub-nav">
      <div class="container">
        <div class="navbar-header">
        </div>
        <nav class="collapse navbar-collapse" role="navigation">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
          endif;
          ?>
        </nav>
      </div>
    </div>
  </nav>
</header>

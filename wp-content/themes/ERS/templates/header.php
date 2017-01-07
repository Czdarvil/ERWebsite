<?php use Roots\Sage\Nav; ?>
<?php if( isset( $_GET['src'] ) && 'embed' == $_GET['src'] ):
/* This is embedded into (presumably) an iframe without the top part of the header. So we need to push down the nav bar AND set all link's target. */ ?>
  <base target='_parent'>
  <script type='text/javascript'>
  (function($) {
    $(document).ready(function(){
      set_wrapper_padding();
    });
    $(window).on('resize', function() {
      set_wrapper_padding();
    });
    function set_wrapper_padding() {
      // The hoe-slider element has negative padding, so add that much to the wrapper to keep the slider from up too high
      $('.page-header-wrapper').css('padding-top', $('.navbar-fixed-top').height() - parseInt($('.home-slider').css('margin-top')));
    }
  })(jQuery);
  </script>
<?php endif; ?>
<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <?php if( ! (isset( $_GET['src'] ) && 'embed' == $_GET['src'] ) ): ?>
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

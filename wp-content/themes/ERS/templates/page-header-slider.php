<div class="home-slider">
  <!-- Carousel -->
  <div id="hero-slider" class="carousel slide" data-ride="carousel" data-interval="<?php echo get_field('slide_interval') > 0 ? get_field('slide_interval') : 'false'; ?>">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php $iteration = 0; ?>
      <?php while ( have_rows('slider') ): the_row(); ?>
          <li data-target="#hero-slider" data-slide-to="<?php echo $iteration; ?>" class="<?php echo $iteration == 0 ? 'active' : ''; ?>"></li>
      <?php
          $iteration++;
        endwhile;
      ?>

    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <!-- Slide #1 -->
      <?php
        $iteration = 0;
        while ( have_rows('slider') ) {
          the_row();
          $bg_image = wp_get_attachment_image_src( get_sub_field('background_image'), 'full' );
          ?>
            <div class="item<?php echo $iteration == 0 ? ' active' : ''; ?>" style="background-image: url(<?php echo $bg_image[0]; ?>)">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="hero-slider__content">
                      <?php the_sub_field('slide_content'); ?>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->
              <?php if(get_sub_field('additional_image')):
                $img = wp_get_attachment_image_src( get_sub_field('additional_image'), 'full' );
              ?>
              <div class="bg-img hidden-xs">
                <img src="<?php echo $img[0]; ?>" alt="">
              </div>
              <?php endif; ?>

            </div> <!-- / .item -->

          <?php
          $iteration++;
        }
       ?>
    </div> <!-- / .carousel -->
    <!-- Controls -->
    <a class="carousel-arrow carousel-arrow-prev" href="#hero-slider" data-slide="prev">
      <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-arrow carousel-arrow-next" href="#hero-slider" data-slide="next">
      <i class="fa fa-angle-right"></i>
    </a>
  </div>
</div>

<?php
/**
 * Single Employee Page
 */
while (have_posts()) : the_post();
$avatar = wp_get_attachment_image_src(get_field('headshot'), 'full');

// Default avatar placeholder
$avatar_src = '';

if ( $avatar ) {
    $avatar_src = $avatar[0];
}
 ?>

<div class="employee-bio">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="user-avatar shadow-effect text-center">
          <img class="img-responsive center-block" src="<?php echo $avatar_src ?>" alt="<?php the_title(); ?>">
          <?php the_title(); ?>
          <p class="text-muted"><?php the_field('position'); ?></p>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-7">
            <h3><?php the_title(); ?></h3>
            <p class="text-muted"><?php the_field('position'); ?></p>
            <div class="social user-social">
              <ul class="list-inline">
                <?php if (get_field('social_facebook')): ?>
                  <li><a href="<?php the_field('social_facebook'); ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
                <?php endif; ?>

                <?php if (get_field('social_twitter')): ?>
                  <li><a href="<?php the_field('social_twitter'); ?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <?php endif; ?>

                <?php if (get_field('social_google')): ?>
                  <li><a href="<?php the_field('social_google'); ?>" class="plus"><i class="fa fa-google-plus"></i></a></li>
                <?php endif; ?>

                <?php if (get_field('social_linkedin')): ?>
                  <li><a href="<?php the_field('social_linkedin'); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
          <div class="col-sm-5">
            <ul class="user-info">
              <?php if ( get_field('phone_number') ): ?>
                <li>Phone Number: <?php the_field('phone_number'); ?></li>
              <?php endif; ?>
              <?php if ( get_field('email_address')): ?>
                <li>Email: <?php the_field('email_address'); ?></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>

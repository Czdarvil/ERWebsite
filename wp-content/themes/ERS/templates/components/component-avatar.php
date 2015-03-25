<?php
/**
 * Avatar
 */
use Roots\Sage\Assets;

$avatar = wp_get_attachment_image_src(get_field('headshot'), 'medium');

// Default avatar placeholder
$avatar_src = Assets\asset_path('images/headshot-fallback.png');

if ( $avatar ) {
    $avatar_src = $avatar[0];
}

$modalId = $post->post_name;
?>
<div class="user-avatar shadow-effect text-center" data-toggle="modal" data-target="#<?php echo $modalId; ?>">
  <img class="img-responsive center-block" src="<?php echo $avatar_src ?>" alt="<?php the_title(); ?>">
  <?php the_title(); ?>
  <p class="text-muted"><?php the_field('position'); ?></p>
</div>

<!-- AVATAR MODAL -->
<div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Employee Bio</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4">
            <div class="user-avatar shadow-effect text-center">
              <img class="img-responsive center-block" src="<?php echo $avatar_src ?>" alt="<?php the_title(); ?>">
              <?php the_title(); ?>
              <p class="text-muted"><?php the_field('position'); ?></p>
              <a href="<?php the_permalink(); ?>" class="cover-link"></a>
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
  </div>
</div>

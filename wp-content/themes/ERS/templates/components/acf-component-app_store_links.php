<?php
/**
 * App Stores
 */
use Roots\Sage\Assets
 ?>
<div class="app-stores">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-8 col-md-offset-2">
        <?php get_template_part('templates/components/component-common-headings'); ?>
        <div class="row">
          <?php
            $stores = get_sub_field('stores');
            $count = count( $stores );
            $grid = 12 / $count % 12;

            foreach ($stores as $store) : ?>

              <div class="col-sm-<?php echo $grid ?>">
                <a href="<?php the_sub_field($store); ?>" class="store-icon <?php echo $store; ?>">
                  <?php $asset = 'images/app-store/'.$store.'.png'; ?>
                  <img src="<?php echo Assets\asset_path($asset); ?>" alt="<?php echo $store; ?> app store">
                </a>
              </div>

          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

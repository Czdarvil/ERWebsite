<?php
  require_once('includes/common.php');
  require_once('includes/language_helper.php');
?>
<?php get_header(); ?>

  <!-- ******************** MASTHEAD SECTION ******************** -->
  <main id="top" class="masthead" role="main">
    <div class="container">

      <?php /// TRANSLATORS: Masthead Primary Title ?>
      <h1><?php echo _gettext("Fire Training and Prevention <br> Management just became easier"); ?>
      </h1>

      <div class="row">
        <div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
          <?php ///TRANSLATORS: Masthead Free Trial Button text  ?>
          <a class="btn btn-success btn-lg" href="#footercta"><?php echo _gettext("FREE TRIAL"); ?></a>
        </div>
        <a href="#explore" class="scrollto">
          <?php ///TRANSLATORS: Masthead learn more link text ?>
          <p><?php echo _gettext("LEARN MORE"); ?></p>
          <?php ///TRANSLATORS: Masthead scroll down arrow image alt text ?>
          <p class="scrollto--arrow"><img src="images/scroll_down.png" alt="<?php echo _gettext("scroll down arrow"); ?>"></p>
        </a>
      </div>
    </div><!--/container -->
  </main><!--/main -->


  <!-- ******************** FEATURES SECTION ******************** -->
  <div class="container" id="explore">

    <div class="section-title">
      <?php ///TRANSLATORS: Feature section title ?>
      <h2><?php echo _gettext("Use the web to do more"); ?></h2>
      <?php ///TRANSLATORS: Feature section subtitle ?>
      <h4><?php echo _gettext("Are you still using paper records to manage training at your fire station?"); ?></h4>
    </div>

    <section class="row heroimg breath">
      <div class="col-md-12 text-center">
        <?php ///TRANSLATORS: Features section hero image alt text ?>
        <img src="images/main-image.png" alt="<?php echo _gettext("flat-mockup-template"); ?>">
      </div>
    </section><!--/section -->

    <div class="section-title">
      <?php ///TRANSLATORS: Features section title above features row ?>
      <h2><?php echo _gettext("The premier fire prevention management tool is here"); ?></h2>
      <?php ///TRANSLATORS: Features section subtitle above features row ?>
      <h4><?php echo _gettext("Use Emergency Reporting to manage your training and inspection records online."); ?></h4>
    </div>

    <section class="row features">

      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <?php ///TRANSLATORS: Feature 1 icon image alt text ?>
          <img src="images/icon1.png" alt="<?php echo _gettext("Complete Inspections"); ?>" width="95" height="95">
          <div class="caption">
            <?php ///TRANSLATORS: Feature 1 title ?>
            <h3><?php echo _gettext("Complete Inspections"); ?></h3>
            <?php ///TRANSLATORS: Feature 1 body ?>
            <p><?php echo _gettext("Schedule routine inspections for buildings in your community, and assign them to your staff."); ?></p>
          </div>
        </div><!--/thumbnail -->
      </div><!--/col-sm-6-->

      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <?php ///TRANSLATORS: Feature 2 icon image alt text ?>
          <img src="images/icon2.png" alt="<?php echo _gettext("Assess Risks"); ?>" width="95" height="95">
          <div class="caption">
            <?php ///TRANSLATORS: Feature 2 title ?>
            <h3><?php echo _gettext("Assess Risks"); ?></h3>
            <?php ///TRANSLATORS: Feature 2 body ?>
            <p><?php echo _gettext("Analyze and categorize the risks and hazards in your community with the power of Google Maps."); ?></p>
          </div>
        </div><!--/thumbnail -->
      </div><!--/col-sm-6-->

      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <?php ///TRANSLATORS: Feature 3 icon image alt text ?>
          <img src="images/icon3.png" alt="<?php echo _gettext("Schedule Training"); ?>" width="95" height="95">
          <div class="caption">
            <?php ///TRANSLATORS: Feature 3 title ?>
            <h3><?php echo _gettext("Schedule Training"); ?></h3>
            <?php ///TRANSLATORS: Feature 3 body ?>
            <p><?php echo _gettext("Schedule classes and upload documents to share with class participants."); ?></p>
          </div>
        </div><!--/thumbnail -->
      </div><!--/col-sm-6-->

      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <?php ///TRANSLATORS: Feature 3 icon image alt text ?>
          <img src="images/icon4.png" alt="<?php echo _gettext("Track Progress"); ?>" width="95" height="95">
          <div class="caption">
            <?php ///TRANSLATORS: Feature 3 title ?>
            <h3><?php echo _gettext("Track Progress"); ?></h3>
            <?php ///TRANSLATORS: Feature 3 body ?>
            <p><?php echo _gettext("Organize your training program using class and certification templates."); ?></p>
          </div>
        </div><!--/thumbnail -->
      </div><!--/col-sm-6-->

    </section><!--/section -->

  </div><!--/container -->


  <!-- ******************** TESTIMONIALS SECTION ******************** -->
  <div class="highlight testimonials">
    <div class="container">
      <div class="section-title">
        <?php ///TRANSLATORS: Testimonials title ?>
        <h2><?php echo _gettext("From our supporters"); ?></h2>
        <?php ///TRANSLATORS: Testimonials subtitle ?>
        <h4><?php echo _gettext("Departments stay with us because we care about our customers."); ?></h4>
      </div>

      <section class="row breath">
        <div class="col-md-6">
          <?php ///TRANSLATORS: Testimonial 1 quote ?>
          <div class="testblock"><?php echo _gettext("We've been using the system for about a year and a half. Utilizing previous systems where they didn't want our input, this is a thousand times better... It's actually taking input from the customer."); ?></div>
          <div class="clientblock">
            <img src="images/ward-watson.png" alt="." width="67" height="67">
                       <?php ///TRANSLATORS: Testimonial 1 Name ?>
            <p><strong><?php echo _gettext("Training Lt. Ward Watson");?></strong> <br>
                        <?php ///TRANSLATORS: Testimonial 1 Credentials ?>
                       <?php echo _gettext("Platteville Gilcrest Fire Protection District, Colorado, USA"); ?>
            </p>
          </div>
        </div><!--/col-md-6 -->

        <div class="col-md-6">
          <?php ///TRANSLATORS: Testimonial 2 quote ?>
          <div class="testblock"><?php echo _gettext("We were able to come in on time and under budget and get a superior product that we felt was going to meet our needs. We keep finding more and more things we can do with this system."); ?></div>
          <div class="clientblock">
            <img src="images/john-bales.png" alt="." width="67" height="67">
            <?php ///TRANSLATORS: Testimonial 2 Name ?>
            <p><strong><?php echo _gettext("Chief John Bales"); ?></strong> <br>
                          <?php ///TRANSLATORS: Testimonial 2 Credentials ?>
                          <?php echo _gettext("Golden Fire Department, Colorado, USA"); ?>
                        </p>
          </div>
        </div><!--/col-md-6 -->
      </section><!--/section -->

    </div><!--/container -->
  </div><!--/highlight Testimonials -->

  <!-- ******************** FAQ ******************** -->

  <div class="container">
    <div class="section-title">
      <?php ///TRANSLATORS: FAQ section title ?>
      <h5><?php echo _gettext("Frequently Asked Questions"); ?></h5>
    </div>

    <section class="row faq breath">
      <div class="col-md-6">
        <?php ///TRANSLATORS: FAQ 1 Question ?>
        <h6><?php echo _gettext("How does the free trial work?"); ?></h6>
        <?php ///TRANSLATORS: FAQ 1 Answer ?>
        <p><?php echo _gettext("If you sign up below, a representative will create a free trial account of Emergency Reporting that you can use to analyze our system. There is no cost to evaluate our system."); ?></p>
        <?php ///TRANSLATORS: FAQ 2 Question ?>
        <h6><?php echo _gettext("How long have you been selling internationally?"); ?></h6>
        <?php ///TRANSLATORS: FAQ 2 Answer ?>
        <p><?php echo _gettext("Emergency Reporting has been delivering web-based fire software to the global market for over six years, and we've been in business since 2003. We have over 1,500 civilian fire departments and over 150 US Department of Defense customers, including entire U.S. Marine Corps."); ?></p>
      </div><!--/col-md-6 -->

      <div class="col-md-6">
        <?php ///TRANSLATORS: FAQ 3 Question ?>
        <h6><?php echo _gettext("How secure is your system?"); ?></h6>
        <?php ///TRANSLATORS: FAQ 3 Answer ?>
        <p><?php echo _gettext("The security of your data is our top priority. We back up your data every five seconds at our World Class, secure data centers using state of the art equipment and redundancy tactics."); ?></p>
        <?php ///TRANSLATORS: FAQ 4 Question ?>
        <h6><?php echo _gettext("How much will it cost to use Emergency Reporting at my department?"); ?></h6>
        <?php ///TRANSLATORS: FAQ 4 Answer ?>
        <p><?php echo _gettext("Emergency Reporting is a 100% web-based solution. You only pay once for your entire staff/department. You can login to your account from anywhere and there are no limits to the number of users that can be added to your account."); ?></p>
      </div><!--/col-md-6 -->
    </section><!--/section faq -->

  </div><!--/container -->

<?php
  get_partial('freetrial_form.php');
  // include( PROJECT_DIR . '/partials/freetrial_form.php');
 ?>

<?php get_footer(); ?>

  <div class="container">
    <section class="row breath">
      <div class="col-md-12 footerlinks">
        <?php ///TRANSLATORS: Copyright additional text ?>
        <p>&copy; 2014 Reporting Systems, Inc. <?php echo _gettext("All Rights Reserved"); ?></p>
      </div>
    </section><!--/section -->
    <section class="row breath">
      <?php get_partial('language_list.php'); ?>
    </section>
  </div><!--/container -->

  <!-- Footer Scripts -->
  <script src="js/jquery.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
  <script src="js/easing.js"></script>
  <script src="js/nicescroll.js"></script>
  <script src="js/main.js"></script>
  <script>
  $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1500,'easeInOutExpo');
      event.preventDefault();
    });
  });
  </script>
</body>
</html>

/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        $('#navbar-search > a').on('click', function() {
          $('#navbar-search > a > i').toggleClass('fa-search fa-times');
          $("#navbar-search-box").toggleClass('show hidden animated fadeInUp');
          return false;
        });

        $(".main").fitVids();

        var $vidLinkEmbeds = $('a[href*="youtube.com"], a[href*="youtu.be"], a[href*="vimeo.com"]');
        $vidLinkEmbeds.magnificPopup({
          type: 'iframe',
          iframe: {
            patterns: {
              youtu: {
                index: 'youtu.be',
                id: '.be/',
               src: '//www.youtube.com/embed/%id%?autoplay=1'
              }
            }
          }
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
    'isotope_filters': {
      init: function() {
        // init Isotope
        var $container = $('#isotope-container').imagesLoaded( function() {
          $container.isotope({
            itemSelector: '.isotope-item',
            layoutMode: 'fitRows'
          });
        });
        // filter items on button click
        $('#filters a').on('click', function(e) {
          var filterValue = $(this).attr('data-filter');
          var $parent = $(this).parent();
          $parent.addClass('active-filter');
          $parent.siblings('li').removeClass('active-filter');
          $container.isotope({ filter: filterValue });
          return false;
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

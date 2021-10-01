$(document).ready(function () {
  // -------------- Main Menu Jquery

  // -------------- Placeholder Jquery

  $("input, textarea").placeholder();

  // -------------- Reject IE Jquery

  $.reject({
    reject: {
      all: false,
      msie: 9,
    },
    display: ["firefox", "chrome", "safari"],
    imagePath: "assets/images/",
  });

  // -------------- New Jquery

  jQuery(".panel-collapse").on("show.bs.collapse", function () {
    jQuery(this).siblings(".panel-heading").addClass("active");
    jQuery(this).parent(".panel-default").addClass("active");

    // jQuery('.panel-collapse').removeClass('show');
    // jQuery(this).addClass('show');
  });

  jQuery(".panel-collapse").on("hide.bs.collapse", function () {
    jQuery(this).siblings(".panel-heading").removeClass("active");
    jQuery(this).parent(".panel-default").removeClass("active");
  });

  $(document).ready(function () {
    $(".first-button").on("click", function () {
      $(".animated-icon1").toggleClass("open");
    });
    $(".second-button").on("click", function () {
      $(".animated-icon2").toggleClass("open");
    });
    $(".third-button").on("click", function () {
      $(".animated-icon3").toggleClass("open");
    });
  });

  $("#client").owlCarousel({
    loop: false,
    nav: false,
    dots: true,
    autoHeight: true,
    margin: 15,
    //navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });

  $("#testi").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    autoHeight: true,
    margin: 15,
    //navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 2.2,
      },
    },
  });

  // click animate
  $(".enquire-btn").click(function (event) {
    $("html, body").animate(
      {
        scrollTop: $(".enquire").offset().top - 100,
      },
      500
    );

    event.preventDefault();
  });

  $('.navbar a[href^="#"]:not([data-toggle]):not([data-slide])').click(
    function () {
      // $(".navbar-nav").find(".active").removeClass("active");
      // $(this).parent().addClass("active");

      if ($(window).width() <= 1024) {
        $("html, body").animate(
          {
            scrollTop: $($(this).attr("href")).offset().top - 200,
          },
          500
        );

        $(".navbar-toggler").trigger("click");
      } else {
        $("html, body").animate(
          {
            scrollTop: $($(this).attr("href")).offset().top - 200,
          },
          500
        );
      }

      return false;
    }
  );

  $(function () {
    if (jQuery(window).width() >= 700) {
      $(".event-box").matchHeight({
        byRow: true,
      });

      $("#testi .testi-box").matchHeight({
        byRow: true,
      });

      $(".faq .panel-heading").matchHeight({
        byRow: true,
      });
    }
  });

  $(window).scroll(function () {
    $(".animated").each(function () {
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
      if (pos < winTop + 900) {
        $(this).addClass("animate");
      } else {
        $(this).removeClass("animate");
      }
    });
  });
});

jQuery(document).ready(function ($) {
  jQuery("body").delegate(".cta-header a", "click", function (event) {
    var a_href = jQuery(this).attr("href");

    var url = "index.html";
    var a_href = jQuery(this).attr("href");
    var href = url.concat(a_href);

    jQuery(location).attr("href", href);
  });
});

jQuery(document).ready(function () {
  var scroll_start = 0;
  var startchange = jQuery("#startchange");
  var offset = startchange.offset();
  if (startchange.length) {
    jQuery(document).scroll(function () {
      scroll_start = jQuery(this).scrollTop();
      if (scroll_start > offset.top) {
        jQuery(".navbar").addClass("show navslide");
      } else {
        jQuery(".navbar").removeClass("show navslide");
      }
    });
  }
});

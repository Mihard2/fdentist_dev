(function($) {
  $(document).ready(function() {
    $('.specialists-slider').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      speed: 1500,
      // centerMode: true,
      responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,

          }
        },
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
    $('.feedback-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      speed: 1500,
      // centerMode: true,
      responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,

          }
        },
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
    $('.before-after-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      speed: 1500,
      responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,

          }
        },
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });

    $('.sertificats-slider').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      speed: 1500,
      dots: false,

      responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,

          }
        },
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    var $page = $('html, body');
    $('a.nav-btn[href*="#"]').click(function() {
      $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
      }, 800);
      return false;
    });

    $('.atmosphere-slider').slick({
      speed: 1500,
    });
    $('.atmosphere-slider_min').slick({
      speed: 1500,
      responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,

          }
        },
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    $('.img-popup').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      removalDelay: 350,
      mainClass: 'mfp-bg',
      image: {
        verticalFit: true
      },
      gallery: {
        enabled: true
      }


    });

    $('.form-popup').magnificPopup({
      type: 'inline',
      preloader: false,
      focus: '#form',
      fixedContentPos: false,
      removalDelay: 350,
      mainClass: 'mfp-fade'




      // When elemened is focused, some mobile browsers in some cases zoom in
      // It looks not nice, so we disable it:
      // callbacks: {
      //     beforeOpen: function() {
      //         if ($(window).width() < 700) {
      //             this.st.focus = false;
      //         } else {
      //             this.st.focus = '#name';
      //         }
      //     }
      // }
    });

    $('.popup-slide').magnificPopup({
      type: 'inline'
    });

    // smooth scroll

    $("body").on("click", ".smooth_scrolla", function(event) {
      if ($(this).hasClass('just-link')) return;
      event.preventDefault();
      var id = $(this).attr('href'),
        top = $(id).offset().top;
      $('body,html').animate({
        scrollTop: top
      }, 1100);
    });

    // end smooth scroll


    // modile mune
    var link = $('.menu-link');
    var linkActive = $('.menu-link_active');
    var menu = $('.hamburger-menu');
    var navLink = $('.hamburger-menu a');
    link.click(function() {
      link.toggleClass('menu-link_active');
      menu.toggleClass('hamburger-menu_active');
    });

    navLink.click(function() {
      link.toggleClass('menu-link_active');
      menu.toggleClass('hamburger-menu_active');
    });
    // end modile mune

    // lidhtbox
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'maxHeight': 800,
      'maxWidth': 800,
      'albumLabel': ''
    })
    // end lightbox

    $('#form').on('submit', function(e) {
      e.preventDefault();
      name_ = $("#form input[name='name']");
      phone = $("#form input[name='phone']");
      if (name_.val() == '') name_.addClass('check-error');
      if (phone.val() == '') phone.addClass('check-error');
      setTimeout(function() {
        name_.removeClass('check-error');
        phone.removeClass('check-error');
      }, 5000);
      if (name_.hasClass('check-error') || phone.hasClass('check-error')) return;
      currentform = $(this);
      $.ajax({
        type: 'POST',
        url: fdentist_setup.ajaxurl,
        data: currentform.serialize() + '&action=form_handler',
        dataType: 'json',
        async: false,
        success: function(data) {
          if (data.success) {
            if (typeof fdentist_setup != 'undefined' && typeof fdentist_setup.succesurl != 'undefined') {
              currentform.get(0).reset();
              window.location = fdentist_setup.succesurl;
            }
          } else {

          }
        },
        error: function() {

        }
      });
    });
    $('#form2').on('submit', function(e) {
      e.preventDefault();
      name_ = $("#form2 input[name='name']");
      phone = $("#form2 input[name='phone']");
      if (name_.val() == '') name_.addClass('check-error');
      if (phone.val() == '') phone.addClass('check-error');
      setTimeout(function() {
        name_.removeClass('check-error');
        phone.removeClass('check-error');
      }, 5000);
      if (name_.hasClass('check-error') || phone.hasClass('check-error')) return;
      currentform = $(this);
      $.ajax({
        type: 'POST',
        url: fdentist_setup.ajaxurl,
        data: currentform.serialize() + '&action=form_handler',
        dataType: 'json',
        async: false,
        success: function(data) {
          if (data.success) {
            if (typeof fdentist_setup != 'undefined' && typeof fdentist_setup.succesurl != 'undefined') {
              currentform.get(0).reset();
              window.location = fdentist_setup.succesurl;
            }
          } else {

          }
        },
        error: function() {

        }
      });
    });
    $('#form_price').on('submit', function(e) {
      e.preventDefault();
      name_ = $("#form_price input[name='name']");
      phone = $("#form_price input[name='phone']");
      if (name_.val() == '') name_.addClass('check-error');
      if (phone.val() == '') phone.addClass('check-error');
      setTimeout(function() {
        name_.removeClass('check-error');
        phone.removeClass('check-error');
      }, 5000);
      if (name_.hasClass('check-error') || phone.hasClass('check-error')) return;
      currentform = $(this);
      $.ajax({
        type: 'POST',
        url: fdentist_setup.ajaxurl,
        data: currentform.serialize() + '&action=form_price_handler',
        dataType: 'json',
        async: false,
        success: function(data) {
          if (data.success) {
            if (typeof fdentist_setup != 'undefined' && typeof fdentist_setup.succesurl != 'undefined') {
              currentform.get(0).reset();
              window.location = fdentist_setup.succesurl;
            }
          } else {

          }
        },
        error: function() {

        }
      });
    });
    $('#free-diagnostic').on('submit', function(e) {
      e.preventDefault();
      name_ = $("#free-diagnostic input[name='name']");
      phone = $("#free-diagnostic input[name='phone']");
      if (name_.val() == '') name_.addClass('check-error');
      if (phone.val() == '') phone.addClass('check-error');
      setTimeout(function() {
        name_.removeClass('check-error');
        phone.removeClass('check-error');
      }, 5000);
      if (name_.hasClass('check-error') || phone.hasClass('check-error')) return;
      currentform = $(this);
      $.ajax({
        type: 'POST',
        url: fdentist_setup.ajaxurl,
        data: currentform.serialize() + '&action=form_handler',
        dataType: 'json',
        async: false,
        success: function(data) {
          if (data.success) {
            if (typeof fdentist_setup != 'undefined' && typeof fdentist_setup.succesurl != 'undefined') {
              currentform.get(0).reset();
              window.location = fdentist_setup.succesurl;
            }
          } else {

          }
        },
        error: function() {

        }
      });
    });

    $('#form-pdf').on('submit', function(e) {
      e.preventDefault();
      name_ = $("#form-pdf input[name='name']");
      phone = $("#form-pdf input[name='phone']");
      if (name_.val() == '') name_.addClass('check-error');
      if (phone.val() == '') phone.addClass('check-error');
      setTimeout(function() {
        name_.removeClass('check-error');
        phone.removeClass('check-error');
      }, 5000);
      if (name_.hasClass('check-error') || phone.hasClass('check-error')) return;
      currentform = $(this);
      $.ajax({
        type: 'POST',
        url: fdentist_setup.ajaxurl,
        data: currentform.serialize() + '&action=form_pdf_handler',
        dataType: 'json',
        async: false,
        success: function(data) {
          if (data.success && typeof data.download_url != 'undefined') {
            currentform.get(0).reset();
            window.location = data.download_url;
          } else {
            if (typeof data.message != 'undefined')
              console.log(data.message);
          }
        },
        error: function() {

        }
      });
    });

    $.fn.ravno = function() {
      var $self = $(this);
      var fn = function() {
        var maxH = -1;
        $self.height("auto").each(function() {
          var h = $(this).height();
          maxH = (h > maxH) ? h : maxH;
        });
        $self.height(maxH);
      };
      if ($.fn.imagesLoaded) {
        $self.imagesLoaded(fn);
      } else {
        fn();
      }
    };

    $(".block_ravno").ravno();

  })
})(jQuery);
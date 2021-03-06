;(function($) {

    "use strict";


	// iPad and iPod detection
	var isiPad = function(){
		return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
	    return (
			(navigator.platform.indexOf("iPhone") != -1) ||
			(navigator.platform.indexOf("iPod") != -1)
	    );
	};

  //Backtotop
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $(".topcontrol").fadeIn();
        } else {
          $(".topcontrol").fadeOut();
        }
  })
  $('.topcontrol').click(function () {
     $("html, body").animate({
         scrollTop: 0
     }, 1000);
      return false;
      });
      //Backtotop END

	// Full height
	var fullHeight = function() {
		if ( !isiPhone() || !isiPad() ) {
			$('.js-full-height').css('height', $(window).height());
			$(window).resize(function(){
				$('.js-full-height').css('height', $(window).height());
			});
		}
	};

	// Scroll Next
	var ScrollNext = function() {
		$('body').on('click', '.scroll-btn', function(e){
			e.preventDefault();

			$('html, body').animate({
				scrollTop: $( $(this).closest('[data-next="yes"]').next()).offset().top
			}, 1000, 'easeInOutExpo');
			return false;
		});
	};

	// Parallax
	var parallax = function() {
		$(window).stellar();
	};

	// Counter
	var counter = function() {
		$('.template-counter-style-1').waypoint( function( direction ) {
			var el = $(this.element).attr('class');
			if( direction === 'down' && !$(this.element).hasClass('animated')) {
				setTimeout( function(){
					// console.log($(this.element));
					$('.js-counter').countTo({
						 formatter: function (value, options) {
				      	return value.toFixed(options.decimals);
				   	},
					});
				} , 200);

				$(this.element).addClass('animated');

			}
		} , { offset: '75%' } );


		$('.template-counter-style-2').waypoint( function( direction ) {
			var el = $(this.element).attr('class');
			if( direction === 'down' && !$(this.element).hasClass('animated')) {
				setTimeout( function(){
					$('.js-counter').countTo({
						 formatter: function (value, options) {
				      	return value.toFixed(options.decimals);
				   	},
					});
				} , 200);

				$(this.element).addClass('animated');

			}
		} , { offset: '75%' } );
	};


	// Click outside of offcanvass
	var mobileMenuOutsideClick = function() {
		$(document).on(function (e) {
	    var container = $("#template-offcanvass, .js-template-mobile-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	    	$('html').removeClass('mobile-menu-expanded');
	    	$('.js-template-mobile-toggle').removeClass('active');
	    }
		});
	};


	//  hide mobile collapse menu
	var hrefclick = function(){

	};

	// Burger Menu
	var burgerMenu = function() {

		$('body').on('click', '.js-template-nav-toggle', function(event){
			if ( $('html').hasClass('mobile-menu-expanded') ) {
				$(this).removeClass('mobile-menu-expanded');
			} else {
				$(this).addClass('mobile-menu-expanded');
			}
			event.preventDefault();
		});

	};

	// Off Canvass
	var offCanvass = function() {

		if ( $('#template-offcanvass').length == 0 ) {
			if ( $('.template-nav-style-1').length > 0 ) {
				$('body').prepend('<div id="template-offcanvass" />');

				$('.template-link-wrap').each(function(){
					$('#template-offcanvass').append($(this).find('[data-offcanvass="yes"]').clone());
				})
				$('#template-offcanvass').find('.js-template-mobile-toggle').remove();
				$('#template-offcanvass, #template-page').addClass($('.template-nav-style-1').data('offcanvass-position'));
				$('#template-offcanvass').addClass('offcanvass-nav-style-1');
			}

			if ( $('.template-nav-style-2').length > 0 ) {
				$('body').prepend('<div id="template-offcanvass" />');

				$('.template-link-wrap').each(function(){
					$('#template-offcanvass').append($(this).find('[data-offcanvass="yes"]').clone());
				})
				$('#template-offcanvass').find('.js-template-mobile-toggle').remove();
				$('#template-offcanvass, #template-page').addClass($('.template-nav-style-2').data('offcanvass-position'));
				$('#template-offcanvass').addClass('offcanvass-nav-style-2');
			}
		}

		$('body').on('click', '.js-template-mobile-toggle', function(e){
			var $this = $(this);
			$this.toggleClass('active');
			$('html').toggleClass('mobile-menu-expanded');

		});

		if ( $(window).width() < 990 ) {
			$('#template-offcanvass ul li a:not(.dropdown-toggle)').click(function () {
				$('.js-template-mobile-toggle').removeClass('active');
				$('html').removeClass('mobile-menu-expanded');
			});
		}
		if ( $(window).width() < 990 ) {
			$('body, html').addClass('template-overflow');
		}

		$(window).resize(function(){
			if ( $(window).width() < 990 ) {
				$('body, html').addClass('template-overflow');
			}
			if ( $(window).width() > 987 ) {
				if ( $('html').hasClass('mobile-menu-expanded')) {
					$('.js-template-mobile-toggle').removeClass('active');
					$('html').removeClass('mobile-menu-expanded');
				}
			}
		});

	};


	// Magnific Popup

	var imagePopup = function() {
		$('.image-popup').magnificPopup({
			type: 'image',
			removalDelay: 10,
			titleSrc: 'title',
			gallery:{
				enabled:false
			}
		});
	};

	var matchHeightSet = function() {
		$('.matchheightclass').matchHeight();
	};



	// Window Scroll
	var windowScroll = function() {
		var lastScrollTop = 0;

		$(window).scroll(function(event){

		   	var header = $('.template-nav-style-1'),
				scrlTop = $(this).scrollTop();

			if ( scrlTop > 500 && scrlTop <= 2000 ) {
				header.addClass('navbar-fixed-top template-animated slideInDown');
			} else if ( scrlTop <= 500) {
				if ( header.hasClass('navbar-fixed-top') ) {
					header.addClass('navbar-fixed-top template-animated slideOutUp');
					setTimeout(function(){
						header.removeClass('navbar-fixed-top template-animated slideInDown slideOutUp');
					}, 100 );
				}
			}

		});
	};

    var smooth_Scroll = function() {
        var offset = $('.nt-navbar').outerHeight();
        var dataoffset = $('.nt-navbar').attr('data-scroll-offset');
        var dataspeed = $('.nt-navbar').attr('data-scroll-speed');
        var speed = dataspeed ? parseInt(dataspeed) : 500;
        var offset = dataoffset ? parseInt(dataoffset) : offset;
        var scroll = new SmoothScroll('a[href*="#"]', {
            ignore: '.wc-tabs a, .vc_tta-tab a, a.dropdown-toggle',
            header: null,
            topOnEmptyHash: false,
            speed: speed,
            speedAsDuration: false,
            durationMax: null,
            durationMin: null,
            clip: true,
            offset: offset,
            easing: 'easeInOutCubic',
            updateURL: false,
            popstate: false,
            emitEvents: true
        });
    }


	// Document on load.
	$(function(){

		fullHeight();
		ScrollNext();
		parallax();
		counter();
		mobileMenuOutsideClick();
		burgerMenu();
		imagePopup();
		matchHeightSet();
		offCanvass();
		hrefclick();
        smooth_Scroll();

	});

    if ($('#navbar-sticky').size()) {

        var $nav = $('#navbar-sticky');
        var $navTop = $nav.offset().top;
        var pegarNav = function () {
            var $scrollTop = $(window).scrollTop();
            if ($scrollTop < $navTop) {
                $nav.removeClass('sticky')
            } else {
                $nav.addClass('sticky')
            }
        };

        $(window).on('scroll',pegarNav);
    }


	// preloader
	$(window).load(function(){
		$('body').css('overflow-y', 'visible');
		$('.preloader-container').fadeOut('slow', function(){
			$(this).remove();
		});
	});

})(jQuery);

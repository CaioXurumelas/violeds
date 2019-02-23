jQuery.noConflict();

(function($) {

	"use strict";

	$(window).load(function() {
		setTimeout(function() {
			$('.load').fadeOut('slow');
		}, 700);
		$('#page').addClass('loaded');
	});

	// Add iOS class to body if iOS device
	if(navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
		$('body').addClass('ios-device');
	}

	/**
	 * Menu
	 */
	var toggleButton = $('.toggle-button'),
		menu = $('#navigation'),
		menuItem = $('.main-menu li'),
		header = $('#header'),
		headerStyle = header.attr('data-style'),
		html = $('html'),
		body = $('body');

	// Menu Toggle Button (Hamburger button)
	toggleButton.on('click', function() {
		
		$(this).toggleClass('button-open');
		menu.toggleClass('show-menu');

		if($(this).hasClass('button-open')) {

			/**
			 * If header is fixed, make header transparent to not hide menu items
			 */
			if( headerStyle == 'fixed' ) {
				setTimeout(function() {
					header.addClass('transparent');
				}, 400);
			} else {
				/* Prevent page scrolling */
				html.css({'position' : 'fixed', 'width' : '100%', 'overflow-y' : 'scroll'});
			}

		} else {

			if( headerStyle == 'fixed' ) {
				header.removeClass('transparent');
			} else {
				html.removeAttr('style');
			}

		}

		// Fade in social icons
		$('#navigation .social-sharing').toggleClass('visible');
	
		// Fade in menu items
		var length = menuItem.length,
			c = 1;

		setInterval(function() {
			if( c <= length ) {
				$('.main-menu li:nth-child('+ c +')').toggleClass('visible');
				c = c+1;
			}
		}, 70);

	});

	// Menu Drop Down
	$('#navigation li.menu-item-has-children > a').on('click', function(e) {
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});

	/**
	 * Load BX Slider
	 */
	$('.bxslider').bxSlider({
		auto: true,
		captions: true,
		adaptiveHeight: true
	});

	/**
	 * Responsive Videos
	 */
	$('.post-video, .videobg').fitVids();

	/**
	 * Jquery UI
	 */

	/* jQuery UI Tabs */
	if(!$('#header').hasClass('header-customizer')) {
		$('#tabs').tabs();
	} else {
		$('#tabs').css({position: 'relative'});
		$('#tabs div').css({position: 'absolute', top: 0, left: 0, background: '#fff'});
	}

	/* jQuery Accordion */
  	$('#accordion').accordion({ heightStyle: "content" });

  	/* Toggle */
	$('.toggle-title').click(function() {
		var toggle_id = $(this).attr('id');

		$('.' + toggle_id).slideToggle('slow');
	});

	/**
	 * Cart Drop Down
	 */
	// var cart = $('.cart-detail');

	// $('.cart, .cart-detail', '#header').hover(function() {
	// 	cart.stop().fadeIn();
	// }, function() {
	// 	cart.stop().fadeOut();
	// });

	/**
	 * Portfolio Isotope
	 */
	function resize() {
		var $portfolio = $('.grid');
		$portfolio.isotope('layout');
	}

	if($('body').hasClass('page-template-portfolio')) {
		var $portfolio = $('.grid');

		$portfolio.imagesLoaded(function() {

	        $portfolio.isotope({
	            itemSelector : '.item',
	        });

	        resize();

	    });

	    $('.filter a').on('click', function(){
	        var selector = jQuery(this).attr('data-filter');
	        $portfolio.isotope({ filter: selector });
	        return false;
	    });

	    $('.filter a').click(function() {
	    	if(!$(this).hasClass('selected') ) {
	    		$('.filter a').each(function() { $(this).removeClass('selected') });
	    		$(this).addClass('selected');
	    	}
	    });

		$(window).resize(function() {
			resize();
		});

		/**
	     * Portfolio Infinite Scroll
	     */
	    $portfolio.infinitescroll({
	        loading: {
	            finishedMsg: '',
	            img: '',
	            msg: '',
	            msgText: ''
	        },
	        navSelector  : "div.load-more",
	        nextSelector : "div.load-more a",
	        itemSelector : ".grid article.item",
	        behavior     : "twitter"
	    }, function(newElements) {
	        var $newElems = $( newElements );
	        $newElems.hide();
	        $newElems.imagesLoaded(function(){
	            $portfolio.isotope( 'appended', $newElems );
	        });
	    });
	}

    /**
     * Gallery Isotope
     */
     if($('#main').find('.gallery')) {
    	var $gallery = $(".gallery-standard");

		$gallery.imagesLoaded(function() {

	        $gallery.isotope({
	            itemSelector : '.col'
	        });

	        $gallery.isotope('layout');

	    });
	}

	/**
	 * Blog Isotope
	 */
	if($('.content').find('blog-grid')) {
		var $gridblog = $('.blog-grid');

		$gridblog.imagesLoaded(function() {

	        $gridblog.isotope({
	            itemSelector : 'article',
	            percentPosition: true,
				masonry: {
					columnWidth: '.item-sizer',
					gutter: '.gutter-sizer'
				}
	        });

	    });
	}

    /**
	 * Shop Isotope
	 */
	if($('.woocommerce').find('products-grid')) {
		var $shop = $('.products-grid');

		$shop.imagesLoaded(function() {

	        $shop.isotope({
	            itemSelector : '.product',
	            resizable: false, // disable normal resizing
   				layoutMode: 'fitRows'
	        });

	    });
	}

	/* Show Captions */
	$('.thumbnail').hover(function() {
		$(this).find('.caption').toggleClass('show-caption');
	});

	/**
	 * Justified Gallery
	 */
	var margin = 10,
		rowHeight = 300;

	margin = $('.gallery').attr('data-margin');
	rowHeight = $('.gallery').attr('data-rowheight');

    $('.justified-gallery').justifiedGallery({
		rowHeight : rowHeight,
	    margins : margin,
	    lastRow: 'justify'
	});

	/**
	 * Single Portfolio Post Fullwidth Image
	 */
	var entryContent =  $('.entry-content', '.single-portfolio'),
    	img = entryContent.find('img.alignnone'),
      	figure = entryContent.find('figure.alignnone'),
      	windowWidth = $(window).width();

	img.add(figure).each(function() {
		$(this).css({ 'max-width' : 'none', 'width': windowWidth, 'margin-left' : ( ( entryContent.width() / 2 ) - ( windowWidth / 2 ) ) });
	});

	$(window).resize(function() {
	    var windowWidth = $(window).width();

	    img.add(figure).each(function() {
	     	$(this).css({ 'max-width' : 'none', 'width' : windowWidth, 'margin-left' : ( ( entryContent.width() / 2 ) - ( windowWidth / 2 ) ) });
	    });

	});

	/**
	 * Lightbox 
	 */
	

		var
		
		activityIndicatorOn = function() {
			$( '<div id="imagelightbox-loading"><div></div></div>' ).appendTo( 'body' );
		},
		activityIndicatorOff = function() {
			$( '#imagelightbox-loading' ).remove();
		},

		// Overlay
		overlayOn = function() {
			$( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' );
		},
		overlayOff = function() {
			$( '#imagelightbox-overlay' ).remove();
		},

		// Close Button
		closeButtonOn = function( instance ) {
			$( '<button type="button" id="imagelightbox-close" title="Close"></button>' ).appendTo( 'body' ).on( 'click touchend', function(){ $( this ).remove(); instance.quitImageLightbox(); return false; });
		},
		closeButtonOff = function() {
			$( '#imagelightbox-close' ).remove();
		},

		// Arrows
		arrowsOn = function( instance, selector ) {
			var $arrows = $( '<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left chevron left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right chevron right"></button>' );

			$arrows.appendTo( 'body' );

			$arrows.on( 'click touchend', function( e )
			{
				e.preventDefault();

				var $this	= $( this ),
					$target	= $( selector + '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ),
					index	= $target.index( selector );

				if( $this.hasClass( 'imagelightbox-arrow-left' ) )
				{
					index = index - 1;
					if( !$( selector ).eq( index ).length )
						index = $( selector ).length;
				}
				else
				{
					index = index + 1;
					if( !$( selector ).eq( index ).length )
						index = 0;
				}

				instance.switchImageLightbox( index );
				return false;
			});
		},
		arrowsOff = function() {
			$( '.imagelightbox-arrow' ).remove();
		};

		// Instance A = Singular Lightbox
		var selectorA = 'a[data-imagelightbox="a"]';
		var instanceA = $( selectorA ).imageLightbox({
			onStart:		function() { overlayOn(); closeButtonOn( instanceA ); },
			onEnd:			function() { overlayOff(); closeButtonOff(); activityIndicatorOff(); },
			onLoadStart: 	function() { activityIndicatorOn(); },
			onLoadEnd:	 	function() {  activityIndicatorOff(); }
		});

		// Instance B = Gallery Lightbox
        var selectorB = 'a[data-imagelightbox="b"]';
		var instanceB = $( selectorB ).imageLightbox({
			onStart:		function() { overlayOn(); closeButtonOn( instanceB ); arrowsOn( instanceB, selectorB ); },
			onEnd:			function() { overlayOff(); closeButtonOff(); arrowsOff(); activityIndicatorOff(); },
			onLoadStart: 	function() { activityIndicatorOn(); },
			onLoadEnd:	 	function() {  activityIndicatorOff(); $( '.imagelightbox-arrow' ).css( 'display', 'block' ); }
		});
	

})(jQuery);
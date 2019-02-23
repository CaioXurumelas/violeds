jQuery.noConflict();

(function($) {
	"use strict";

	var template = $('#page_template');
		
	/* Portfolio */
	var pagesubtitle = $('.cmb2-id--cmb-page-subtitle'),
		portfoliooptions = $('#_cmb_portfolio_page_options'),
		portfolio_layout = $('.cmb2-id--cmb_portfolio-layout'),
		portfolio_categories = $('.cmb2-id--cmb-portfolio-categories'),
		showfilter = $('.cmb2-id--cmb-show-filter'),
		spacing = $('.cmb2-id--cmb-column-spacing'),
		postsperpage = $('.cmb2-id--cmb-posts-per-page'),
		enablepagenav = $('.cmb2-id--cmb-enable-post-nav'),
		pagenav = $('.cmb2-id--cmb-portfolio-nav'),
		showcategories = $('.cmb2-id--cmb-show-categories'),
		showoptions = $('#show-options'),
		itemhover = $('.cmb2-id--cmb-hover-options'),
		titlepos = $('.cmb2-id--cmb-title-pos'),
		hoverbgcolor = $('.cmb2-id--cmb-hover-bgcolor'),
		hoverbgcolorselect = $('.cmb2-id--cmb-hover-bgcolor select'),
		customhoverbgcolor = $('.cmb2-id--cmb-custom-hover-bgcolor'),
		customhovertextcolor = $('.cmb2-id--cmb-custom-hover-textcolor'),
		hoveropacity = $('.cmb2-id--cmb-hover-opacity'),
		hoverpadding = $('.cmb2-id--cmb-hover-padding'),
		hovereffects = $('.cmb2-id--cmb-hover-effects');

	portfoliooptions.hide();
	postsperpage.hide();
	enablepagenav.hide();
	pagenav.hide();
	showcategories.hide();
	itemhover.hide();
	titlepos.hide();
	hoverbgcolor.hide();
	hoverbgcolorselect.hide();
	hoveropacity.hide();
	hoverpadding.hide();
	hovereffects.hide();
	customhoverbgcolor.hide();
	customhovertextcolor.hide();

	/**
	 * Portfolio Page Options
	 */
	if( template.val() == 'portfolio.php' ) {
		portfoliooptions.show();
	}

	template.on('change', function() {
		if( this.value == 'portfolio.php' ) {
			portfoliooptions.show();
		} else {
			portfoliooptions.hide();
		}
	});

	hoverbgcolorselect.on('change', function() {
		if( this.value == 'custom' ) {
			customhoverbgcolor.show();
			customhovertextcolor.show();
		} else {
			customhoverbgcolor.hide();
			customhovertextcolor.hide();
		}
	});

	showoptions.on('click', function(e) {

		e.preventDefault();

		if( showoptions.hasClass('selected') ) {
			showoptions.text('Show More Options');
			showoptions.removeClass('selected');
			postsperpage.hide();
			enablepagenav.hide();
			pagenav.hide();
			showcategories.hide();
			itemhover.hide();
			titlepos.hide();
			hoverbgcolor.hide();
			hoverbgcolorselect.hide();
			hoveropacity.hide();
			hoverpadding.hide();
			hovereffects.hide();
			customhoverbgcolor.hide();
			customhovertextcolor.hide();
		} else {
			showoptions.text('Hide Options');
			showoptions.addClass('selected');
			postsperpage.show();
			enablepagenav.show();
			pagenav.show();
			showcategories.show();
			itemhover.show();
			titlepos.show();
			hoverbgcolor.show();
			hoverbgcolorselect.show();
			hoveropacity.show();
			hoverpadding.show();
			hovereffects.show();

			if( hoverbgcolorselect.val() == 'custom' ) {
				customhoverbgcolor.show();
				customhovertextcolor.show();
			} else {
				customhoverbgcolor.hide();
				customhovertextcolor.hide();
			}

		}
	});

})(jQuery);
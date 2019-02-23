<?php
	Header("Content-type: text/css");

	/* Page & Content Width */
	$page_width = get_theme_mod('page_width', 1240);

	/**
	 * Header 
	 */
	$header_height = (get_theme_mod('header_height', 150)) ? get_theme_mod('header_height', 150) : 150;
	$sticky_header = get_theme_mod('sticky_header', false);

	/**
	 * Colors
	 */
	$page_bg_color = get_theme_mod('page_bg_color', '#ffffff');
	$header_bg_color = get_theme_mod('header_bg_color', '#ffffff');
	$text_color = get_theme_mod('text_color', '#000000');
	$link_color = get_theme_mod('link_color', '#0000000');
	$link_hover_color = get_theme_mod('link_hover_color', '#777777');
	$divider_color = get_theme_mod('divider_color', '#eaeaea');

	/* Pages */
	$content_link_color = get_theme_mod('content_link_color', '#999999');
	$content_link_hover_color = get_theme_mod('content_link_hover_color', '#000000');

	/* Headings */
	$headings_color = get_theme_mod('headings_color', '#000000');
	$page_subtitle_color = get_theme_mod('page_subtitle_color', '#bbbbbb');
	$post_title_hover_color = get_theme_mod('post_title_hover_color', '#777777');

	/* Menu */
	$menu_bg_color = get_theme_mod('menu_bg_color', '#ffffff');
	$menu_link_color = get_theme_mod('menu_link_color', '#0000000');
	$menu_link_hover_color = get_theme_mod('menu_link_hover_color', '#a5a5a5');
	$dd_link_color = get_theme_mod('dd_link_color', '#a5a5a5');
	$dd_link_hover_color = get_theme_mod('dd_link_hover_color', '#000000');

	/* Sidebar */
	$widget_title_color = get_theme_mod('sidebar_title_color', '#999999');
	$sidebar_link_color = get_theme_mod('sidebar_link_color', '#000000');
	$sidebar_link_hover_color = get_theme_mod('sidebar_link_hover_color', '#aeaeae');

	/* Footer */
	$footer_bg_color = get_theme_mod('footer_bg_color', '#f6f6f6');
	$footer_text_color = get_theme_mod('footer_text_color', '#000000');
	$footer_link_color = get_theme_mod('footer_link_color', '#000000');
	$footer_link_hover_color = get_theme_mod('footer_link_hover_color', '#777777');

	/* Portfolio Filter */
	$portfolio_filter_link_color = get_theme_mod('portfolio_filter_link_color', '#777777');
	$portfolio_filter_link_hover_color = get_theme_mod('portfolio_filter_link_hover_color', '#000000');

	/**
	 * Fonts
	 */
	$primary_font = get_theme_mod('primary_font', 'Open Sans');
	$secondary_font = get_theme_mod('secondary_font', 'Lato');

	/* Body/Page */
	$body_font = get_theme_mod('body_font', 'primary');

	if($body_font == 'primary') {
		$body_font = $primary_font;
	} else {
		$body_font = $secondary_font;
	}

	$font_size = get_theme_mod('font_size', 15);
	$body_font_weight = get_theme_mod('body_font_weight', 300);
	$body_text_letter_spacing = get_theme_mod('body_text_letter_spacing', 0);

	/* Menu/Nav */
	$menu_font = get_theme_mod('menu_font', 'secondary');

	if($menu_font == 'primary') {
		$menu_font = $primary_font;
	} else {
		$menu_font = $secondary_font;
	}

	$menu_font_size = get_theme_mod('menu_font_size', 28);
	$responsive_menu_font_size = $menu_font_size - 6;
	$menu_font_weight = get_theme_mod('menu_font_weight', 300);
	$menu_text_transform = get_theme_mod('menu_text_transform', 'uppercase');
	$menu_text_letter_spacing = get_theme_mod('menu_text_letter_spacing', 4);

	/* Menu Drop Down Links */
	$dd_font_size = get_theme_mod('dd_font_size', 13);
	$dd_font_weight = get_theme_mod('dd_font_weight', 400);
	$dd_text_transform = get_theme_mod('dd_text_transform', 'uppercase');
	$dd_text_letter_spacing = get_theme_mod('dd_text_letter_spacing', 4);

	/* Page/Post Title */
	$page_title_size = get_theme_mod('page_title_size', 36);
	$post_title_size = get_theme_mod('post_title_size', 28);

	/* Headings */
	$headings_font = get_theme_mod('heading_font', 'primary');

	if($headings_font == 'primary') {
		$headings_font = $primary_font;
	} else {
		$headings_font = $secondary_font;
	}

	$headings_font_weight = get_theme_mod('headings_font_weight', 300);
	$headings_text_transform = get_theme_mod('headings_text_transform', 'none');
	$headings_letter_spacing = get_theme_mod('headings_letter_spacing', 0);
	$h1_font_size = get_theme_mod('h1_font_size', 36);
	$h2_font_size = get_theme_mod('h2_font_size', 28);
	$h3_font_size = get_theme_mod('h3_font_size', 24);
	$h4_font_size = get_theme_mod('h4_font_size', 22);
	$h5_font_size = get_theme_mod('h5_font_size', 18);
	$h6_font_size = get_theme_mod('h6_font_size', 16);

	/* Sidebar/Widgets */
	$widget_title_font = get_theme_mod('sidebar_title_font', 'primary');

	if($widget_title_font == 'primary') {
		$widget_title_font = $primary_font;
	} else {
		$widget_title_font = $secondary_font;
	}

	$widget_title_size = get_theme_mod('sidebar_title_size', 12);
	$widget_title_font_weight = get_theme_mod('sidebar_title_font_weight', 400);
	$widget_title_text_transform = get_theme_mod('sidebar_title_text_transform', 'uppercase');
	$widget_title_letter_spacing = get_theme_mod('sidebar_title_letter_spacing', 3);

	/* Portfolio Filter */
	$filter_font = get_theme_mod('filter_font', 'secondary');

	if($filter_font == 'primary') {
		$filter_font = $primary_font;
	} else {
		$filter_font = $secondary_font;
	}

	$filter_font_size = get_theme_mod('filter_font_size', 12);
	$filter_font_weight = get_theme_mod('filter_font_weight', 300);
	$filter_text_transform = get_theme_mod('filter_text_transform', 'uppercase');
	$filter_letter_spacing = get_theme_mod('filter_letter_spacing', 3);

	/* Portfolio Item Titles */
	$portfolio_item_title_font = get_theme_mod('portfolio_item_title_font', 'primary');

	if($portfolio_item_title_font == 'primary') {
		$portfolio_item_title_font = $primary_font;
	} else {
		$portfolio_item_title_font = $secondary_font;
	}

	$portfolio_item_title_font_size = get_theme_mod('portfolio_item_title_font_size', 12);
	$portfolio_item_title_font_weight = get_theme_mod('portfolio_item_title_font_weight', 600);
	$portfolio_item_title_text_transform = get_theme_mod('portfolio_item_title_text_transform', 'uppercase');
	$portfolio_item_title_letter_spacing = get_theme_mod('portfolio_item_title_letter_spacing', 3);

	/* Portfolio Item Categories */
	$portfolio_item_cat_font = get_theme_mod('portfolio_item_cat_font', 'primary');

	if($portfolio_item_cat_font == 'primary') {
		$portfolio_item_cat_font = $primary_font;
	} else {
		$portfolio_item_cat_font = $secondary_font;
	}

	$portfolio_item_cat_font_size = get_theme_mod('portfolio_item_cat_font_size', 12);
	$portfolio_item_cat_font_weight = get_theme_mod('portfolio_item_cat_font_weight', 400);
	$portfolio_item_cat_text_transform = get_theme_mod('portfolio_item_cat_text_transform', 'capitalize');
	$portfolio_item_cat_letter_spacing = get_theme_mod('portfolio_item_cat_letter_spacing', 2);

	/* Footer Font */
	$footer_font = get_theme_mod('footer_font', 'secondary');

	if($footer_font == 'primary') {
		$footer_font = $primary_font;
	} else {
		$footer_font = $secondary_font;
	}

	$footer_font_size = get_theme_mod('footer_font_size', 11);
	$footer_font_weight = get_theme_mod('footer_font_weight', 400);
	$footer_text_transform = get_theme_mod('footer_text_transform', 'uppercase');
	$footer_letter_spacing = get_theme_mod('footer_letter_spacing', 3);

	/**
	 * Portfolio
	 */
	$portfolio_padding = get_theme_mod('portfolio_padding', '20') / 2;
	$hover_padding = get_theme_mod('hover_padding', 0);

	/* Get custom hover color for portfolio posts and convert to rgba */
	$opacity = get_theme_mod('hover_opacity', 0.8);
	$rgb = cg_hex2rgb(get_theme_mod('custom_hover_bg_color', '#000000'), $opacity);
	
	$custom_hover_bg_color = sprintf('rgba(%s, %s, %s, %s)', $rgb[0], $rgb[1], $rgb[2], $rgb[3]);

	$custom_hover_text_color = get_theme_mod('custom_hover_text_color', '#ffffff');
	if(!$custom_hover_text_color) $custom_hover_text_color = '#ffffff';

	/** 
	 * Get Shop Custom Hover Color
	 */
	// $shop_hover_opacity = (get_theme_mod('shop_hover_opacity', 0.9)) ? get_theme_mod('shop_hover_opacity', 0.9) : 0.9;
	// $rgb = hex2rgb( get_theme_mod('shop_custom_hover_bg_color', '#000000'), $shop_hover_opacity);
	// $shop_custom_hover_bg_color = sprintf('rgba(%s, %s, %s, %s)', $rgb[0], $rgb[1], $rgb[2], $rgb[3]);

	// $shop_custom_hover_text_color = get_theme_mod('shop_custom_hover_text_color', '#ffffff');
	// if(!$shop_custom_hover_text_color) $shop_custom_hover_text_color = '#ffffff';

?>
body {
	background-color: <?php echo $page_bg_color; ?>;
}

body,
p {
	font-family: '<?php echo $body_font; ?>';
	font-size: <?php echo $font_size; ?>px;
	font-weight: <?php echo $body_font_weight; ?>;
	letter-spacing: <?php echo $body_text_letter_spacing; ?>px;
	color: <?php echo $text_color; ?>;
}

h1,
h2,
h3,
h4,
h5,
h6,
.page-title h3 {
	font-family: '<?php echo $headings_font; ?>';
	font-weight: <?php echo $headings_font_weight; ?>;
	text-transform: <?php echo $headings_text_transform; ?>;
	letter-spacing: <?php echo $headings_letter_spacing; ?>px;
	color: <?php echo $headings_color; ?>;
}

.page-title p {
	font-family: '<?php echo $headings_font; ?>';
	font-weight: <?php echo $headings_font_weight; ?>;
	font-weight: <?php echo $headings_font_weight; ?>;
	letter-spacing: <?php echo $body_text_letter_spacing; ?>px;
}

.page-title p.lead {
	color: <?php echo $page_subtitle_color; ?>;
}

a { color: <?php echo $link_color; ?>; }
a:hover { color: <?php echo $link_hover_color; ?>; }

p a { color: <?php echo $content_link_color; ?>; }
p a:hover { color: <?php echo $content_link_hover_color; ?>; }

h1 { font-size: <?php echo $h1_font_size; ?>px; }
h2 { font-size: <?php echo $h2_font_size; ?>px; }
h3 { font-size: <?php echo $h3_font_size; ?>px; }
h4 { font-size: <?php echo $h4_font_size; ?>px; }
h5 { font-size: <?php echo $h5_font_size; ?>px; }
h6 { font-size: <?php echo $h6_font_size; ?>px; }

.container { max-width: <?php echo $page_width; ?>px; }

/**
 * Header 
 */
#header #logo,
#header .menu-toggle {
	height: <?php echo $header_height; ?>px;
}

#header {
	height: <?php echo $header_height; ?>px;
	background-color: <?php echo $header_bg_color; ?>;
}

<?php if($sticky_header == true) { ?>
#header { 
	position: fixed; 
	z-index: 99999;
	background-color: <?php echo $header_bg_color; ?>;
}
#page {
	margin-top: <?php echo $header_height; ?>px;
}
<?php } else { ?>
#header {
	position: static;
}
#page {
	margin-top: 0;
}
<?php } ?>

/**
 * Menu 
 */
#navigation,
#navigation footer {
	background-color: <?php echo $menu_bg_color; ?>;
}

#menu-right {
	height: <?php echo $header_height; ?>px;
}

.main-menu li a {
	font-family: '<?php echo $menu_font; ?>';
	font-size: <?php echo $menu_font_size; ?>px;
	font-weight: <?php echo $menu_font_weight; ?>;
	letter-spacing: <?php echo $menu_text_letter_spacing; ?>px;
	text-transform: <?php echo $menu_text_transform; ?>;
	color: <?php echo $menu_link_color; ?>;
}

.main-menu li a:hover {
	color: <?php echo $menu_link_hover_color; ?>;
}

.main-menu li li a {
	font-size: <?php echo $dd_font_size; ?>px;
	font-weight: <?php echo $dd_font_weight; ?>;
	letter-spacing: <?php echo $dd_text_letter_spacing; ?>px;
	text-transform: <?php echo $dd_text_transform; ?>;
	color: <?php echo $dd_link_color; ?>;
}

.main-menu li li a:hover {
	color: <?php echo $dd_link_hover_color; ?>;
}

/**
 * Post 
 */
.blog article,
.search article,
.archive article {
	border-bottom: 1px solid <?php echo $divider_color; ?>;
}

h3.post-title { font-size: <?php echo $post_title_size; ?>px; }

h3.post-title a {
	color: <?php echo $headings_color; ?>;
}

h3.post-title a:hover {
	color: <?php echo $post_title_hover_color; ?>;
}

.page-title h1,
.page-title h3 { font-size: <?php echo $page_title_size; ?>px; }

/**
 * Sidebar
 */
.sidebar h3.widgettitle {
	font-family: '<?php echo $widget_title_font; ?>';
	font-size: <?php echo $widget_title_size; ?>px;
	font-weight: <?php echo $widget_title_font_weight; ?>;
	text-transform: <?php echo $widget_title_text_transform; ?>;
	letter-spacing: <?php echo $widget_title_letter_spacing; ?>px;
	color: <?php echo $widget_title_color; ?>
}

.sidebar a {
	color: <?php echo $sidebar_link_color; ?>;
}

.sidebar a:hover {
	color: <?php echo $sidebar_link_hover_color; ?>;
}

.widget ul li {
	border-bottom: 1px solid <?php echo $divider_color; ?>;
}

.recent-posts .widget-post-meta .post-date { color: <?php echo $content_link_color; ?>; }

/**
 * Portfolio
 */
/* Item Title */
.item h3 {
	font-family: '<?php echo $portfolio_item_title_font; ?>';
	font-size: <?php echo $portfolio_item_title_font_size; ?>px;
	font-weight: <?php echo $portfolio_item_title_font_weight; ?>;
	letter-spacing: <?php echo $portfolio_item_title_letter_spacing; ?>px;
	text-transform: <?php echo $portfolio_item_title_text_transform; ?>
}

/* Item Categories */
.terms {
	font-family: '<?php echo $portfolio_item_cat_font; ?>';
	font-size: <?php echo $portfolio_item_cat_font_size; ?>px;
	font-weight: <?php echo $portfolio_item_cat_font_weight; ?>;
	letter-spacing: <?php echo $portfolio_item_cat_letter_spacing; ?>px;
	text-transform: <?php echo $portfolio_item_cat_text_transform; ?>
}

/* Filter */
.filter ul li a {
	font-family: '<?php echo $filter_font; ?>';
	font-size: <?php echo $filter_font_size; ?>px;
	font-weight: <?php echo $filter_font_weight; ?>;
	letter-spacing: <?php echo $filter_letter_spacing; ?>px;
	text-transform: <?php echo $filter_text_transform; ?>;
	color: <?php echo $portfolio_filter_link_color; ?>;
}

.filter ul li a:hover,
.filter ul li a.selected {
	color: <?php echo $portfolio_filter_link_hover_color; ?>;
}

/**
 * Footer
 */
#footer,
#footer p {
	font-family: '<?php echo $footer_font; ?>';
	font-size: <?php echo $footer_font_size; ?>px;
	font-weight: <?php echo $footer_font_weight; ?>;
	letter-spacing: <?php echo $footer_letter_spacing; ?>px;
	text-transform: <?php echo $footer_text_transform; ?>;	
}

#footer {
	background-color: <?php echo $footer_bg_color; ?>;
	color: <?php echo $footer_text_color; ?>;
}

#footer p,
#footer p.copyright {
	color: <?php echo $footer_text_color; ?>;
}

#footer a {
	color: <?php echo $footer_link_color; ?>;
}

#footer a:hover {
	color: <?php echo $footer_link_hover_color; ?>;
}

/**
 * WooCommerce
 */
.woocommerce a.remove {
	color: #333!important;
}

.woocommerce a.remove:hover {
	color: #999!important;
}

/**
 * Responsive
 */
@media only screen and ( max-width: 768px ) {
	.main-menu li a {
		font-size: <?php echo $responsive_menu_font_size; ?>px;
	}

	.page-title h1,
	.page-title h3 {
		font-size: <?php echo $page_title_size - 6; ?>px;
	}
	.page-title h3 span {
		font-size: <?php echo $page_title_size - 10; ?>px;
	}
}
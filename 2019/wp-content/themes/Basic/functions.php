<?php
/**
 * Basic theme functions and definitions
 *
 * @package Basic
 * @since Basic 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if(!isset($content_width)) {
	$content_width = 868;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since Basic 1.0
 */
function cg_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain('Basic', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	// Add title tag support
	add_theme_support('title-tag');

	// Add WooCommerce support
	add_theme_support('woocommerce');
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support('post-thumbnails', array('post', 'page', 'portfolio', 'product'));
	set_post_thumbnail_size(960, 500, true);

	add_image_size('cg_post', 868, 440, true);
	add_image_size('cg_grid', 500, 400, true);
	add_image_size('cg_fullwidth-grid', 1200, 800, true);
	add_image_size('cg_portfolio', 800, 800, false);
	add_image_size('cg_portfolio-grid', 600, 440, true);
	//add_image_size('cg_product', 550, 600, true);
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( 
		array( 
			'primary' => esc_html__('Primary Menu', 'Basic'),
			'footer' => esc_html__('Footer Menu', 'Basic')
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support('post-formats', array(
		'video', 'quote', 'link', 'gallery', 'status', 'audio'
	));

}
add_action('after_setup_theme', 'cg_setup');

/**
 * Enqueue scripts and styles.
 *
 * @since Basic 1.0
 */
function cg_enqueue_files() {

	/**
	 * Enqueue Stylesheets
	 */
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('cg-skin', admin_url('admin-ajax.php') . '?action=cg_dynamic_styles');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('justifiedGallery.min', get_template_directory_uri() . '/css/justifiedGallery.min.css');
	wp_enqueue_style('jquery.bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.1.2');

	/* User Generated CSS */
	$custom_css = get_theme_mod('custom_css', '');
	wp_add_inline_style('cg-skin', $custom_css);

	/**
	 * Enqueue Scripts
	 */
	if(is_single()) wp_enqueue_script('comment-reply');
	wp_enqueue_script('html5', get_template_directory_uri() . '/js/html5.js', array('jquery'), '3.7.3-pre', false);
	wp_script_add_data('html5', 'conditional', 'lt IE 9');

	wp_enqueue_script('jquery-ui.min', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '1.12.1', true);
	wp_enqueue_script('jquery.bxslider.min', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.1.2', true);
	wp_enqueue_script('jquery.fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '1.1', true);
	wp_enqueue_script('isotope.pkgd.min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '3.2.2', true);
	wp_enqueue_script('imagesloaded.pkgd.min', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '3.1.8', true);
	wp_enqueue_script('jquery.infinitescroll.min', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array('jquery'), '2.1.0', true);
	wp_enqueue_script('manual-trigger', get_template_directory_uri() . '/js/manual-trigger.js', array('jquery'), '2.0b2.110617', true);
	wp_enqueue_script('imagelightbox.min', get_template_directory_uri() . '/js/imagelightbox.min.js', array('jquery'), '', true);
	wp_enqueue_script('jquery.justifiedGallery.min', get_template_directory_uri() . '/js/jquery.justifiedGallery.min.js', array('jquery'), '3.6.1', true);
	wp_enqueue_script('cg-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);

}
add_action('wp_enqueue_scripts', 'cg_enqueue_files');

/**
 * Customizer additions
 */
require_once get_template_directory() . '/admin/customize.php';

/**
 * Load Custom Post Metaboxes
 */
require_once  get_template_directory() . '/admin/cmb/init.php';

/**
 * Register Widget Areas
 *
 * @since Basic 1.0
 */
function cg_widgets_init() {
	// Register widget locations/sidebars
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'Basic'),
		'id' => 'sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => esc_html__('Contact Page', 'Basic'),
		'id' => 'contact',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>'
	));

	if(class_exists('WooCommerce')) {
		register_sidebar(array(
			'name' => esc_html__('Shop', 'Basic'),
			'id' => 'shop',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
	}
}
add_action('widgets_init', 'cg_widgets_init');

/**
 * Add Favicon
 *
 * @since Basic 1.1
 */
function blog_favicon() {
	if(get_theme_mod('favicon')) { ?>
	<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('favicon')); ?>" />
	<?php }
}
add_action('wp_head', 'blog_favicon');

/**
 * Load Admin Javascript for Meta Boxes
 *
 * @since Basic 1.0
 */
function cg_admin_scripts() {
	wp_enqueue_script('cg-admin', get_template_directory_uri() . '/admin/js/admin.js', array('jquery'), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'cg_admin_scripts');

/**
 * Add custom meta tags to <head>
 * @since Basic 1.0.1
 */
function cg_add_meta_tags() {
	if(is_single() && has_post_thumbnail()) { ?>
	<meta property="og:image" content="<?php the_post_thumbnail_url(); ?>">
	<?php 
	}
}
add_action('wp_head', 'cg_add_meta_tags');

/**
 * Set custom query variables
 *
 * @since Basic 1.0
 */
function cg_query_vars($vars) {
	$vars[] = 'blog';
	return $vars;
}
add_filter('query_vars', 'cg_query_vars');

/**
 * Register Google Fonts
 *
 * @since Basic 1.0
 */
function cg_fonts_url() {
	$fonts_url = '';

	$primary_font = get_theme_mod('primary_font', 'Open Sans');
	$secondary_font = get_theme_mod('secondary_font', 'Lato');
	 
	/* Translators: If there are characters in your language that are not
	* supported by the chosen font, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$_primary_font = _x('on', $primary_font . ' font: on or off', 'Basic');
	 
	/* Translators: If there are characters in your language that are not
	* supported by the chosen font, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$_secondary_font = _x('on', $secondary_font . ' font: on or off', 'Basic');
	 
	if('off' !== $_primary_font || 'off' !== $_secondary_font) {
		$font_families = array();
		 
		if('off' !== $_primary_font) {
			$font_families[] = "{$primary_font}:300,300i,400,400i,600,600i,700,700i";
		}
		 
		if('off' !== $_secondary_font) {
			$font_families[] = "{$secondary_font}:300,300i,400,400i,600,600i,700,700i";
		}
		 
		$query_args = array(
			'family' => urlencode(implode('|', $font_families)),
			'subset' => urlencode('latin,latin-ext')
		);
		 
		$fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
	}
	 
	return esc_url_raw($fonts_url);
}

/**
 * Enqueue fonts stylesheet
 *
 * @since Basic 1.0
 */
function cg_enqueue_font_styles() {
	wp_enqueue_style('cg-fonts', cg_fonts_url(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'cg_enqueue_font_styles');

/**
 * Puts custom style options into it's own .css file and loads it
 *
 * @since Basic 1.0
 */
function cg_dynamic_styles() {
	require('css/style.php');
	wp_die();
}
add_action('wp_ajax_cg_dynamic_styles', 'cg_dynamic_styles');
add_action('wp_ajax_nopriv_cg_dynamic_styles', 'cg_dynamic_styles');

/**
 * Portfolio Page Styles
 *
 * @since Basic 1.0
 */
function cg_page_styles() {

	global $post;

	if(is_home()) {
		if(get_option('page_for_posts')) {
			$id = get_option('page_for_posts');
		}
	} elseif(class_exists('WooCommerce') && is_shop()) {
		$id = get_option('woocommerce_shop_page_id');
	} else {
		if($post)
			$id = $post->ID;
	}

	if(isset($id)) {
		/* Portfolio Styles */
		$portfolio_padding = get_post_meta($id, '_cmb_column_spacing', true) / 2;
		$hover_opacity = get_post_meta($id, '_cmb_hover_opacity', true);
		$hover_padding = get_post_meta($id, '_cmb_hover_padding', true);
		$custom_hover_bg_color = get_post_meta($id, '_cmb_custom_hover_bgcolor', true);
		$custom_hover_text_color = get_post_meta($id, '_cmb_custom_hover_textcolor', true);

		$output = '';

		if(is_page_template('portfolio.php')) {
			$output .= '.grid {';
				$output .= 'margin: -' . $portfolio_padding . 'px -' . $portfolio_padding . 'px 0;';
			$output .= '}';

			if($portfolio_padding == 0 || $portfolio_padding == '') {
				$output .= '.fullwidth .grid {';
					$output .= 'margin: -' . $portfolio_padding . 'px ' . $portfolio_padding . 'px;';
				$output .= '}';
			} else {
				$output .= '.fullwidth .grid {';
					$output .= 'margin: -' . $portfolio_padding . 'px ' . $portfolio_padding . 'px 0;';
				$output .= '}';
			}

			$output .= '.item-content {';
				$output .= 'margin: ' . $portfolio_padding . 'px;';
			$output .= '}';

			if($hover_padding != 0) {
				$output .= '.item:hover .overlay {';
					$output .= 'margin: ' . $hover_padding . 'px;';
				$output .= '}';
			}

			$output .= '.overlay-white {';
				$output .= 'background: rgba(255, 255, 255, ' . $hover_opacity . ');';
			$output .= '}';

			$output .= '.overlay-black {';
				$output .= 'background: rgba(0, 0, 0, ' . $hover_opacity . ');';
			$output .= '}';

			$output .= '.overlay-custom {';
				$output .= 'background: rgba(' . cg_hex2rgb($custom_hover_bg_color, $hover_opacity) . ');';
			$output .= '}';

			$output .= '.title-custom, .title-custom h3, .title-custom a .terms {';
				$output .= 'color: ' . $custom_hover_text_color . ';';
			$output .= '}';
		}

		wp_add_inline_style('cg-skin', $output);

	} // end if($id)
	
}
add_action('wp_enqueue_scripts', 'cg_page_styles');

/**
 * Sets Page Title
 *
 * @since Basic 1.0
 */
// function cg_wp_title() {
// 	$title = '';

// 	if(is_front_page()) {
// 		if(get_bloginfo('description')) {
// 			$title = get_bloginfo('sitename') . ' | ' . get_bloginfo('description');
// 		} else {
// 			$title = get_bloginfo('sitename');
// 		}
// 	} elseif(is_home()) {
// 		$id = get_option('page_for_posts');
// 		$title = get_the_title($id) . ' | ' . get_bloginfo('sitename');
// 	} elseif(class_exists('WooCommerce') && is_shop()) {
// 		$id = get_option('woocommerce_shop_page_id');
// 		$title = get_the_title($id) . ' | ' . get_bloginfo('sitename');
// 	} else {
// 		$title = get_the_title() . ' | ' . get_bloginfo('sitename');
// 	} 
	
// 	return esc_attr($title);
// }
// add_filter('wp_title', 'cg_wp_title', 10, 2);

/**
 * Sets separator for title tag
 * 
 * @since Basic 1.0
 */
function cg_document_title_separator($sep) {
    $sep = "|";

    return $sep;
}
add_filter('document_title_separator', 'cg_document_title_separator');

/**
 * Add backwards compatability for title tag for older versions
 */
if(!function_exists('_wp_render_title_tag')) {
	function cg_render_title() {
		$title = '';

		if(is_front_page()) {
			if(get_bloginfo('description')) {
				$title = get_bloginfo('sitename') . ' | ' . get_bloginfo('description');
			} else {
				$title = get_bloginfo('sitename');
			}
		} elseif(is_home()) {
			$id = get_option('page_for_posts');
			$title = get_the_title($id) . ' | ' . get_bloginfo('sitename');
		} elseif(class_exists('WooCommerce') && is_shop()) {
			$id = get_option('woocommerce_shop_page_id');
			$title = get_the_title($id) . ' | ' . get_bloginfo('sitename');
		} else {
			$title = get_the_title() . ' | ' . get_bloginfo('sitename');
		}

		echo "<title>{$title}</title>";
	}
	add_action('wp_head', 'cg_render_title');
}

/**
 * Displays Page Titles/Heading
 *
 * @since Basic 1.0
 */
function cg_page_title() {

	if(is_home() && get_option('page_for_posts')) {
		$id = get_option('page_for_posts');
	} elseif(is_singular('post') && get_option('page_for_posts')) {
		$id = get_option('page_for_posts');
	} else {
		$id = get_the_ID();
	}

	$title = get_the_title($id);
	$subtitle = get_post_meta($id, '_cmb_page_subtitle', true);
	$show_title = get_post_meta($id, '_cmb_show_title', true);

	if((is_home() && !get_option('page_for_posts')) || (is_singular('post') && !get_option('page_for_posts'))) {
		$title = (get_theme_mod('blog_title', 'Our Blog')) ? get_theme_mod('blog_title', 'Our Blog') : 'Our Blog';
		$subtitle = (get_theme_mod('blog_subtitle', 'This is an optional subtitle.')) ? get_theme_mod('blog_subtitle', 'This is an optional subtitle.') : 'This is an optional subtitle.';
		$show_blog_title = null !== (get_theme_mod('show_blog_title', true)) ? get_theme_mod('show_blog_title', true) : true;

		$show_title = '';

		if($show_blog_title == true) {
			$show_title = 'show';
		}
	}

	if($show_title == 'show') {
		$output = '';
		$output .= '<div class="page-title">';
			$output .= '<div class="inner">';
				$output .= '<h1>' . $title . '</h1>';

				if($subtitle) {
					$output .= '<p class="lead">' . $subtitle . '</p>';
				}
			$output .= '</div>';

		$output .= '</div>';
	}

	if(isset($output))
		echo $output;
}

/**
 * Portfolio Item Filtering
 *
 * @since Basic 1.0
 */
function cg_portfolio_filter($echo = false, $categories = null) {

	$terms = get_terms(array('portfolio_category'), array('slug' => $categories));

	if(cg_active_plugin('basic-theme-portfolio/basic-theme-portfolio.php')) {
		$output = '<div class="filter">';
			$output .= '<ul>';
				$output .= '<li><a data-filter="*" class="selected">' . esc_html__('All', 'Basic') . '</a></li>';
				foreach($terms as $term => $value) {
					$output .= '<li><a data-filter=".portfolio_category-' . $value->slug . '">' . $value->name . '</a></li>';
				}
			$output .= '</ul>';
		$output .= '</div>';
	}

	if(isset($output)) {
		if($echo) {
			echo $output;
		} else {
			return $output;
		}
	}
}

/**
 * Single Post Social Sharing
 *
 * @since Basic 1.0
 */
function cg_share_post() {

	if(get_theme_mod('enable_social', true) == true) { 
		$id = get_post_thumbnail_id(get_the_ID());
		$image = wp_get_attachment_image_src( $id, 'post' );
		$link = urlencode(get_permalink());
		$shortlink = urlencode(wp_get_shortlink());
		?>
		<p class="share"><?php esc_html_e('Share', 'Basic'); ?></p>

		<ul class="social-sharing">
			<?php if(get_theme_mod('show_fb', true) == true) { ?>
			<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $link; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('show_twitter', true) == true) { ?>
			<li><a href="https://twitter.com/intent/tweet?source=4rapiddev&text=<?php the_title(); ?>&url=<?php echo esc_url($shortlink); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('show_gplus', true) == true) { ?>
			<li><a href="https://plus.google.com/share?url=<?php echo esc_url($link); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('show_linkedin', true) == true) { ?>
			<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($link); ?>&title=<?php the_title(); ?>&summary=<?php if(has_excerpt()) { esc_html(get_the_excerpt()); } ?>&source=" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod( 'show_pinterest', true) == true) { ?>
			<li><a href="https://pinterest.com/pin/create/button/?url=<?php echo esc_url($link); ?>&media=<?php echo esc_url( $image[0] ); ?>&description=<?php the_title(); ?>" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('show_reddit', true) == true) { ?>
			<li><a href="http://reddit.com/submit?url=<?php echo esc_url($link); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-reddit"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('show_delicious', true) == true) { ?>
			<li><a href="http://www.delicious.com/save?v=5&noui&jump=close&url=<?php echo esc_url($link); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-delicious"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('show_stumbleupon', true) == true) { ?>
			<li><a href="http://www.stumbleupon.com/submit?url=<?php echo esc_url($link); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-stumbleupon"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('show_tumblr', true) == true) { ?>
			<li><a href="http://www.tumblr.com/share/link?url=<?php echo $link; ?>" target="_blank"><i class="fa fa-tumblr"></i></a></li>
			<?php } ?>
		</ul>

	<?php 
	}
}

/**
 * Shows social sharing, tags, author info and post pagination after each single post
 *
 * @since Basic 1.0
 */
if(!function_exists('cg_after_post')) {
	function cg_after_post() {
		if(is_single() && (get_theme_mod('enable_social', true) == true || get_theme_mod('show_tags', false) == true)) { ?>
		<div class="row sharing-tags">
			<div class="col six">
				<?php cg_share_post(); ?>
			</div>

			<div class="col six">
				<?php
				$show_tags = get_theme_mod('show_tags', false);
				if($show_tags && has_tag()) { ?>
				<div class="post-tags">
					<p class="tags-title"><?php esc_html_e('Tags', 'Basic'); ?>:</p>
					<?php the_tags('', ' '); ?>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php } ?>

		<?php if(is_single() && get_the_author_meta('description')):
			get_template_part('author-bio');
		endif;

		/* Single Post Post Navigation */
		$show_post_nav = get_theme_mod('show_post_nav', true);
		$prev_post = get_previous_post();
		$next_post = get_next_post();

		if($show_post_nav == true && is_single()) { ?>

			<div class="row single-post-nav">
				<?php if(!empty($prev_post)): ?>
				<div class="col six previous-post">
					<a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
						<div class="prev-post-text">
							<span>&larr; <?php esc_html_e('Previous Post', 'Basic'); ?></span>
							<?php echo esc_html(get_the_title($prev_post->ID)); ?>
						</div>
					</a>
				</div>
				<?php endif;

				if(!empty($next_post)): ?>
				<div class="col six next-post">
					<a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
						<div class="next-post-text">
							<span><?php esc_html_e('Next Post', 'Basic'); ?> &rarr;</span>
							<?php echo esc_html(get_the_title($next_post->ID)); ?>
						</div>
					</a>
				</div>
				<?php endif; ?>
			</div>

		<?php }
	}
}

/**
 * Customize <!--more--> tag
 *
 * @since Basic 1.0
 */
function cg_modify_read_more_link() {
	$read_more_text = get_theme_mod('read_more', 'Read More');

    return '<a class="more-link" href="' . esc_url(get_permalink()) . '">' . esc_html($read_more_text) . '</a>';
}
add_filter('the_content_more_link', 'cg_modify_read_more_link');

/**
 * Display Comments
 *
 * @since Basic 1.0
 */
function cg_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	global $post; ?>
	
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

		<div class="comment-content">

			<div class="gravatar">
				<?php echo get_avatar($comment, $size = '70', $default = ''); ?>
			</div>
			
			<div class="comment-body">
				<div class="comment-heading">	
					<span class="comment-author"><?php printf('%s', get_comment_author_link()) ?></span> <?php edit_comment_link(esc_html(__('(Edit)', 'Basic')), ' ', ''); ?><br />
					<span class="comment-date"><?php comment_date('F jS, Y'); ?> <?php if(comments_open($post->ID)) { echo '&middot; '; } ?><span class="reply"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></span>
				</div>
				
				<div class="comment-text">
					<?php comment_text(); ?>

					<?php if($comment->comment_approved == '0'): ?>
						<span class="unapproved"><?php esc_html_e('Your comment is awaiting moderation.', 'Basic'); ?></span>
					<?php endif; ?>
				</div>

			</div>

		</div>

	</li>

	<?php
}

/**
 * Blog & Portfolio Pagination
 *
 * @since Basic 1.0
 */
function cg_page_navigation($type = 'blog', $page_id = '') {

	/* For portfolio only */
	$enable_post_nav = false;

	if($type == 'blog') {
		$nav = get_theme_mod('post_nav', 'standard');
		$next = get_theme_mod('next_text', 'Next Page &rarr;');
		$previous = get_theme_mod('previous_text', '&larr; Previous Page');
	} elseif($type == 'portfolio') {
		$nav = get_theme_mod('portfolio_post_nav', 'default');

		if($page_id) {

			$enable_post_nav = get_post_meta($page_id, '_cmb_enable_post_nav', true);

			$nav_type = get_post_meta($page_id, '_cmb_portfolio_nav', false);

			foreach($nav_type as $type) {
				$nav = $type;
			}
		}

		$next = get_theme_mod('portfolio_next_text', 'Next Page &rarr;');
		$previous = get_theme_mod('portfolio_previous_text', '&larr; Previous Page');
	}

	if($type == 'blog' || $enable_post_nav == true) {
		if($nav == 'default') {
			if(get_previous_posts_link() || get_next_posts_link()) { ?>
			<div class="load-more"><?php echo get_next_posts_link('Load More'); ?></div>
		<?php }
		} elseif($nav == 'standard') {
			if(get_previous_posts_link() || get_next_posts_link()) { ?>
			<nav class="pagination">
				<div class="previous-page"><?php previous_posts_link($previous); ?></div>
				<div class="next-page"><?php next_posts_link($next); ?></div>
			</nav>
		<?php }
		} elseif($nav == 'numbered') {
			if(get_previous_posts_link() || get_next_posts_link()) {
				the_posts_pagination(array(
					'prev_text' => '&larr;',
					'next_text' => '&rarr;',
				));
			}
		}
	}

}

/**
 * Customize WordPress Gallery
 *
 * @since Basic 1.0
 */
function cg_gallery($output, $atts) {
    global $post;

    if(isset( $atts['orderby'])) {
        $atts['orderby'] = sanitize_sql_orderby( $atts['orderby']);
        if(!$atts['orderby'])
            unset($atts['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'columns' => 3,
        'include' => '',
        'exclude' => '',
        'layout' => 'grid', // grid, masonry, justified
        'padding' => '30',
        'lightbox' => 'true',
        'rowheight' => 300 // row height for justified gallery only
    ), $atts));

    $column_class = '';

    if($layout != 'justified') {
	    if( $columns == 1 ) {
	    	$columns = 'one-column';
	    } elseif($columns == 2) {
	    	$columns = 'two-column';
	    } elseif($columns == 3) {
	    	$columns = 'three-column';
	    } elseif($columns == 4) {
	    	$columns = 'four-column';
	    } elseif($columns == 5) {
	    	$columns = 'five-column';
	    } elseif($columns == 6) {
	    	$columns = 'six-column';
	    } elseif($columns == 7) {
	    	$columns = 'seven-column';
	    } elseif($columns == 8) {
	    	$columns = 'eight-column';
	    } elseif($columns == 9) {
	    	$columns = 'nine-column';
	    }
	}

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if(empty($attachments)) return '';

    $output = '';

    if(!empty( $padding ) || $padding == 0) {

    	if($layout != 'justified') {
    		$padding = intval($padding / 2);
    	}

    	$output .= '<style type="text/css">';

    	if($layout != 'justified') {
	    	if($columns != 'one-column') {
		    	$output .= '.gallery { margin: -' . esc_html($padding) . 'px -' . esc_html($padding) . 'px 15px -' . esc_html($padding) . 'px; }';
		    	$output .= '.gallery .thumbnail { padding: ' . esc_html($padding) . 'px; width: calc(100% - ' . esc_html($padding) * 2 . 'px); }';
		    } else {
		    	$output .= '.gallery { margin: -' . esc_html($padding) . 'px 0 0 0; }';
		    	$output .= '.gallery .thumbnail { padding: ' . esc_html($padding) . 'px 0; }';
		    }
		} else {
			$output .= '.justified-gallery { margin: -' . esc_html($padding) . 'px -' . esc_html($padding) . 'px 0; }';
		}
    	$output .= '</style>';

    }

    $class = 'gallery-standard';
    $data_margin = '';

    if($layout == 'justified') {
    	$class = 'justified-gallery';
    	$data_margin = " data-margin=\"" . esc_attr($padding) . "\" data-rowheight=\"" . esc_attr($rowheight) . "\"";
    }

    $output .= "<div class=\"gallery " . esc_attr($class) . " " . esc_attr($columns) . "\"" . $data_margin . ">\n";

    foreach ($attachments as $id => $attachment) {
        
        $thumb_size = 'cg_portfolio-grid';

        if($layout == 'justified') {
        	$thumb_size = 'cg_fullwidth-grid';
        } elseif( $layout == 'masonry' ) {
        	$thumb_size = 'cg_portfolio';
        } else {
        	$thumb_size = 'cg_portfolio-grid';
        }
        
        if($columns == 'one-column') {
        	$thumb_size = 'full';
        }

        $img = wp_get_attachment_image_src($id, $thumb_size);
        $img_full = wp_get_attachment_image_src($id, 'full');

        if($lightbox == 'true') {
        	$data = "data-imagelightbox=\"b\"";
        }

        if($layout != 'justified'):
			$output .= "<div class=\"col\">\n";
				$output .= "<div class=\"thumbnail\">\n";
		endif;

				if($lightbox == 'true') {
			        $output .= "<a href=\"".esc_url($img_full[0])."\" {$data}>";
			    }

        			$output .= "<img src=\"".esc_url($img[0])."\" style=\"float:left;\" alt=\"\" />\n";
        			
        			if($attachment->post_excerpt) {
	        			$output .= "<span class=\"caption\">" . esc_html($attachment->post_excerpt) . "</span>";
	        		}

		        if($lightbox == 'true') {
			        $output .= "</a>";
		        }

		if($layout != 'justified') :
				$output .= "</div>\n";
			$output .= "</div>\n";
		endif;
    }

    $output .= "</div>\n";

    return $output;
}
add_filter('post_gallery', 'cg_gallery', 10, 2);

/**
 * Custom Metaboxes for Pages/Posts
 *
 * @since Basic 1.0
 */
function cg_metabox() {
	$prefix = '_cmb_';

	$default_portfolio_layout = get_theme_mod('portfolio_layout', 'default');
	$column_spacing = get_theme_mod('portfolio_padding', 30);
	$posts_per_page = get_theme_mod('portfolio_posts_per_page', 9);
	$enable_post_nav = get_theme_mod('enable_post_nav', true);
	$post_nav_type = get_theme_mod('portfolio_post_nav', 'default');
	$show_filter = get_theme_mod('show_filter', true);
	$title_pos = get_theme_mod('title_pos', 'hover');
	$show_categories = get_theme_mod('show_item_categories', true);
	$hover_bg_color = get_theme_mod('hover_bg_color', 'white');
	$custom_hover_bgcolor = get_theme_mod('custom_hover_bg_color', '#000000');
	$custom_hover_text_color = get_theme_mod('custom_hover_text_color', '#ffffff');
	$hover_opacity = get_theme_mod('hover_opacity', 0.9);
	$hover_padding = get_theme_mod('hover_padding', 0);
	$hover_effects = get_theme_mod('hover_effects');
	$allowed_html = array(
		'br' => array(),
		'strong' => array(
			'class' => array()
		),
		'em' => array(
			'class' => array()
		),
		'b' => array(
			'class' => array()
		),
		'i' => array(
			'class' => array()
		),
		'a' => array(
			'class' => array(),
			'href' => array(),
			'target' => array()
		),
		'span' => array(
			'class' => array()
		)
	);

	$effects = '';

	if($hover_effects) {
		$effects = array();

		foreach($hover_effects as $effect) {
			$effects[] = $effect;
		}
	}

	/* Get portfolio categories */
	$categories = get_categories(array('taxonomy' => 'portfolio_category', 'hide_empty' => false));
	$portfolio_cats = array();

	foreach( $categories as $category ) {
		$portfolio_cats[$category->slug] = $category->name;
	}

	/* Default portfolio page title/intro */
	$portfolio_intro = "We are <strong>Basic</strong>.<br />\r\n<span>Uncomplicated digital design for complicated times.</span>";

	/* 
	 * Make sure if following options are not saved in DB to set them 
	 * to empty/false instead of pulling defaults from Customizer
	 */
	$id = isset($_GET['post']) ? $_GET['post'] : false;

	if($id) {

		if(!get_post_meta($id, '_cmb_enable_post_nav', true)) {
			$enable_post_nav = false;
		}

		if(!get_post_meta($id, '_cmb_portfolio_intro', true)) {
			$portfolio_intro = '';
		}

		if(!get_post_meta($id, '_cmb_show_filter', true)) {
			$show_filter = false;
		}

		if(!get_post_meta($id, '_cmb_show_categories', true)) {
			$show_categories = false;
		}
	}

	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'page_oPage_Optionsptions',
		'title'         => esc_html__( 'Page Options', 'Basic' ),
		'object_types'  => array( 'page', 'portfolio' ), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	));

	$cmb_demo->add_field( array(
        'name'    => esc_html__( 'Show Title', 'Basic' ),
        //'desc'    => __( 'field description (optional)', 'cmb' ),
        'id'      => $prefix . 'show_title',
        'type'    => 'select',
        'options' => array(
            'show' => esc_html__( 'Show', 'Basic' ),
            'hide'   => esc_html__( 'Hide', 'Basic' )
        ),
    ) );

    $cmb_demo->add_field( array(
        'name'    => esc_html__( 'Page Subtitle', 'Basic' ),
        //'desc'    => __( 'field description (optional)', 'cmb' ),
        'id'      => $prefix . 'page_subtitle',
        'type'    => 'textarea_small'
    ) );

	/**
	 * Portfolio Page Options
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'portfolio_page_options',
		'title'         => esc_html__( 'Portfolio Options', 'Basic' ),
		'object_types'  => array( 'page' ), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );

	$cmb_demo->add_field( array(
        'name'    => esc_html__( 'Portfolio Title / Intro', 'Basic' ),
        'desc'    => esc_html__( 'Portfolio page title/welcome message. The following HTML tags are allowed: span, br, strong, b, i, em, a.', 'Basic' ),
        'id'      => $prefix . 'portfolio_intro',
        'default' => wp_kses($portfolio_intro, $allowed_html),
        'type'    => 'textarea_small'
    ) );

	$cmb_demo->add_field( array(
        'name'    => esc_html__( 'Layout', 'Basic' ),
        'id'      => $prefix . 'portfolio_layout',
        'type'    => 'select',
        'default' => esc_html($default_portfolio_layout),
        'options' => array(
            '2col' => esc_html__( '2 Column', 'Basic' ),
            'default' => esc_html__( '3 Column', 'Basic' ),
            '4col' => esc_html__( '4 Column', 'Basic' ),
            '5col' => esc_html__( '5 Column', 'Basic' ),

            '2colfullwidth' => esc_html__( '2 Column Fullwidth', 'Basic' ),
            '3colfullwidth' => esc_html__( '3 Column Fullwidth', 'Basic' ),
            '4colfullwidth' => esc_html__( '4 Column Fullwidth', 'Basic' ),
            '5colfullwidth' => esc_html__( '5 Column Fullwidth', 'Basic' ),

            '2colgrid' => esc_html__( '2 Column Grid', 'Basic' ),
            '3colgrid' => esc_html__( '3 Column Grid', 'Basic' ),
            '4colgrid' => esc_html__( '4 Column Grid', 'Basic' ),
            '5colgrid' => esc_html__( '5 Column Grid', 'Basic' ),

            '2colgridfullwidth' => esc_html__( '2 Column Grid Fullwidth', 'Basic' ),
            '3colgridfullwidth' => esc_html__( '3 Column Grid Fullwidth', 'Basic' ),
            '4colgridfullwidth' => esc_html__( '4 Column Grid Fullwidth', 'Basic' ),
            '5colgridfullwidth' => esc_html__( '5 Column Grid Fullwidth', 'Basic' ),
        	),
   		)
	);

    $cmb_demo->add_field( array(
        'name'     => esc_html__( 'Portfolio Categories', 'Basic' ),
        'desc'     => esc_html__( 'Choose the portfolio categories to be displayed on this page. Leave blank to display all categories.', 'Basic' ),
        //'default' => $portfolio_categories,
        'id'       => $prefix . 'portfolio_categories',
        'type'     => 'multicheck',
        'options' => $portfolio_cats,
        //'taxonomy' => 'portfolio_category', // Taxonomy Slug
        'inline'  => true, // Toggles display to inline
    ) );

    $cmb_demo->add_field( array(
        'name'    => esc_html__( 'Show Filter', 'Basic' ),
        'desc'    => esc_html__( '', 'Basic' ),
        'id'      => $prefix . 'show_filter',
        'default' => esc_html($show_filter),
        'type'    => 'checkbox',
    ) );

    $cmb_demo->add_field( array(
        'name'       => esc_html__( 'Column Spacing', 'Basic' ),
        'desc'       => esc_html__( 'Enter the amount of spacing (in pixels) you want between each item. ex: 30', 'Basic' ),
        'default'    => esc_html($column_spacing),
        'id'         => $prefix . 'column_spacing',
        'type'       => 'text',
        //'show_on_cb' => 'cmb_test_text_show_on_cb', // function should return a bool value
        //'sanitization_cb' => 'column_spacing_sanitization', // custom sanitization callback parameter
        //'escape_cb'       => 'column_spacing_escape',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => '<a id="show-options" href="#">' . esc_html__( 'Show More Options', 'Basic' ) . '</a>',
        'id'   => $prefix . 'test_title',
        'type' => 'title',
    ) );

    $cmb_demo->add_field( array(
        'name'       => esc_html__( 'Posts Per Page', 'Basic' ),
        'desc'       => esc_html__( 'Enter the number of posts you want to display per page. Set to -1 to display all.', 'Basic' ),
        'default'    => esc_html($posts_per_page),
        'id'         => $prefix . 'posts_per_page',
        'type'       => 'text',
    ) );

     $cmb_demo->add_field( array(
        'name'    => esc_html__( 'Enable Pagination', 'Basic' ),
        'id'      => $prefix . 'enable_post_nav',
        'default' => esc_html($enable_post_nav),
        'type'    => 'checkbox',
    ) );

    $cmb_demo->add_field( array(
        'name'    => esc_html__( 'Pagination Type', 'Basic' ),
        'id'      => $prefix . 'portfolio_nav',
        'type'    => 'select',
        'default' => esc_html($post_nav_type),
        'options' => array(
            'default' => esc_html__( 'Infinite Scroll', 'Basic' ),
            'prevnext' => esc_html__( 'Previous/Next', 'Basic' ),
            'numbered' => esc_html__( 'Numbered', 'Basic' )  
        ),
    ) );

    $cmb_demo->add_field( array(
        'name' => esc_html__( '', 'Basic' ),
        'description' => esc_html__( 'Item Options', 'Basic' ),
        'id'   => $prefix . 'hover_options',
        'type' => 'title',
    ) );

    $cmb_demo->add_field( array(
        'name'    => esc_html__( 'Title Position', 'Basic' ),
        'id'      => $prefix . 'title_pos',
        'type'    => 'select',
        'default' => esc_html($title_pos),
        'options' => array(
        	'hover' => esc_html__( 'Show on Hover', 'Basic' ),
            'below' => esc_html__( 'Show Below Post', 'Basic' )
        ),
    ) );

    $cmb_demo->add_field( array(
        'name'    => esc_html__( 'Show Categories', 'Basic' ),
        'desc'    => esc_html__( 'Show categories below the title on hover.', 'Basic' ),
        'id'      => $prefix . 'show_categories',
        'default' => esc_html($show_categories),
        'type'    => 'checkbox',
    ) );

    $cmb_demo->add_field( array(
        'name'    => esc_html__( 'Hover Background Color', 'Basic' ),
        'id'      => $prefix . 'hover_bgcolor',
        'type'    => 'select',
        'default' => esc_html($hover_bg_color),
        'options' => array(
        	'white' => esc_html__( 'White', 'Basic' ),
            'black' => esc_html__( 'Black', 'Basic' ),
            'custom' => esc_html__( 'Custom', 'Basic' ) 
        ),
    ) );

    $cmb_demo->add_field( array(
        'name'    => esc_html__( 'Custom Hover Background Color', 'Basic' ),
        'desc'    => esc_html__( 'Applies only if Hover Background Color is set to Custom.', 'Basic' ),
        'id'      => $prefix . 'custom_hover_bgcolor',
        'type'    => 'colorpicker',
        'default' => esc_html($custom_hover_bgcolor)
    ) );

    $cmb_demo->add_field( array(
        'name'    => esc_html__( 'Custom Hover Text Color', 'Basic' ),
        'desc'    => esc_html__( 'Applies only if Hover Background Color is set to Custom.', 'Basic' ),
        'id'      => $prefix . 'custom_hover_textcolor',
        'type'    => 'colorpicker',
        'default' => esc_html($custom_hover_text_color)
    ) );

    $cmb_demo->add_field( array(
        'name'       => esc_html__( 'Hover Background Opacity', 'Basic' ),
        'desc'       => esc_html__( 'Values 0 - 1. ex: 0.95', 'Basic' ),
        'default'    => esc_html($hover_opacity),
        'id'         => $prefix . 'hover_opacity',
        'type'       => 'text',
    ) );

    $cmb_demo->add_field( array(
        'name'       => esc_html__( 'Hover Background Padding', 'Basic' ),
        'desc'       => esc_html__( 'Enter the amount of space, in pixels, that you want to have around the hover background. ex: 15 (optional). Enter 0 for no padding.', 'Basic' ),
        'default'	 => esc_html($hover_padding),
        'id'         => $prefix . 'hover_padding',
        'type'       => 'text',
    ) );

    $cmb_demo->add_field( array(
        'name'    => esc_html__( 'Image Hover Effects', 'Basic' ),
        'id'      => $prefix . 'hover_effects',
        'type'    => 'multicheck',
        'default' => $effects,
        'options' => array(
            'scale' => esc_html__( 'Scale', 'Basic' ),
            'rotate' => esc_html__( 'Rotate', 'Basic' ),
            'blackwhite' => esc_html__( 'Black & White', 'Basic' ),
        ),
        // 'inline'  => true, // Toggles display to inline
    ) );

}
add_action( 'cmb2_admin_init', 'cg_metabox' );

/**
 * WooCommerce before main content
 *
 * @since Basic 1.0
 */
function cg_output_content_wrapper() {

	if(!is_product()) {
		$id = get_option('woocommerce_shop_page_id');
		$title = get_the_title($id);
		$subtitle = get_post_meta($id, '_cmb_page_subtitle', true);
		$show_title = get_post_meta($id, '_cmb_show_title', true);

		if($show_title == 'show') {
			echo '<div class="page-title">
					<div class="inner">
						<h1>' . esc_html($title) . '</h1>';

						if($subtitle) {
							echo '<p class="lead">' . esc_html($subtitle) . '</p>';
						}

				echo '</div>
				</div>';
		}
	}

	$content_class = 'content';
	$shop_layout = get_theme_mod('shop_layout', 'default');

	if($shop_layout == 'fullwidth') {
		$content_class = 'content-fullwidth';
	}

	if(is_shop() || is_product_category() || is_product_tag()) {
		echo '<div class="' . esc_attr($content_class) . '">';
	} else {
		echo '<div class="content-fullwidth">';
	}
}
add_action('woocommerce_before_main_content', 'cg_output_content_wrapper');

/**
 * Remove WooCommerce pagination and add our own
 *
 * @since Basic 1.0
 */
remove_action('woocommerce_pagination', 'woocommerce_pagination', 10);
function cg_woocommerce_pagination() {
	cg_page_navigation();
}
add_action('woocommerce_pagination', 'cg_woocommerce_pagination', 10);

/* Close product link after title */
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15);

/* Remove WooCommerce Breadcrumbs */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

/* Remove Add To Cart button from Shop Archive */
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

/* Set shop page to display 9 results */
add_filter('loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20);

/**
 * Check if plugin is active
 *
 * @since Basic 1.0
 */
function cg_active_plugin($plugin_dir) {
	include_once(ABSPATH . 'wp-admin/includes/plugin.php');
	
	if(is_plugin_active($plugin_dir)) {
		return true;
	}

	return false;
}

/**
 * Convert HEX to RGB
 *
 * @since Basic 1.0
 */
function cg_hex2rgb($hex, $opacity = 0.8) {
    $hex = str_replace("#", "", $hex);

    if(strlen($hex) == 3) {
       $r = hexdec(substr($hex, 0, 1).substr($hex, 0, 1));
       $g = hexdec(substr($hex, 1, 1).substr($hex, 1, 1));
       $b = hexdec(substr($hex, 2, 1).substr($hex, 2, 1));
    } else {
       $r = hexdec(substr($hex, 0, 2));
       $g = hexdec(substr($hex, 2, 2));
       $b = hexdec(substr($hex, 4, 2));
    }

    if(!is_numeric($opacity)) $opacity = 0.8;

    $rgb = array($r, $g, $b, $opacity);
   	return implode(",", $rgb); // returns the rgb values separated by commas
    //return $rgb; // returns an array with the rgb values
}

/**
 * Load TGM Plugin Activation Class
 *
 * @since Basic 1.0
 */
include_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function cg_load_required_plugins() {
	/**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
    	array(
            'name'               => __('Basic Theme Portfolio', 'Basic'), // The plugin name.
            'slug'               => 'basic-theme-portfolio', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/inc/plugins/basic-theme-portfolio.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name'               => __('Basic Theme Shortcodes', 'Basic'), // The plugin name.
            'slug'               => 'basic-theme-shortcodes', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/inc/plugins/basic-theme-shortcodes.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name'               => __('Basic Theme Extras', 'Basic'), // The plugin name.
            'slug'               => 'basic-theme-extras', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/inc/plugins/basic-theme-extras.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name'               => __('Vafpress Post Formats UI', 'Basic'), // The plugin name.
            'slug'               => 'vafpress-post-formats-ui', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/inc/plugins/vafpress-post-formats-ui.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        )
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'Basic' ),
            'menu_title'                      => __( 'Install Plugins', 'Basic' ),
            'installing'                      => __( 'Installing Plugin: %s', 'Basic' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'Basic' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'Basic' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'Basic' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'Basic' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'Basic' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'Basic' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'Basic' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'Basic' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'Basic' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'Basic' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'Basic' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'Basic' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'Basic' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'Basic' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'cg_load_required_plugins');
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Basic
 * @since Basic 1.0
 */

get_header();

$blog_layout = get_theme_mod('blog_layout', 'classic');

if(isset($wp_query->query_vars['blog'])) {
	$blog_param = $wp_query->query_vars['blog'];
} else {
	$blog_param = '';
}

$container_class = '';
$blog_class = '';

if($blog_layout == 'grid' || $blog_param == 'grid') {
	$container_class = 'grid-container';
	$blog_class .= 'blog-grid';
} elseif($blog_layout == 'fullwidth' || $blog_param == 'fullwidth') {
	$container_class = 'fullwidth-container';
	$blog_class .= 'blog-fullwidth';
}

// Enable/disable sidebar
$get_sidebar = true;

if($blog_layout == 'grid' || $blog_layout == 'fullwidth'
	|| $blog_param == 'grid' || $blog_param == 'fullwidth') {
	$get_sidebar = false;
}

?>

	<main id="main" role="main">

		<div class="container">

			<?php cg_page_title(); ?>

			<div class="content <?php echo esc_attr($container_class); ?>">


				<?php if($blog_layout == 'grid' || $blog_param == 'grid') { ?>
				<div class="blog-grid">
				<div class="item-sizer"></div>
				<div class="gutter-sizer"></div>
				<?php } ?>

				<?php

				// Start the loop
				if(have_posts()): 

					while(have_posts()): 

						the_post();

						/*
						* Include the post format-specific template for the content. If you want to
						* use this in a child theme, then include a file called called content-___.php
						* (where ___ is the post format) and that will be used instead.
						*/
						get_template_part('content', get_post_format());

					endwhile;

				// If no content, include the "No posts found" template.
				else :
					get_template_part('content', 'none');
				endif; ?>

				<?php if($blog_layout == 'grid' || $blog_param == 'grid') { ?>
					</div>
				<?php } ?>

				<?php cg_page_navigation(); ?>

			</div>

			<?php if($get_sidebar) { 
				get_sidebar();
			} ?>

		</div>

	</main>

<?php get_footer(); ?>
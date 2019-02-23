<?php 
/**
 * The template for displaying search results
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

$blog_class = '';

if($blog_layout == 'grid' || $blog_param == 'grid') {
	$blog_class .= 'blog-grid';
} elseif($blog_layout == 'fullwidth' || $blog_param == 'fullwidth') {
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

			<div class="page-title">
				<h1><?php esc_html_e('Search results for', 'Basic'); ?> "<?php echo esc_html(get_search_query()); ?>."</h1>
			</div>

			<div class="content <?php echo esc_attr($blog_class); ?>">

				<?php if($blog_layout == 'grid' || $blog_param == 'grid') { ?>
				<div class="item-sizer"></div>
				<div class="gutter-sizer"></div>
				<?php } ?>

				<?php

				// Start the loop
				if(have_posts()) : 

					while(have_posts()) : 

						the_post();

						/*
						* Include the post format-specific template for the content. If you want to
						* use this in a child theme, then include a file called called content-___.php
						* (where ___ is the post format) and that will be used instead.
						*/
						get_template_part('content', get_post_format());

					endwhile;

				// If no content, include the "No posts found" template.
				else : ?>
					
					<h4><?php esc_html_e('Your search did not match any entries.', 'Basic'); ?></h4>
					<?php get_search_form(); ?>

					<h4><?php esc_html_e('Suggestions:', 'Basic'); ?></strong></h4>
					<ul>
						<li><?php esc_html_e('Make sure all words are spelled correctly.', 'Basic'); ?></li>
						<li><?php esc_html_e('Try different keywords.', 'Basic'); ?></li>
						<li><?php esc_html_e('Try more general keywords.', 'Basic'); ?></li>
					</ul>

				<?php endif; ?>

			</div>

			<?php if($get_sidebar) { 
				get_sidebar();
			} ?>

		</div>

	</main>

<?php get_footer(); ?>
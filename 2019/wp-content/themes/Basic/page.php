<?php
/**
 * The default template for displaying pages.
 *
 * @package Basic
 * @since Basic 1.0
 */

get_header(); ?>

<main id="main" role="main">

	<?php while(have_posts()): the_post();

		// Include the page content template.
		get_template_part('content', 'page');

	endwhile; ?>

</main>

<?php get_footer(); ?>
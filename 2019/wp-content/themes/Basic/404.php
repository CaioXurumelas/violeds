<?php 
/**
 * The template for pages that don't exist.
 *
 * @package Basic
 * @since Basic 1.0
 */

get_header(); ?>

<main id="main" role="main">

	<div class="container">

		<div class="error-404">
			<h1><?php esc_html_e('404 Not Found', 'Basic'); ?></h1>
			<p class="lead"><?php esc_html_e('Sorry, but the page you\'re looking for can\'t be found.', 'Basic'); ?></p>
		</div>

	</div>

</main>

<?php get_footer(); ?>
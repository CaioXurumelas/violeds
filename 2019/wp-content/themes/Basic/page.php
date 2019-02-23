<?php
/**
 * Template Name: Fullwidth
 *
 * @package Basic
 * @since Basic 1.0
 */

get_header(); ?>

<main id="main" role="main">

	<?php while(have_posts()) : the_post(); ?>

		<div class="container-fluid">

			<?php cg_page_title(); ?>

			<div class="content-fullwidth">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

					<?php
						// Author bio.
						if (is_single() && get_the_author_meta('description')) :
							get_template_part('author-bio');
						endif;
					?>

				</article><!-- #post-## -->

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
				?>

			</div>

		</div>

	<?php endwhile; ?>

</main>

<?php get_footer(); ?>
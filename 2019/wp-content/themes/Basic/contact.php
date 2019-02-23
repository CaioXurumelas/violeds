<?php
/**
 * Template Name: Contact
 *
 * @package Basic
 * @since Basic 1.0
 */

get_header(); ?>

<main id="main" role="main">

	<?php while(have_posts()) : the_post(); ?>

		<div class="container">

			<?php cg_page_title(); ?>
			
			<div class="content">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">

						<?php the_content(); ?>

					</div><!-- .entry-content -->

					<?php
						// Author bio.
						if (is_single() && get_the_author_meta('description')) :
							get_template_part('author-bio');
						endif;
					?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif; ?>

				</article><!-- #post-## -->

			</div>

			<?php get_sidebar(); ?>
			
		</div>

	<?php endwhile; ?>

</main>

<?php get_footer(); ?>
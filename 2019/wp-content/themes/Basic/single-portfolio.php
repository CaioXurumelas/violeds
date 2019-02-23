<?php
/**
 * The template for displaying all single portfolio items
 *
 * @package Basic
 * @since Basic 1.0
 */

get_header(); ?>

	<main id="main" role="main">

		<div class="container">

			<?php while(have_posts()): the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php cg_page_title(); ?>

					<div class="content-fullwidth entry-content project">

						<div class="inner-wrap">

							<?php the_content(); ?>
							
						</div>

						<?php
						if(get_previous_post() || get_next_post()) {
							$prev_post = get_previous_post();
							$next_post = get_next_post();
							?>

							<div class="single-portfolio-post-nav">
								<?php if(!empty($prev_post)): ?>
								<div class="previous-post">
									<span><?php esc_html_e('Previous Project', 'Basic'); ?></span>
									<a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
										<div class="arrow"></div>
									</a>
								</div>
								<?php endif; ?>

								<?php if(!empty($next_post)): ?>
								<div class="next-post">
									<span><?php esc_html_e('Next Project', 'Basic'); ?></span>
									<a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
										<div class="arrow"></div>
									</a>
								</div>
								<?php endif; ?>

							</div>

						<?php } ?>

					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			// End the loop.
			endwhile;
			?>

		</div>

	</main>

<?php get_footer(); ?>

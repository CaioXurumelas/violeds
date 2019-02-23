<div class="container">

	<?php cg_page_title(); ?>

	<div class="content">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="entry-content">

				<?php the_content(); ?>
				<?php wp_link_pages(); ?>

				<?php
					// Author bio.
					if (is_single() && get_the_author_meta('description')) :
						get_template_part('author-bio');
					endif;
				?>
				
			</div><!-- .entry-content -->

		</article><!-- #post-## -->

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>

	</div>

	<?php get_sidebar(); ?>
	
</div>
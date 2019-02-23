<?php
/**
 * The template for displaying Author bios
 *
 * @package Basic
 * @since Basic 1.0
 */

$show = get_theme_mod('show_author_info', true);
if($show == true) { ?>

<div class="author-info">

	<div class="gravatar">
		<?php echo get_avatar(get_the_author_meta('user_email'), 80); ?>
	</div>

	<div class="author-bio">
		<a class="author-link" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author"><strong><?php echo esc_html(get_the_author()); ?></strong></a>

		<p><?php the_author_meta('description'); ?></p><!-- .author-bio -->
	</div>
	
</div><!-- .author-info -->

<?php } ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()) : ?>

		<div class="post-thumbnail">
			<?php if(is_single()) : ?>
				<?php the_post_thumbnail('post'); ?>
			<?php else : ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumb_size); ?></a>
			<?php endif; ?>
		</div>

	<?php endif; ?>

	<div class="status">
		<?php $content = get_the_content(); ?>
		<p><?php echo strip_tags($content); ?> <?php if(!is_single()) { ?><a href="<?php the_permalink(); ?>"><i class="fa fa-link post-link"></i></a><?php } ?></p>
	</div>
	
	<?php cg_after_post(); ?>

</article>
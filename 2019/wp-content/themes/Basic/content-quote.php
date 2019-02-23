<?php
$quote_text = get_post_meta($post->ID, '_format_quote', true);
$quote_source = get_post_meta($post->ID, '_format_quote_source_name', true);
$quote_source_url = get_post_meta($post->ID, '_format_quote_source_url', true);
?>

<?php if($quote_text != '') { ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()) : ?>

		<div class="post-thumbnail">
			<?php if(is_single()) : ?>
				<?php the_post_thumbnail('cg_post'); ?>
			<?php else : ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumb_size); ?></a>
			<?php endif; ?>
		</div>

	<?php endif; ?>

	<h3 class="post-title"><?php echo esc_html($quote_text); ?></h3>

	<div class="quote-source">
		<p>
			<?php
				if($quote_source != '') {
					if($quote_source_url != '') {
						echo '<a href="'.esc_url($quote_source_url).'">'.esc_html($quote_source).'</a>';
					} else {
						echo esc_html($quote_source);
					}
				}
			?>

			<?php if(!is_single()) { ?><a href="<?php the_permalink(); ?>"><i class="fa fa-link post-link"></i></a><?php } ?>
		</p>
	</div>

	<?php the_content(); ?>
	
	<?php cg_after_post(); ?>

</article>
<?php } ?>
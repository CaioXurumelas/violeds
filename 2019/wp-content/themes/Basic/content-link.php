<?php 

$url = esc_html(get_post_meta($post->ID, '_format_link_url', true)); 

if($url == '')
	$url = get_the_permalink();

if(strpos($url, 'http://') === false) {

	$parts = explode('/', $url);

	if($parts)
		$url_text = $parts[0];

	$url = 'http://' . $url;

} else {
	$parts = explode('/', $url);

	if($parts)
		$url_text = $parts[0] . '//' . $parts[2];
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()) : ?>

		<div class="post-thumbnail">
			<?php if(is_single()): ?>
				<?php the_post_thumbnail('post'); ?>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumb_size); ?></a>
			<?php endif; ?>
		</div>

	<?php endif; ?>

	<div class="link-wrap">
		<h3 class="post-title">
			<a href="<?php echo esc_url($url); ?>"><?php the_title(); ?></a>
		</h3>

		<p><a href="<?php echo esc_url($url); ?>"><?php echo esc_html($url_text); ?></a> <?php if(!is_single()) { ?><a href="<?php the_permalink(); ?>"><i class="fa fa-link post-link"></i></a><?php } ?></p>
	</div>

	<?php 
		if(is_single()) {
			the_content();
		} 
	?>
	
	<?php cg_after_post(); ?>

</article>
<?php

// Post Thumbnail Size
$thumb_size = 'cg_post';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail() && false == has_post_format()) : ?>

		<div class="post-thumbnail">
			<?php if(is_single()): ?>
				<?php the_post_thumbnail($thumb_size); ?>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumb_size); ?></a>
			<?php endif; ?>
		</div>

	<?php elseif(has_post_format('gallery')):

		$images = get_post_meta($post->ID, '_format_gallery_images', true);

		if($images): ?>
		<div class="post-gallery">
			<ul class="bxslider">
			<?php foreach($images as $image) { ?>
				<?php
				$the_image = wp_get_attachment_image_src($image, $thumb_size);
				$the_caption = get_post_field('post_excerpt', $image);
				$the_title = get_post_field('post_title', $image);
				?>
				<li><a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($the_image[0]); ?>" alt="<?php echo esc_attr($the_title); ?>"<?php if($the_caption) { ?> title="<?php echo esc_attr($the_caption); ?>"<?php } ?> /></a></li>
			<?php } ?>
			</ul>
		</div>
		<?php endif;

	elseif(has_post_format('video')):

		$video = get_post_meta($post->ID, '_format_video_embed', true);

        if($video) :
            echo '<div class="post-video">' . wp_oembed_get(esc_url($video)) . '</div>';
        endif;      

    elseif(has_post_format('audio')): ?>

    	<?php if(has_post_thumbnail()) { ?>
    		<div class="post-thumbnail">
			<?php if(is_single()): ?>
				<?php the_post_thumbnail($thumb_size); ?>
			<?php else : ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumb_size); ?></a>
			<?php endif; ?>
		</div>
    	<?php } ?>

    	<?php

    		$audio = get_post_meta($post->ID, '_format_audio_embed', true);

    		if($audio != ''):
		    	if( substr($audio, 0, 4) == 'http' && substr($audio, 0, 22) != 'https://soundcloud.com') :
					echo do_shortcode('[audio src="' . esc_url($audio) . '"]');
				elseif( wp_oembed_get(esc_url($audio))): 
					echo wp_oembed_get(esc_url($audio));
				endif;
			endif;
		?>

	<?php endif; ?>

	<div class="post-heading">
		<h3 class="post-title">
			<?php if(is_single()): ?>
				<?php the_title(); ?>
			<?php else : ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php endif; ?>
		</h3>
		<div class="post-meta">
			<?php
			$show_author = get_theme_mod('show_author', true);
			$show_date = get_theme_mod('show_date', true);
			$show_categories = get_theme_mod('show_categories', true);
			$show_comments = get_theme_mod('show_comments', true);
			?>
			<p>
				<?php if($show_author == true) { ?>
				By <?php the_author_link(); ?>
				<?php } else { ?>
					<?php if($show_categories == true || $show_date == true) { ?>
					Posted
					<?php } ?>
				<?php } ?>
				<?php if($show_categories == true) { ?>
				in <?php the_category(' / '); ?> 
				<?php } ?>
				<?php if($show_date == true) { ?>
				on <?php the_time('F jS, Y'); ?>
				<?php } ?>
				<?php if($show_comments == true) { ?>
				<?php if($show_author == true || $show_categories == true || $show_date == true) { ?><strong>&middot;</strong> <?php } ?>
				<a href="<?php comments_link(); ?>"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a>
				<?php } ?>
			</p>
		</div>
	</div>

	<?php 
		if(is_search()) {
			the_excerpt();
		} else {
			the_content();
		}
	?>

	<?php wp_link_pages(); ?>
	<?php cg_after_post(); ?>
	
</article>




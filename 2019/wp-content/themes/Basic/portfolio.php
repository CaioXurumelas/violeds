<?php
/*
Template Name: Portfolio
*/

get_header();

$portfolio_layout = get_post_meta($post->ID, '_cmb_portfolio_layout', true);
$title_pos = (get_post_meta($post->ID, '_cmb_title_pos', true)) ? get_post_meta($post->ID, '_cmb_title_pos', true) : 'hover';
$column_spacing = get_post_meta($post->ID, '_cmb_column_spacing', true);
$categories = get_post_meta($post->ID, '_cmb_portfolio_categories', true);
$show_categories = get_post_meta($post->ID, '_cmb_show_categories', true);
$portfolio_categories = array();

if(!empty($categories)) {
	foreach($categories as $category => $val) {
		$portfolio_categories[] = $val;
	}
}

if($portfolio_layout == '2colfullwidth' || $portfolio_layout == '2colgridfullwidth' ||
	$portfolio_layout == '3colfullwidth' || $portfolio_layout == '3colgridfullwidth' || 
	$portfolio_layout == '4colfullwidth' || $portfolio_layout == '4colgridfullwidth' || 
	$portfolio_layout == '5colfullwidth' || $portfolio_layout == '5colgridfullwidth') {
	$container_class = 'fullwidth';
} else {
	$container_class = 'container';
}

$item_class = 'item';

if($portfolio_layout == '2col' || $portfolio_layout == '2colfullwidth' || $portfolio_layout == '2colgrid' || $portfolio_layout == '2colgridfullwidth') {
	$item_class .= ' two-column';
} elseif($portfolio_layout == '4col' || $portfolio_layout == '4colfullwidth' || $portfolio_layout == '4colgrid' || $portfolio_layout == '4colgridfullwidth') {
	$item_class .= ' four-column';
} elseif($portfolio_layout == '5col' || $portfolio_layout == '5colfullwidth' || $portfolio_layout == '5colgrid' || $portfolio_layout == '5colgridfullwidth') {
	$item_class .= ' five-column';
}

$thumb_size = 'cg_portfolio';

if($portfolio_layout == '2colgrid' || $portfolio_layout == '3colgrid' || $portfolio_layout == '4colgrid' || $portfolio_layout == '5colgrid') {
	$thumb_size = 'cg_grid';
} elseif($portfolio_layout == '2colgridfullwidth' || $portfolio_layout == '3colgridfullwidth' || $portfolio_layout == '4colgridfullwidth' || $portfolio_layout == '5colgridfullwidth') {
	$thumb_size = 'cg_fullwidth-grid';
} else {
	$thumb_size = 'cg_portfolio';
}

$show_filter = get_post_meta($post->ID, '_cmb_show_filter', true);

$hover_effects = get_post_meta($post->ID, '_cmb_hover_effects', true);

$effects = '';

if($hover_effects) {
	foreach($hover_effects as $effect) {
		$effects .= " $effect";
	}
}

$hover_padding = get_post_meta($post->ID, '_cmb_hover_padding', true);
$hover_bg_color = get_post_meta($post->ID, '_cmb_hover_bgcolor', true);

?>

<main id="main" role="main">

	<div class="<?php echo esc_attr($container_class); ?>">

		<?php
			$page_id = get_the_ID();
			$title = get_post_meta($page_id, '_cmb_portfolio_intro', true);
			$show_title = get_post_meta($page_id, '_cmb_show_title', true);
			$subtitle = get_post_meta($page_id, '_cmb_page_subtitle', true);
			$allowed_html = array(
				'br' => array(),
				'strong' => array(
					'class' => array()
				),
				'em' => array(
					'class' => array()
				),
				'b' => array(
					'class' => array()
				),
				'i' => array(
					'class' => array()
				),
				'a' => array(
					'class' => array(),
					'href' => array(),
					'target' => array()
				),
				'span' => array(
					'class' => array()
				)
			);
		?>

		<?php if($column_spacing != 0) { ?><div class="project"><?php } ?>

		<?php if($container_class == 'fullwidth') { ?><div class="container"><?php } ?>

		<?php if($title != '' && $show_title == 'show') { ?>
		<div class="page-title">
			<div class="inner">
				<h3><?php echo wp_kses($title, $allowed_html); ?></h3>
				<?php if($subtitle) { ?><p class="lead"><?php echo wp_kses($subtitle, $allowed_html); ?></p><?php } ?>
			</div>
		</div>
		<?php } ?>

		<?php 
			// Portfolio Filter
			if($show_filter)
				cg_portfolio_filter(true, $portfolio_categories);
		?>

		<?php if($container_class == 'fullwidth') { ?></div><?php } ?>

		<?php
		$page = (is_front_page()) ? 'page' : 'paged';
		
		$paged = (get_query_var($page)) ? get_query_var($page) : 1;
		$posts_per_page = get_post_meta($post->ID, '_cmb_posts_per_page', true);

		$args = array(
			'post_type' => 'portfolio',
			'posts_per_page' => $posts_per_page,
			'paged' => $paged,
			'portfolio_category' => $portfolio_categories
		);

		$wp_query = new WP_Query($args); 

		if($wp_query->have_posts()): $x = 0; ?>
		
		<div class="grid">

			<?php while($wp_query->have_posts()): $wp_query->the_post(); $x++; ?>

			<?php
			if(cg_active_plugin('basic-theme-portfolio/basic-theme-portfolio.php')) {
				$terms = get_the_terms($post->ID, 'portfolio_category', '', ', ');
				if($terms) {
					$the_terms = wp_list_pluck($terms, 'name'); 
					$terms_list = implode(', ', $the_terms);
				}
			}
			?>

			<?php if(has_post_thumbnail()): ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class($item_class); ?>>
				<div class="item-content">

					<a href="<?php the_permalink(); ?>">
						<?php if($effects != '') { ?><div class="effects <?php echo esc_attr($effects); ?>"><?php } ?>

						<div class="overlay overlay-<?php echo esc_attr($hover_bg_color); ?>"></div>

						<?php the_post_thumbnail($thumb_size); ?>
					
						<div class="title title-<?php echo esc_attr($hover_bg_color); ?>">
							<?php if($title_pos == 'hover') { ?>
							<div class="inner">
								<h3><?php the_title(); ?></h3>				
								<?php if(isset($terms_list) && $show_categories) { ?><div class="terms"><?php echo esc_html($terms_list); ?></div><?php } ?>
							</div>
							<?php } ?>
						</div>
						<?php if($effects != '') { ?></div><?php } ?>
					</a>

				</div>

				<?php if($title_pos == 'below') { ?>
				<div class="title-below">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php if(isset($terms_list) && $show_categories) { ?><div class="terms"><?php echo esc_html($terms_list); ?></div><?php } ?>
				</div>
				<?php } ?>
			</article>

			<?php endif; ?>
						
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if(comments_open() || get_comments_number()) :
					comments_template();
				endif;
			?>

			<?php endwhile; ?>

		</div>

		<?php
			cg_page_navigation('portfolio', $page_id);
			wp_reset_postdata();
		?>

		<?php endif; ?>

		<?php if($column_spacing != 0) { ?></div><!-- end .project --><?php } ?>

	</div>

</main>

<?php get_footer(); ?>
<?php
/**
 * The template for displaying the header
 *
 * Displays the head element and theme header
 *
 * @package Basic
 * @since Basic 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="load"></div>

	<nav id="navigation" role="navigation">

		<div class="inner">
			<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'ul', 'menu_class' => 'main-menu')); ?>
		</div>

		<?php
		$profiles = array(
			get_theme_mod('facebook_profile_url', '#'),
			get_theme_mod('twitter_profile_url', '#'),
			get_theme_mod('instagram_profile_url', '#'),
			get_theme_mod('youtube_profile_url', '#'),
			get_theme_mod('dribbble_profile_url', '#'),
			get_theme_mod('gplus_profile_url', ''),
			get_theme_mod('behance_profile_url', ''),
			get_theme_mod('reddit_profile_url', ''),
			get_theme_mod('vine_profile_url', ''),
			get_theme_mod('tumblr_profile_url', ''),
			get_theme_mod('linkedin_profile_url', ''),
			get_theme_mod('pinterest_profile_url', ''),
			get_theme_mod('vk_profile_url', '')
		);

		$social = false;

		foreach($profiles as $profile => $value) {
			if($value != '') {
				$social = true;
			}
		}
		?>

		<?php if($social) { ?>
		<footer>
			<ul class="social-sharing">
				<?php if($profiles[0] != '') { ?><li><a href="<?php echo $profiles[0]; ?>"><i class="fa fa-facebook"></i></a></li><?php } ?>
				<?php if($profiles[1] != '') { ?><li><a href="<?php echo $profiles[1]; ?>"><i class="fa fa-twitter"></i></a></li><?php } ?>
				<?php if($profiles[2] != '') { ?><li><a href="<?php echo $profiles[2]; ?>"><i class="fa fa-instagram"></i></a></li><?php } ?>
				<?php if($profiles[3] != '') { ?><li><a href="<?php echo $profiles[3]; ?>"><i class="fa fa-youtube-play"></i></a></li><?php } ?>
				<?php if($profiles[4] != '') { ?><li><a href="<?php echo $profiles[4]; ?>"><i class="fa fa-dribbble"></i></a></li><?php } ?>
				<?php if($profiles[5] != '') { ?><li><a href="<?php echo $profiles[5]; ?>"><i class="fa fa-google-plus"></i></a></li><?php } ?>
				<?php if($profiles[6] != '') { ?><li><a href="<?php echo $profiles[6]; ?>"><i class="fa fa-behance"></i></a></li><?php } ?>
				<?php if($profiles[7] != '') { ?><li><a href="<?php echo $profiles[7]; ?>"><i class="fa fa-reddit-alien"></i></a></li><?php } ?>
				<?php if($profiles[8] != '') { ?><li><a href="<?php echo $profiles[8]; ?>"><i class="fa fa-vine"></i></a></li><?php } ?>
				<?php if($profiles[9] != '') { ?><li><a href="<?php echo $profiles[9]; ?>"><i class="fa fa-tumblr"></i></a></li><?php } ?>
				<?php if($profiles[10] != '') { ?><li><a href="<?php echo $profiles[10]; ?>"><i class="fa fa-linkedin"></i></a></li><?php } ?>
				<?php if($profiles[11] != '') { ?><li><a href="<?php echo $profiles[11]; ?>"><i class="fa fa-pinterest-p"></i></a></li><?php } ?>
				<?php if($profiles[12] != '') { ?><li><a href="<?php echo $profiles[12]; ?>"><i class="fa fa-vk"></i></a></li><?php } ?>
			</ul>
		</footer>
		<?php } ?>

	</nav>

	<header id="header"<?php if(get_theme_mod('sticky_header', false) == true) { echo ' data-style="fixed"'; } ?>>

		<div class="container">

			<div id="logo">
				<div class="inner">
					<?php 
					$logo_img = esc_url(get_theme_mod('logo', get_template_directory_uri() . '/images/logo.png'));
					$logo_width = get_theme_mod('logo_width', '32');
					$width = '';

					if($logo_width != '') {
						$width = ' width="' . esc_attr($logo_width) . '"';
					}

					if($logo_img) {
						$logo = '<img src="' . esc_attr($logo_img) . '" alt="' . esc_attr(get_bloginfo('name')) . '"' . $width . ' />';
					} else {
						$logo = get_bloginfo('name');
					}
					?>
					<a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><?php if($logo_img) { echo $logo; } else { echo esc_html($logo); } ?></a>
				</div>
			</div>

			<div class="menu-toggle">
				<div class="inner">
					<span class="toggle-button">
					    <div class="menu-bar menu-bar-top"></div>
					    <div class="menu-bar menu-bar-middle"></div>
					    <div class="menu-bar menu-bar-bottom"></div>
					</span>
				</div>
			</div>
            
		</div>

	</header>

	<div id="page">
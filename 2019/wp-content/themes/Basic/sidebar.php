<div class="sidebar">
	<?php
	$sidebar = __('Sidebar', 'Basic');

	if(is_page_template('contact.php')) {
		$sidebar = __('Contact Page', 'Basic');
	}

	dynamic_sidebar(esc_attr($sidebar)); ?>
</div>
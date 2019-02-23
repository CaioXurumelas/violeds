<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} 

$shop_layout = get_theme_mod('shop_layout', 'default');
?>

	<?php if((is_shop() || is_product_category() || is_product_tag()) && $shop_layout == 'default') {
		if(is_active_sidebar(__('Shop', 'Basic'))) {
			echo '<div class="sidebar">';
				dynamic_sidebar(__('Shop', 'Basic'));
			echo '</div>';
		} else {
			get_sidebar();
		}
	} ?>
	
</div>
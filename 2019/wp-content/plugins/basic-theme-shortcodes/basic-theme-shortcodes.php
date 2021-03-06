<?php
/**
 * Plugin Name: Basic Theme Shortcodes
 * Description: Shortcodes for the Basic WordPress theme.
 * Version: 1.0.0
 */

defined('ABSPATH') or die('No script kiddies please!');

function admin_shortcode_scripts() {
	wp_enqueue_script('cg_shortcodes', plugins_url('js/shortcodes.js', __FILE__), array('jquery'));
}
add_action('admin_enqueue_scripts', 'admin_shortcode_scripts');

function shortcode_dropdown_init() {

	// Abort early if the user will never see TinyMCE
	if (!current_user_can('edit_posts') && !current_user_can('edit_pages') && get_user_option('rich_editing') == 'true')
		return;

	// Add a callback to regiser our tinymce plugin   
	add_filter("mce_external_plugins", "register_tinymce_plugin"); 

	// Add a callback to add our button to the TinyMCE toolbar
	add_filter('mce_buttons', 'add_tinymce_dropdown');
}
add_action('init', 'shortcode_dropdown_init');

function bts_load_plugin_textdomain() {
    load_plugin_textdomain( 'Basic', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'bts_load_plugin_textdomain' );

// This callback registers our plug-in
function register_tinymce_plugin($plugin_array) {
    $plugin_array['shortcodes'] = plugins_url('js/shortcodes.js', __FILE__);
    return $plugin_array;
}

// This callback adds our button to the toolbar
function add_tinymce_dropdown($buttons) {
            //Add the button ID to the $button array
    $buttons[] = "shortcodes";
    return $buttons;
}

/* Shortcodes */
function enqueue_style() {
	wp_enqueue_style('cg-theme-shortcodes', plugins_url('css/basic-theme-shortcodes.min.css', __FILE__), array('style'));
}
add_action('wp_enqueue_scripts', 'enqueue_style');

function the_content_filter($content) {
    $block = join('|', array( 'one-half', 'one-third', 'one-fourth', 'one-fifth', 'one-sixth', 'two-thirds', 'three-fourths', 'four-fifths', 'five-sixths', 'accordion', 'section', 'toggle', 'heading', 'alert', 'fa', 'lightbox', 'lb_gallery', 'lb_image', 'lead', 'list', 'li', 'button', 'cta', 'row', 'portfolio'));
    $rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]", $content);
    $rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]", $rep);
	return $rep;
}
add_filter( 'the_content', 'the_content_filter' );

/* One Half Column Shortcode */
function one_half($atts, $content = null) {
	if(isset( $atts['first'] ) == 'yes') {
		$row = '<div class="row">';
		$endrow = '';
	} elseif(isset($atts['last']) == 'yes') {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if(isset( $atts['align'])) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col six"' . $align . '>' . do_shortcode($content) . '</div>' . $endrow;

}
add_shortcode('one-half', 'one_half');

/* One Third Column Shortcode */
function one_third( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col four"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'one-third', 'one_third' );

/* One Fourth Column Shortcode */
function one_fourth( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col three"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'one-fourth', 'one_fourth' );

/* One Fifth Column Shortcode */
function one_fifth( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col one-fifth"' . $align .'>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'one-fifth', 'one_fifth' );

/* One Sixth Column Shortcode */
function one_sixth( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col two"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'one-sixth', 'one_sixth' );

/* Two Thirds Column Shortcode */
function two_thirds( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col eight"' . $align. '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'two-thirds', 'two_thirds' );

/* Three Fourths Column Shortcode */
function three_fourths( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col nine"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'three-fourths', 'three_fourths' );

/* Four Fifths Column Shortcode */
function four_fifths( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col four-fifths"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'four-fifths', 'four_fifths' );

/* Five Sixths Column Shortcode */
function five_sixths( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col ten"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'five-sixths', 'five_sixths' );

/**
 * 2.0 - Accordion & Toggle 
 *
 * @since Framework 1.0
 */
function accordion( $atts, $content = null ) {
	return '<div id="accordion">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'accordion', 'accordion' );

function accordion_section( $atts, $content = null ) {

	if( isset( $atts['icon'] ) ) {
		$icon = '<i class="fa fa-' . $atts['icon'] . '"></i> &nbsp;';
	} else {
		$icon = '';
	}

	if( isset( $atts['title'] ) ) {
		$title = $atts['title'];
	} else {
		$title = '';
	}

	$html = '<span class="section-title">' . $icon . '<span>' . $title . '</span></span>';
	$html .= '<div>';
	$html .= do_shortcode( $content );
	$html .= '</div>';

	return $html;
}
add_shortcode( 'section', 'accordion_section' );

function toggle( $atts, $content = null ) {

	if( isset( $atts['icon'] ) ) {
		$icon = '<i class="fa fa-' . $atts['icon'] . '"></i> &nbsp;';
	} else {
		$icon = '';
	}

	if( isset( $atts['id'] ) ) {
		$id = $atts['id'];
	} else {
		$id = '';
	}

	if( isset( $atts['title'] ) ) {
		$title = $atts['title'];
	} else {
		$title = '';
	}

	$html = '<span id="' . $id . '" class="toggle-title">' . $icon . '<span>' . $title . '</span></span>';
	$html .= '<div class="' . $id . ' toggle-content">' . do_shortcode( $content ) . '</div>';

	return $html;
}
add_shortcode( 'toggle', 'toggle' );

function heading( $atts, $content = null ) {
	return '<h3 class="heading">' . do_shortcode( $content ) . '</h3>';
}
add_shortcode( 'heading', 'heading' );

function alert( $atts, $content = null ) {
	if( isset( $atts['icon'] ) ) {
		$icon = '<i class="fa fa-' . $atts['icon'] . '"></i> &nbsp;';
	} else {
		$icon = '';
	}

	return '<div class="alert-' . $atts['type'] . '">' . $icon . '' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'alert', 'alert' );

function font_awesome( $atts, $content = null ) {
	if( isset( $atts['size'] ) ) {
		$size = 'fa-' . $atts['size'] . 'x';
	} else {
		$size = '';
	}

	if( isset( $atts['color'] ) ) {
		$color = ' style="color:' . $atts['color'] . '"';
	} else {
		$color = '';
	}

	if( isset( $atts['icon'] ) ) {
		$icon = $atts['icon'];
	} else {
		$icon = '';
	}

	return '<i class="fa fa-' . $icon . ' ' . $size . '"' . $color . '></i> ';
}
add_shortcode( 'fa', 'font_awesome' );

function lightbox( $atts, $content = null ) {

	if( isset( $atts['link'] ) ) {
		$link = $atts['link'];
	} else {
		$link = '';
	}

	if( isset( $atts['title'] ) ) {
		$title = $atts['title'];
	} else {
		$title = '';
	}

	return '<div class="lightbox"><a href="' . $link . '" data-imagelightbox="a"><img src="' . do_shortcode( $content ) . '" alt="' . $title . '"></a></div>';
}
add_shortcode( 'lightbox', 'lightbox' );

function lb_gallery( $atts, $content = null ) {
	return '<div class="lightbox">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'lb_gallery', 'lb_gallery' );

function lb_image( $atts, $content = null ) {

	if( isset( $atts['link'] ) ) {
		$link = $atts['link'];
	} else {
		$link = '';
	}

	if( isset( $atts['title'] ) ) {
		$title = $atts['title'];
	} else {
		$title = '';
	}

	return '<a href="' . $link . '" data-imagelightbox="b"><img src="' . do_shortcode( $content ) . '" alt="' . $title . '"></a>';
}
add_shortcode( 'lb_image', 'lb_image' );

function lead_shortcode( $atts, $content = null ) {
	if( isset( $atts['dropcap'] ) && $atts['dropcap'] == 'yes' ) {
		$dropcap = 'dropcap';
	} else {
		$dropcap = '';
	}

	return '<p class="lead ' . $dropcap . '">' . do_shortcode( $content ) . '</p>';
}
add_shortcode( 'lead', 'lead_shortcode' );

function list_shortcode( $atts, $content = null ) {
	return '<ul class="styled-list">' . do_shortcode( $content ) . '</ul>';
}
add_shortcode( 'list', 'list_shortcode' );

function list_item( $atts, $content = null ) {
	if( isset( $atts['icon'] ) ) {
		$icon = '<i class="fa fa-' . $atts['icon'] . '"></i> ';
	} else {
		$icon = '';
	}

	return '<li>' . $icon . ' ' . do_shortcode( $content ) . '</li>';
}
add_shortcode( 'li', 'list_item' );

function button_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'link' => '#',
		'style' => '1',
		'size' => 'small',
		'color' => 'darkgray',
		'icon' => ''
	), $atts ) );

	if( $icon ) {
		$i = '<i class="fa fa-' . $icon . '"></i> ';
	} else {
		$i = '';
	}

	if( $style == '1' ) {
		$button = 'button';
	} elseif( $style == '2' ) {
		$button = 'button-alt';
	} else {
		$button = 'button';
	}

	return '<a href="' . $link . '" class="button ' . $button . '-' . $color . ' ' . $size . '">' . $i . '' . do_shortcode( $content ) . '</a>';
}
add_shortcode( 'button', 'button_shortcode' );

function calltoaction( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'heading' => '',
		'subtext' => '',
		'actiontext' => 'Buy Now',
		'link' => '#',
		'style' => '1',
		'size' => 'large',
		'color' => 'darkgray',
		'icon' => ''
	), $atts ) );

	if( $icon ) {
		$i = '<i class="fa fa-' . $icon . '"></i> ';
	} else {
		$i = '';
	}

	if( $style == '1' ) {
		$button = 'button';
	} elseif( $style == '2' ) {
		$button = 'button-alt';
	} else {
		$button = 'button';
	}

	$html = '<div class="row">';
	$html .= '<div class="col twelve">';
	$html .= '<div class="row cta"><span class="col nine"><h3>' . $heading . '</h3><p>' . $subtext . '</p></span><span class="col three buttonright"><a href="' . $link . '" class="button ' . $button . '-' . $color . ' ' . $size . '">' . $i . '' . $actiontext . '</a></span></div>';
	$html .= '</div>';
	$html .= '</div>';

	return $html;
}
add_shortcode( 'cta', 'calltoaction' );

function row_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'paddingtop' => '0',
		'paddingright' => '0',
		'paddingbottom' => '0',
		'paddingleft' => '0',
		'align' => ''
	), $atts ) );

	$padding = ' style="padding: ' . $paddingtop . 'px ' . $paddingright . 'px ' . $paddingbottom . 'px ' . $paddingright . 'px"';

	if( $align ) {
		$align = ' style="text-align:' . $align . '"';
	}

	return '<div class="row"' . $padding . '><div class="col twelve"' . $align . '>' . do_shortcode( $content ) . '</div></div>';
}
add_shortcode( 'row', 'row_shortcode' );

/**
 * Contact Form
 */

/**
 * Enqueue Contact Form Ajax
 */
function cg_contact_script() {
	if(is_page_template('contact.php'))
		wp_enqueue_script('cg-contact-form', plugin_dir_url(__FILE__) . 'js/contact-form.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'cg_contact_script');

/**
 * Contact Form Shortcode
 */
function contact_form_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'email' => get_option('admin_email')
	), $atts));
	
	$output = '';
	$output .= '<div class="thanks">';
		$output .= '<p><i class="fa fa-thumbs-up"></i> ' . esc_html__('Your email was successfully sent. Thanks.', 'Basic') . '</p>';
	$output .= '</div>';

	$output .= '<form action="" data-src="' . plugin_dir_url(__FILE__) . 'mail.php" id="contactform" method="post">';

		$output .= '<div class="section">';
			$output .= '<div class="input-wrap">';
				$output .= '<input type="text" name="name" id="name" placeholder="' . esc_html__('Name *', 'Basic') . '" class="required" />';

				if(isset($name_error) && $name_error != '') {
					$output .= '<span class="error">' . esc_html($name_error) . '</span>';
				}

			$output .= '</div>';
		$output .= '</div>';

		$output .= '<div class="section last">';
			$output .= '<div class="input-wrap">';
				$output .= '<input type="text" name="email" id="email" placeholder="' . esc_html__('Email *', 'Basic') . '" class="email required" />';

				if(isset($email_error) && $email_error != '') {
					$output .= '<span class="error">' . esc_html($email_error) . '</span>';
				}

			$output .= '</div>';
		$output .= '</div>';

		$output .= '<div class="section">';
			$output .= '<div class="input-wrap">';
				$output .= '<input type="text" name="phone" id="phone" placeholder="' . esc_html__('Phone', 'Basic') . '" />';
			$output .= '</div>';
		$output .= '</div>';

		$output .= '<div class="section last">';
			$output .= '<div class="input-wrap">';
				$output .= '<input type="text" name="subject" id="subject" placeholder="' . esc_html__('Subject', 'Basic') . '" />';
			$output .= '</div>';
		$output .= '</div>';

		$output .= '<div class="clear"></div>';

		$output .= '<div class="message">';
			$output .= '<textarea name="message" id="message" cols="45" rows="4" placeholder="' . esc_html__('Message *', 'Basic') . '" class="required"></textarea>';

			if(isset($message_error) && $message_error != '') {
				$output .= '<span class="error">' . esc_html($message_error) . '</span>';
			}

		$output .= '</div>';
		
		$output .= '<input type="hidden" name="admin_email" value="' . esc_attr($email) .'" />';
		$output .= '<input type="hidden" name="submit" id="submit" value="true" />';
		$output .= '<button class="submit" type="submit">' . esc_html__('Send', 'Basic') . '</button>';

	$output .= '</form>';

	return $output;

}
add_shortcode('contact-form', 'contact_form_shortcode');

/* Add shortcodes documentation to theme */
function add_menu() {
	add_theme_page(__('Basic Theme Shortcode Documentation', 'Basic'), __('Basic Shortcode Docs', 'Basic'), 'edit_theme_options', 'cg', 'my_custom_menu_page');
}
add_action('admin_menu', 'add_menu');

function my_custom_menu_page() {
	$output = '<div class="wrap">';

	$output .= '<h1>Basic Theme Shortcode Documentation</h1>';
	$output .= '<h2>Shortcodes</h2>';

	/* Nav */
	$output .= '
	<ul>
		<li style="display: inline"><a href="#rows">Rows</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#columns">Columns</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#buttons">Buttons</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#contactform">Contact Form</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#gallery">Gallery</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#fa">Font Awesome Icons</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#lightbox">Lightbox</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#accordion">Accordion</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#toggle">Toggle</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#tabs">Tabs</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#alert">Alert</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#cta">Call To Action</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#lead">Lead</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#list">List</a></li>
	</ul>
	';

	/* Rows */
	$output .= '<div id="rows" style="padding-top:20px"><h3>Rows</h3>';
	$output .= '<p>Creates a horizontal row. Used for separating and spacing content.</p>
	<p><strong>Shortcode:</strong> <code>[row][/row]</code></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; paddingtop</strong> - The amount of top padding in pixels. Default = 0</li>
		<li><strong>&middot; paddingbottom</strong> - The amount of bottom padding in pixels. Default = 0</li>
		<li><strong>&middot; textalign</strong> - Values: <strong>center</strong>, <strong>right</strong>. Default = <strong>left</strong></li>
	</ul></p>
	<p><strong>Example:</strong><pre>[row paddingtop="30" paddingbottom="30" textalign="center"][/row]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Columns */
	$output .= '<div id="columns" style="padding-top:20px"><h3>Columns</h3>';
	$output .= '<p>Used to create columns. The first column must always have the attribute <code>first="yes"</code> and the last must always have <code>last="yes"</code>.</p>
	<p><strong>Note:</strong> You\'ll want to use column shortcodes inside the <code>[row]</code> shortcode to make sure columns work properly.</p>
	<p><strong>Shortcodes:</strong><br />
	<code>[one-half][/one-half]</code><br />
	<code>[one-third][/one-third]</code><br />
	<code>[one-fourth][/one-fourth]</code><br />
	<code>[one-fifth][/one-fifth]</code><br />
	<code>[one-sixth][/one-sixth]</code><br />
	<code>[two-thirds][/two-thirds]</code><br />
	<code>[three-fourths][/three-fourths]</code><br />
	<code>[four-fifths][/four-fifths]</code><br />
	<code>[five-sixths][/five-sixths]</code><br />
	</p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; first</strong> - If is first column. Values: <strong>yes</strong></li>
		<li><strong>&middot; last</strong> - If is last column. Values: <strong>yes</strong></li>
		<li><strong>&middot; textalign</strong> - Values: <strong>center</strong>, <strong>right</strong>. Default = <strong>left</strong></li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[row]<br />[one-third first="yes" textalign="center"]Column 1[/one-third]<br />[one-third]Column 2[/one-third]<br />[one-third last="yes"]Column 3[/one-third]<br />[/row]</pre></p>
	<p><strong>Example 2:</strong>
	<pre>[row]<br />[three-fourths first="yes"]Column 1[/three-fourths]<br />[one-fourth last="yes"]Column 2[/one-fourth]<br />[/row]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Buttons */
	$output .= '<div id="buttons" style="padding-top:20px"><h3>Buttons</h3>';
	$output .= '<p>Used to create columns. The first column must always have the attribute <code>first="yes"</code> and the last must always have <code>last="yes"</code>.</p>
	<p><strong>Shortcode:</strong><code>[button link="http://url.com/"][/button]</code></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; link</strong> - The URL you want to link to. Default = <strong>#</strong></li>
		<li><strong>&middot; style</strong> - The button style. Values: <strong>1</strong>, <strong>2</strong>. Default = <strong>1</strong></li>
		<li><strong>&middot; size</strong> - The button size. Values: <strong>small</strong>, <strong>large</strong>. Default = <strong>small</strong></li>
		<li><strong>&middot; color</strong> - The button color. Values: <strong>darkgray</strong>, <strong>white</strong>, <strong>blue</strong>, <strong>turquoise</strong>, <strong>green</strong>, <strong>yellow</strong>, <strong>pink</strong>, <strong>red</strong>. Default = <strong>darkgray</strong></li>
		<li><strong>&middot; icon</strong> - The icon name you want to use. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window). Default = <strong>none</strong>.</li>
	</ul></p>
	<p><strong>Examples:</strong>
	<pre>[button link="http://url.com/"]Button Text[/button]<br />[button link="http://url.com/" size="large" color="turquoise" icon="shopping-cart"]Buy Now[/button]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Contact Form */
	$output .= '<div id="contactform" style="padding-top:20px"><h3>Contact Form</h3>';
	$output .= '<p>Displays a contact form.</p>
	<p><strong>Shortcode:</strong><code>[contact-form]</code></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; email</strong> - The email that the message will be sent to. Default = <strong>' . get_option('admin_email') . '</strong>.</li>
	</ul></p>
	<p><strong>Example</strong>:
	<pre>[contact-form email="email@email.com"]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Gallery */
	$output .= '<div id="gallery" style="padding-top:20px"><h3>Gallery</h3>';
	$output .= '<p>Same shortcode as the default WordPress gallery shortcode but with more options.</p>
	<p><strong>Shortcode:</strong><code>[gallery ids=""]</code></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; ids</strong> - A comma separated list of image ID\'s that you want to be included in the gallery. By adding the gallery by using WordPress\'s \'Add Media\' feature, this field will automatically be filled so you don\'t have to.</li>
		<li><strong>&middot; order</strong> - Designates the ascending or descending order of the \'orderby\' parameter listed below. Values: <strong>ASC</strong>, <strong>DESC</strong>. Default = <strong>ASC</strong> (ascending).</li>
		<li><strong>&middot; orderby</strong> - Sort retrieved posts by parameter. Default = <strong>menu_order ID</strong>. <a href="https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">Click here for all possible values</a> (opens in new window).</li>
		<li><strong>&middot; columns</strong> - The number of columns of images. Values: <strong>1, 2, 3, 4, 5, 6, 7, 8, 9</strong>. Default = <strong>3</strong></li>
		<li><strong>&middot; layout</strong> - The gallery layout to use. Values: <strong>grid</strong>, <strong>masonry</strong>, <strong>justified</strong>. Default = <strong>grid</strong>.</li>
		<li><strong>&middot; padding</strong> - The amount of padding, in pixels, to use around images. Default = <strong>30</strong>.</li>
		<li><strong>&middot; lightbox</strong> - Enable or disable lightbox. Values: <strong>true</strong>, <strong>false</strong>. Default = <strong>true</strong>.</li>
		<li><strong>&middot; rowheight</strong> - Row height only applies if layout is set to \'justified\'. Default = <strong>300</strong>.</li>
	</ul></p>
	<p><strong>Example</strong>:
	<pre>[gallery ids="1, 2, 3, 4, 5, 6"]</pre></p>
	<p><strong>Example 2</strong>:
	<pre>[gallery ids="1, 2, 3, 4, 5, 6" layout="justified" padding="2" rowheight="240"]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Font awesome */
	$output .= '<div id="fa" style="padding-top:20px"><h3>Font Awesome Icons</h3>';
	$output .= '<p>Used to create icons.</p>
	<p><strong>Shortcode:</strong><code>[fa icon="icon-name"][/fa]</code></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; icon</strong> - The icon name you want to use. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window).</li>
		<li><strong>&middot; size</strong> - The size of the icon. Values: <strong>1</strong>, <strong>2</strong>, <strong>3</strong>, <strong>4</strong>, <strong>5</strong>. Default = <strong>1</strong></li>
		<li><strong>&middot; color</strong> - The HEX code of the color you want to use. Example: <strong>#000000</strong> (black). Default = <strong>none</strong>. <a href="http://www.colorpicker.com/" target="_blank">HEX generator</a> (opens in new window).</li>
	</ul></p>
	<p><strong>Examples:</strong>
	<pre>[fa icon="star"]<br />[fa icon="star" size="4" color="#FFEA00"]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Lightbox */
	$output .= '<div id="lightbox" style="padding-top:20px"><h3>Lightbox</h3>';
	$output .= '<p>Used for images/galleries. The lightbox pops up when an image is clicked and shows the full image. Can be used for a single image and for image galleries.</p>
	<p><strong>Single Image Shortcode:</strong><code>[lightbox title="Image Title" link="http://large-image-url.com/"]http://small-image-url.com/[/lightbox]</code></p>
	<p><strong>Gallery Shortcode:</strong><pre>[lb_gallery]<br />[lb_image title="Image Title" link="http://large-image-url.com/"]http://small-image-url.com/[/lb_image]<br />[lb_image title="Image Title" link="http://large-image-url.com/"]http://small-image-url.com/[/lb_image]<br/ >[/lb_gallery]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; link</strong> - The URL to the full image to be displayed.</li>
		<li><strong>&middot; title</strong> - The image title.</li>
	</ul></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Accordion */
	$output .= '<div id="accordion" style="padding-top:20px"><h3>Accordion</h3>';
	$output .= '<p><strong>Shortcode:</strong><pre>[accordion]<br />[section title="Title"]Content[/section]<br />[section title="Title"]Content[/section]<br />[/accordion]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; title</strong> - The title of the section.</li>
		<li><strong>&middot; icon</strong> - The icon name you want to use. Will be displayed next to section title. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window).</li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[accordion]<br />[section title="Title" icon="icon-name"]Content[/section]<br />[section title="Title" icon="icon-name"]Content[/section]<br />[/accordion]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Toggle */
	$output .= '<div id="toggle" style="padding-top:20px"><h3>Toggle</h3>';
	$output .= '<p>Creates sections of content that can be toggled.</p>
	<p><strong>Shortcode:</strong><pre>[toggle id="unique-id" title="Title"]Content[/toggle]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; id</strong> - The ID of the toggle section. <strong>Note:</strong> The ID <strong>must</strong> be unique. ie. toggle1, toggle2, etc.</li>
		<li><strong>&middot; title</strong> - The title of the section.</li>
		<li><strong>&middot; icon</strong> - The icon name you want to use. Will be displayed next to section title. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window).</li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[toggle id="toggle1" title="Title" icon="icon-name"]Content[/toggle]<br />[toggle id="toggle2" title="Title" icon="icon-name"]Content[/toggle]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Tabs */
	$output .= '<div id="tabs" style="padding-top:20px"><h3>Tabs</h3>';
	$output .= '<p>Creates sections of content with linkable tabs.</p>
	<p>Instead of using a shortcode to create tabs, we use HTML. To add tabs, the best method is to add them via the shortcode generator in the <strong>Visual</strong> editor, and then switch to the <strong>Text</strong> editor to customize the tabs to make sure the HTML code remains valid.</p>
	<p>
	<img src="' . plugins_url( 'images/visualeditor.png', __FILE__ ) . '" />
	<img src="' . plugins_url( 'images/texteditor.png', __FILE__ ) . '" />
	</p>
	<p><strong>Code:</strong>
	<pre>&lt;div id="tabs">
	&lt;ul>
		&lt;li>&lt;i class="fa fa-paint-brush">&lt;/i> &lt;a href="#tabs-1">Tab 1&lt;/a>&lt;/li>
		&lt;li>&lt;i class="fa fa-rocket">&lt;/i> &lt;a href="#tabs-2">Tab 2&lt;/a>&lt;/li>
		&lt;li>&lt;i class="fa fa-wrench">&lt;/i> &lt;a href="#tabs-3">Tab 3&lt;/a>&lt;/li>
	&lt;/ul>
	&lt;div id="tabs-1">Tabbed section 1.&lt;/div>
	&lt;div id="tabs-2">Tabbed section 2.&lt;/div>
	&lt;div id="tabs-3">Tabbed section 1.&lt;/div>
&lt;/div>
</pre></p>
	<p>Notice the code: <code>&lt;i class="fa fa-paint-brush">&lt;/i></code>, <code>&lt;i class="fa fa-rocket">&lt;/i></code>, etc. This code will output an icon if you wish to use one. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for icon names</a> (opens in new window).</p>

	<p>Each tab must have a unique link. For example: <code>&lt;a href="#tabs-1">Tab 1&lt;/a></code> This links to the div with the id of tabs-1: <code>&lt;div id="tabs-1">Tabbed section 1.&lt;/div></code>.</p>
	
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Alert */
	$output .= '<div id="alert" style="padding-top:20px"><h3>Alert</h3>';
	$output .= '<p>Creates a notice/alert box.</p>
	<p><strong>Shortcode:</strong><pre>[alert type=""]Message goes here.[/alert]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; type</strong> - The alert/notice type. Values: <strong>note</strong>, <strong>error</strong>, <strong>success</strong>, <strong>info</strong>.</li>
		<li><strong>&middot; icon</strong> - The icon name you want to use. Will be displayed next to section title. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window).</li>
	</ul></p>
	<p><strong>Examples:</strong>
	<pre>[alert type="note"]This is a standard alert message.[/alert]<br />[alert type="error" icon="exclamation"]This is a standard error message.[/alert]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Call To Action */
	$output .= '<div id="cta" style="padding-top:20px"><h3>Call To Action</h3>';
	$output .= '<p>Creates a call to action box. Good for getting peoples attention to download or purchase something.</p>
	<p><strong>Shortcode:</strong><pre>[cta heading="Main text goes here" subtext="Sub text goes here" actiontext="Button Text" link="#"]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; heading</strong> - The main call to action text.</li>
		<li><strong>&middot; subtext</strong> - The sub text below the main heading text.</li>
		<li><strong>&middot; actiontext</strong> - The call to action button text. Example: Buy Now.</li>
		<li><strong>&middot; link</strong> - The URL you want to link to. Default = <strong>#</strong></li>
		<li><strong>&middot; style</strong> - The button style. Values: <strong>1</strong>, <strong>2</strong>. Default = <strong>1</strong></li>
		<li><strong>&middot; size</strong> - The button size. Values: <strong>small</strong>, <strong>large</strong>. Default = <strong>large</strong></li>
		<li><strong>&middot; color</strong> - The button color. Values: <strong>darkgray</strong>, <strong>white</strong>, <strong>blue</strong>, <strong>turquoise</strong>, <strong>green</strong>, <strong>yellow</strong>, <strong>pink</strong>, <strong>red</strong>. Default = <strong>darkgray</strong></li>
		<li><strong>&middot; icon</strong> - The icon name you want to use for the button. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window). Default = <strong>none</strong>.</li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[cta heading="Sign up for access to 1000\'s of Premium Themes!" subtext="We offer a 30 Day Money Back Guarantee, so joining is risk-free!" actiontext="Buy Now" link="#" icon="shopping-cart"]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Lead text */
	$output .= '<div id="lead" style="padding-top:20px"><h3>Lead Text</h3>';
	$output .= '<p>Makes text 165% larger. Good for the beginning of articles to grab peoples attention.</p>
	<p><strong>Shortcode:</strong><pre>[lead]Leading paragraph goes here[/lead]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; dropcap</strong> - Makes the first letter of the paragraph larger than the rest of the text. Good for grabbing attention & adding a little extra style. Default = <strong>no</strong></li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[lead dropcap="yes"]Content[/lead]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* List */
	$output .= '<div id="list" style="padding-top:20px"><h3>List</h3>';
	$output .= '<p>Makes an ordered list.</p>
	<p><strong>Shortcode:</strong><br /><pre>[list]<br />[li]List Item 1[/li]<br />[li]List item 2[/li]<br />[/list]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; icon</strong> - The icon name you want to show before each list item. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window). Default = <strong>none</strong>.</li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[list]<br />[li icon="icon-name"]List item 1.[/li]<br />[li icon="icon-name"]List item 2.[/li]<br />[/list]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	$output .= '</div><!-- end .wrap -->';

	echo $output;
}
?>
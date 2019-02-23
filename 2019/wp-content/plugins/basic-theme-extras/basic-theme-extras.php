<?php
/**
 * Plugin Name: Basic Theme Extras
 * Plugin URI:
 * Author: Caden Grant
 * Author URI:
 * Description: Extra functionality for the Basic theme.
 * Version: 1.0.0
 */

defined('ABSPATH') or die('No script kiddies please!');

function bte_load_plugin_textdomain() {
    load_plugin_textdomain( 'Basic', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'bte_load_plugin_textdomain' );

/**
 * Allow shortcodes in excerpts and in the Text Widget
 */
add_filter('the_excerpt', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');

/*
Plugin Name: WP Instagram Widget
Plugin URI: https://github.com/scottsweb/wp-instagram-widget
Description: A WordPress widget for showing your latest Instagram photos.
Version: 1.9.8
Author: Scott Evans
Author URI: http://scott.ee
Text Domain: wp-instagram-widget
Domain Path: /assets/languages/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Copyright © 2013 Scott Evans
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/

function wpiw_widget() {
	register_widget( 'null_instagram_widget' );
}
add_action( 'widgets_init', 'wpiw_widget' );

class null_instagram_widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'null-instagram-feed',
			__( 'Instagram', 'Basic' ),
			array(
				'classname' => 'null-instagram-feed',
				'description' => esc_html__( 'Displays your latest Instagram photos.', 'Basic' ),
				'customize_selective_refresh' => true
			)
		);
	}
	function widget( $args, $instance ) {
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		$username = empty( $instance['username'] ) ? '' : $instance['username'];
		$limit = empty( $instance['number'] ) ? 8 : $instance['number'];
		$size = empty( $instance['size'] ) ? 'large' : $instance['size'];
		$target = empty( $instance['target'] ) ? '_self' : $instance['target'];
		$link = empty( $instance['link'] ) ? '' : $instance['link'];
		echo $args['before_widget'];
		if ( ! empty( $title ) ) { echo $args['before_title'] . wp_kses_post( $title ) . $args['after_title']; };
		do_action( 'wpiw_before_widget', $instance );
		if ( $username != '' ) {
			$media_array = $this->scrape_instagram( $username );
			if ( is_wp_error( $media_array ) ) {
				echo wp_kses_post( $media_array->get_error_message() );
			} else {
				// filter for images only?
				if ( $images_only = apply_filters( 'wpiw_images_only', FALSE ) ) {
					$media_array = array_filter( $media_array, array( $this, 'images_only' ) );
				}
				// slice list down to required limit
				$media_array = array_slice( $media_array, 0, $limit );
				// filters for custom classes
				$ulclass = apply_filters( 'wpiw_list_class', 'instagram-pics' );
				$liclass = apply_filters( 'wpiw_item_class', '' );
				$aclass = apply_filters( 'wpiw_a_class', '' );
				$imgclass = apply_filters( 'wpiw_img_class', '' );
				$template_part = apply_filters( 'wpiw_template_part', 'parts/wp-instagram-widget.php' );
				?><ul class="<?php echo esc_attr( $ulclass ); ?>"><?php
				foreach ( $media_array as $item ) {
					// copy the else line into a new file (parts/wp-instagram-widget.php) within your theme and customise accordingly
					if ( locate_template( $template_part ) != '' ) {
						include locate_template( $template_part );
					} else {
						echo '<li class="'. esc_attr( $liclass ) .'"><a href="'. esc_url( $item['link'] ) .'" target="'. esc_attr( $target ) .'"  class="'. esc_attr( $aclass ) .'"><img src="'. esc_url( $item[$size] ) .'"  alt="'. esc_attr( $item['description'] ) .'" title="'. esc_attr( $item['description'] ).'"  class="'. esc_attr( $imgclass ) .'"/></a></li>';
					}
				}
				?></ul><?php
			}
		}
		$linkclass = apply_filters( 'wpiw_link_class', 'clear' );
		if ( $link != '' ) {
			?><p class="<?php echo esc_attr( $linkclass ); ?>"><a href="<?php echo trailingslashit( '//instagram.com/' . esc_attr( trim( $username ) ) ); ?>" rel="me" target="<?php echo esc_attr( $target ); ?>"><?php echo wp_kses_post( $link ); ?></a></p><?php
		}
		do_action( 'wpiw_after_widget', $instance );
		echo $args['after_widget'];
	}
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => __( 'Instagram', 'Basic' ), 'username' => '', 'size' => 'large', 'link' => __( '', 'Basic' ), 'number' => 8, 'target' => '_self' ) );
		$title = $instance['title'];
		$username = $instance['username'];
		$number = absint( $instance['number'] );
		$size = $instance['size'];
		$target = $instance['target'];
		$link = $instance['link'];
		?>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'Basic' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></label></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'username' ) ); ?>"><?php esc_html_e( 'Username', 'Basic' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'username' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'username' ) ); ?>" type="text" value="<?php echo esc_attr( $username ); ?>" /></label></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of photos', 'Basic' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" /></label></p>
		<!--<p><label for="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>"><?php esc_html_e( 'Photo size', 'Basic' ); ?>:</label>
			<select id="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'size' ) ); ?>" class="widefat">
				<option value="thumbnail" <?php selected( 'thumbnail', $size ) ?>><?php esc_html_e( 'Thumbnail', 'Basic' ); ?></option>
				<option value="small" <?php selected( 'small', $size ) ?>><?php esc_html_e( 'Small', 'Basic' ); ?></option>
				<option value="large" <?php selected( 'large', $size ) ?>><?php esc_html_e( 'Large', 'Basic' ); ?></option>
				<option value="original" <?php selected( 'original', $size ) ?>><?php esc_html_e( 'Original', 'Basic' ); ?></option>
			</select>
		</p>-->
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>"><?php esc_html_e( 'Open links in', 'Basic' ); ?>:</label>
			<select id="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'target' ) ); ?>" class="widefat">
				<option value="_self" <?php selected( '_self', $target ) ?>><?php esc_html_e( 'Current window (_self)', 'Basic' ); ?></option>
				<option value="_blank" <?php selected( '_blank', $target ) ?>><?php esc_html_e( 'New window (_blank)', 'Basic' ); ?></option>
			</select>
		</p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php esc_html_e( 'Link text', 'Basic' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" /></label></p>
		<?php
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['username'] = trim( strip_tags( $new_instance['username'] ) );
		$instance['number'] = ! absint( $new_instance['number'] ) ? 8 : $new_instance['number'];
		$instance['size'] = ( ( $new_instance['size'] == 'thumbnail' || $new_instance['size'] == 'large' || $new_instance['size'] == 'small' || $new_instance['size'] == 'original' ) ? $new_instance['size'] : 'large' );
		$instance['target'] = ( ( $new_instance['target'] == '_self' || $new_instance['target'] == '_blank' ) ? $new_instance['target'] : '_self' );
		$instance['link'] = strip_tags( $new_instance['link'] );
		return $instance;
	}
	// based on https://gist.github.com/cosmocatalano/4544576
	function scrape_instagram( $username ) {
		$username = strtolower( $username );
		$username = str_replace( '@', '', $username );
		if ( false === ( $instagram = get_transient( 'instagram-a5-'.sanitize_title_with_dashes( $username ) ) ) ) {
			$remote = wp_remote_get( 'http://instagram.com/'.trim( $username ) );
			if ( is_wp_error( $remote ) )
				return new WP_Error( 'site_down', esc_html__( 'Unable to communicate with Instagram.', 'Basic' ) );
			if ( 200 != wp_remote_retrieve_response_code( $remote ) )
				return new WP_Error( 'invalid_response', esc_html__( 'Instagram did not return a 200.', 'Basic' ) );
			$shards = explode( 'window._sharedData = ', $remote['body'] );
			$insta_json = explode( ';</script>', $shards[1] );
			$insta_array = json_decode( $insta_json[0], TRUE );
			if ( ! $insta_array )
				return new WP_Error( 'bad_json', esc_html__( 'Instagram has returned invalid data.', 'Basic' ) );
			if ( isset( $insta_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'] ) ) {
				$images = $insta_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'];
			} else {
				return new WP_Error( 'bad_json_2', esc_html__( 'Instagram has returned invalid data.', 'Basic' ) );
			}
			if ( ! is_array( $images ) )
				return new WP_Error( 'bad_array', esc_html__( 'Instagram has returned invalid data.', 'Basic' ) );
			$instagram = array();
			foreach ( $images as $image ) {
				$image['thumbnail_src'] = preg_replace( '/^https?\:/i', '', $image['thumbnail_src'] );
				$image['display_src'] = preg_replace( '/^https?\:/i', '', $image['display_src'] );
				// handle both types of CDN url
				if ( ( strpos( $image['thumbnail_src'], 's640x640' ) !== false ) ) {
					$image['thumbnail'] = str_replace( 's640x640', 's160x160', $image['thumbnail_src'] );
					$image['small'] = str_replace( 's640x640', 's320x320', $image['thumbnail_src'] );
				} else {
					$urlparts = wp_parse_url( $image['thumbnail_src'] );
					$pathparts = explode( '/', $urlparts['path'] );
					array_splice( $pathparts, 3, 0, array( 's160x160' ) );
					$image['thumbnail'] = '//' . $urlparts['host'] . implode( '/', $pathparts );
					$pathparts[3] = 's320x320';
					$image['small'] = '//' . $urlparts['host'] . implode( '/', $pathparts );
				}
				$image['large'] = $image['thumbnail_src'];
				if ( $image['is_video'] == true ) {
					$type = 'video';
				} else {
					$type = 'image';
				}
				$caption = __( 'Instagram Image', 'Basic' );
				if ( ! empty( $image['caption'] ) ) {
					$caption = $image['caption'];
				}
				$instagram[] = array(
					'description'   => $caption,
					'link'		  	=> trailingslashit( '//instagram.com/p/' . $image['code'] ),
					'time'		  	=> $image['date'],
					'comments'	  	=> $image['comments']['count'],
					'likes'		 	=> $image['likes']['count'],
					'thumbnail'	 	=> $image['thumbnail'],
					'small'			=> $image['small'],
					'large'			=> $image['large'],
					'original'		=> $image['display_src'],
					'type'		  	=> $type
				);
			}
			// do not set an empty transient - should help catch private or empty accounts
			if ( ! empty( $instagram ) ) {
				$instagram = base64_encode( serialize( $instagram ) );
				set_transient( 'instagram-a5-'.sanitize_title_with_dashes( $username ), $instagram, apply_filters( 'null_instagram_cache_time', HOUR_IN_SECONDS*2 ) );
			}
		}
		if ( ! empty( $instagram ) ) {
			return unserialize( base64_decode( $instagram ) );
		} else {
			return new WP_Error( 'no_images', esc_html__( 'Instagram did not return any images.', 'Basic' ) );
		}
	}
	function images_only( $media_item ) {
		if ( $media_item['type'] == 'image' )
			return true;
		return false;
	}
}

/**
* Flickr Widget
*/
class flickrWidget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'flickrwidget', 
			__('Basic - Flickr Widget', 'Basic'),
			array('description' => __('Displays your latest Flickr photos.', 'Basic'))
		);
	}
	
	public function widget($args, $instance) {
		extract ( $args );
		global $wpdp;
		
		$title = !empty($instance['title']) ? $instance['title'] : __( 'Flickr', 'Basic' );
		$flickr_id = !empty($instance['flickr_id']) ? $instance['flickr_id'] : '';
		$number = !empty($instance['number']) ? $instance['number'] : 8;
	
		echo $args['before_widget'];
		if ( $title ) echo $before_title . $title . $after_title;
		?>

        <div id="flickr">
            <div class="wrap">
                <div class="fix"></div>
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo intval( $number ); ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo esc_attr( $flickr_id ); ?>"></script>        
                <div class="fix"></div>
            </div>
        </div>
        
		<?php
		echo $args['after_widget'];
	}
	
    public function update( $new_instance, $old_instance ) {				
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		$instance['flickr_id'] = (!empty($new_instance['flickr_id'])) ? strip_tags($new_instance['flickr_id']) : '';
		$instance['number'] = (!empty($new_instance['number'])) ? strip_tags($new_instance['number']) : 8;
	    
	    return $instance;
    }
	
    public function form( $instance ) {				
		$title = !empty($instance['title']) ? $instance['title'] : __( 'Flickr', 'Basic' );
		$flickr_id = !empty($instance['flickr_id']) ? $instance['flickr_id'] : '';
		$number = !empty($instance['number']) ? $instance['number'] : 8;
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e('Title', 'Basic'); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'flickr_id' ) ); ?>"><?php _e('Flickr ID', 'Basic'); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'flickr_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'flickr_id' ) ); ?>" type="text" value="<?php echo esc_attr( $flickr_id ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php _e('Number of photos', 'Basic'); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>">
		</p>
	    <?php
	    /*$settings = get_option( 'widget_flickrwidget' );

		// check if anything's been sent
		if ( isset( $_POST['update_flickr'] ) ) {
			$settings['id'] = strip_tags( stripslashes( $_POST['flickr_id'] ) );
			$settings['number'] = strip_tags( stripslashes( $_POST['flickr_number'] ) );

			update_option( 'widget_flickrwidget', $settings );
		}

		echo '<p>
				<label for="flickr_id">Flickr ID (<a href="http://www.idgettr.com" target="_blank">idGettr</a>):
				<input id="flickr_id" name="flickr_id" type="text" class="widefat" value="' . $settings['id'] . '" /></label></p>';
		echo '<p>
				<label for="flickr_number">Number of photos:
				<input id="flickr_number" name="flickr_number" type="text" class="widefat" value="' . $settings['number'] . '" /></label></p>';
		echo '<input type="hidden" id="update_flickr" name="update_flickr" value="1" />';
    */
	}
}
add_action( 'widgets_init', create_function( '', 'return register_widget("flickrwidget");' ) );

/**
 * Recent Posts Widget
 */
class recentPosts extends WP_Widget {

    function __construct() {
		parent::__construct(
			'recentposts', 
			__('Basic - Recent Posts', 'Basic'),
			array(
				'description' => __('Displays the most recent blog posts with thumbnails.', 'Basic'))
		);
	}

    function widget( $args, $instance ) {
        extract( $args );
		global $wpdp;
        $title = apply_filters( 'widget_title', $instance['title'] );
		$query = array( 'showposts' => 4, 'nopaging' => 0, 'post_status' => 'publish', 'ignore_sticky_posts' => 1 );
		$r = new WP_Query( $query );
		if ( $r->have_posts() ) :
			echo $before_widget;

		if ( $title ) echo $before_title . $title . $after_title; ?>

		<ul class="recent-posts">
			<?php while( $r->have_posts() ): $r->the_post(); ?>
				<li<?php if( has_post_thumbnail() ) { ?> class="has-thumb"<?php } ?>>
		            <?php if( has_post_thumbnail() ) { ?>
		            	<div class="thumbnail">
							<a href="<?php echo get_permalink() ?>" title="<?php the_title();?>">
								<?php the_post_thumbnail( array( 55, 55 ), array( 'title'=> get_the_title(),'alt'=> get_the_title() ) ); ?>
							</a>
						</div>
		            <?php } ?>

					<div class="widget-post-meta">
						<span><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php echo esc_attr( get_the_title() ? get_the_title(): get_the_ID() ); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a></span>
						<span class="post-date"><?php the_time( 'F, j, Y' ); ?></span>
					</div>

				</li>
			<?php endwhile; ?>
		</ul>
		<div style="clear:both"></div>
		<?php echo $after_widget; ?>
		<?php wp_reset_query(); endif; 
	}

    function form( $instance ) {
    	$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Recent Posts', 'Basic' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e('Title', 'Basic'); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
        <?php 
    }

    function update( $new_instance, $old_instance ) {				
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
    }
}
add_action( 'widgets_init', create_function( '', 'return register_widget("recentposts");' ) );
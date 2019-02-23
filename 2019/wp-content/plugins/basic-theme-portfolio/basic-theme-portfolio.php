<?php
/**
 * Plugin Name: Basic Theme Portfolio Post Type
 * Description: Portfolio custom post type.
 * Version: 1.0.0
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function btp_load_plugin_textdomain() {
    load_plugin_textdomain( 'Basic', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'btp_load_plugin_textdomain' );

add_image_size( 'post-list', 200, 200, false );

function portfolio_post_type() {
	$labels = array(
		'name' => esc_html__( 'Portfolio', 'Basic' )
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'taxonomies' => array( 'portfolio_category' ),
		'rewrite' => array( 'slug' => 'portfolio-item' ),
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	);

	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type' );

/* Create Portfolio Categories */
function portfolio_category() {
	$labels = array(
		'name' => _x( 'Categories', 'categories', 'Basic' ),
		'singular_name' => _x( 'Category', 'category', 'Basic' )
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'portfolio-category' )
	);

	register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
}
add_action( 'init', 'portfolio_category' );


function portfolio_edit_columns( $columns ) {  
	$columns = array(  
	    'cb' => '<input type="checkbox" />',  
	    'title' => esc_html__( 'Title', 'Basic' ),
	    'type' => esc_html__( 'Category', 'Basic' ),
		'thumbnail' => esc_html__('Thumbnail', 'Basic'),
		'description' => esc_html__('Description', 'Basic')
	);

	return $columns;  
}

function portfolio_custom_columns($column){
	global $post;
	global $typenow;

	switch ($column) {
		case 'type':

			if($typenow == 'post') {
				echo get_the_term_list($post->ID, 'category', '', ', ','');
			} elseif($typenow == 'portfolio') {
		   		echo get_the_term_list($post->ID, 'portfolio_category', '', ', ','');
			}
		    break;
		case 'thumbnail':
		  	if(has_post_thumbnail()) {
		  		the_post_thumbnail('post-list');
		  	}
		  	break;
		case 'description':
		  	the_excerpt();
		  	break;
	}
}

add_filter( 'manage_posts_columns', 'portfolio_edit_columns' );
add_action( 'manage_posts_custom_column', 'portfolio_custom_columns', 10, 2 );

function rewrite_flush() {
	portfolio_post_type();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'rewrite_flush' );
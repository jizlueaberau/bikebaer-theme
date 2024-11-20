<?php

/* Add Customizer Functionality */
require get_template_directory() . '/includes/customizer-bikebaer.php';

/*
	Enqueue scripts and styles
*/

function bikebaer_assets() {

	// Enqueue CSS Files
	// wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap', array(), '1.0', 'all' );
	//wp_enqueue_style( 'bootstrap', get_theme_file_uri('css/bootstrap.css'), array(), 'v5.3.3', 'all' );
	//wp_enqueue_style( 'bikebaer', get_stylesheet_uri(), array('bootstrap'), '1.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'bikebaer_assets' );

//Remove Gutenberg Block Library CSS from loading on the frontend
//https://smartwp.com/remove-gutenberg-css/
function smartwp_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

/*
	Enable SVG Upload
	https://www.sven-hoerig.de/ratgeber/wordpress-svg-upload-aktivieren/
*/
function allow_svg_upload( $mimes ) {
	$mimes[ 'svg' ] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );

/*
	Removing Emoji's from Code
	https://fastwp.de/wordpress-emoji-support-deaktivieren/
*/
function remove_tinymce_emoji($plugins)
{
	if (!is_array($plugins)) { return array(); }
	return array_diff($plugins, array('wpemoji'));
}
function remove_emoji()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'remove_tinymce_emoji');
}
add_action('init', 'remove_emoji');

/*
	Remove Classic themes.css completely
	https://generatepress.com/forums/topic/remove-classic-themes-css-completely/
*/
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'classic-theme-styles' );
    wp_dequeue_style( 'global-styles' );
}, 20 );
<?php
add_action('wp_enqueue_scripts', 'add_theme_scripts');

function add_theme_scripts(){
	wp_enqueue_script('theme-js', THEME_URI.'/assets/compiled/theme.js');
	wp_enqueue_style( 'theme-css', THEME_URI.'/assets/compiled/theme.css');
	wp_enqueue_style( 'bootstrap-css', THEME_URI.'/assets/compiled/bootstrap.min.css');
}

function add_type_attribute($tag, $handle, $src) {
	if ( 'accordion-js' !== $handle ) {
		return $tag;
	}
	return '<script type="module" src="' . esc_url( $src ) . '"></script>';
}

add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);
<?php

$GLOBALS["COLORSCATEGORIES"] = [
	"audience" => "green",
	"project management" => "yellow",
	"development" => "orange"
];

add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link' );
remove_action('wp_head', 'rest_output_link_wp_head', 10 );
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action('wp_head', 'wlwmanifest_link');


function scripts() {
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/lib.css', array(), null, 'all' );
	wp_enqueue_script( 'lib-js', get_template_directory_uri() . '/assets/js/lib.js', array(), null, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'scripts', 10 );


function wp_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/main.css';
}
add_filter( 'stylesheet_uri', 'wp_stylesheet_uri', 10, 2 );

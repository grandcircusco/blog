<?php 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


function child_kihon_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'kihon_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'kihon_header_style',
		'admin-head-callback'    => '',
		'admin-preview-callback' => 'kihon_admin_header_image',
	) ) );
}
remove_action('after_setup_theme', 'kihon_custom_header_setup');
add_action( 'after_setup_theme', 'child_kihon_custom_header_setup' );
?>

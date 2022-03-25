<?php
/* Add css no tema filho*/
function alex_enqueue_styles() {
	// enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri());
	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/alex_2022/alex_estilo_multiloja.css?v='.time(), array('parent-theme'));
	/*alex add ?v='.time() - remove cache dessa folha de estilo	*/
	}
add_action('wp_enqueue_scripts', 'alex_enqueue_styles');

function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/alex_2022/alex_estilo_multiloja_celular.css');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
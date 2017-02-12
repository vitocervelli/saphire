<?php
/* Manera adecuada de añadir Scripts y Estilos */
function styles_js() {
	//	wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery.js', array(), '1.0.0', true );
	wp_enqueue_style( 'saphire-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/bootstrap/css/bootstrap.css', array(), '1.0.0');
	wp_enqueue_style( 'main-css', get_template_directory_uri().'/asset/css/main.css', array(), '1.0.0');
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/bootstrap/js/bootstrap.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'styles_js' );

//agrega la carga de imagenes destacadas en las entradas y paginas
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

//agrega funcion personalizada para mostrar imagen con un witd y height definidos	
add_image_size( 'custom-size', 768, 500, true );

//crea menu personalizados en wordpress
register_nav_menus( array(
		'menu_primary' => esc_html__( 'Primary Menu', 'saphire' ),
	) );
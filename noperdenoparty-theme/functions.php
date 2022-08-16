<?php

function noperdenoparty_support(){
	add_theme_support('custom-logo');
	add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'noperdenoparty_support');

function noperdenoparty_register_style(){

	wp_enqueue_style('css', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
	wp_enqueue_style('main-css', get_template_directory_uri() . "/css/main.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'noperdenoparty_register_style');


function noperdenoparty_register_script(){

	wp_enqueue_style('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0'); 
}

add_action('wp_enqueue_scripts', 'noperdenoparty_register_script');

function noperdenoparty_menu(){

$location = array(
'primary' => "Header menu",
'footer'  => "Footer menu"
);

  register_nav_menus($location);
}

add_action('init','noperdenoparty_menu');

function acf_settings() {
  
    register_post_type( 'style-settings',
        array(
            'labels' => array(
                'name' => __( 'Style settings' ),
                'singular_name' => __( 'Style settings' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'style-settings'),
            'show_in_rest' => true,
  
        )
    );
}

add_action( 'init', 'acf_settings' );


add_action( 'after_setup_theme', 'noperdenoparty_thumbnail_size' );
function noperdenoparty_thumbnail_size(){
    add_image_size( 'single', 2000, 700, true );

}
?>

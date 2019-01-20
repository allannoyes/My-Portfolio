<?php

function an_theme_scripts() {
  // wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_style( 'main', get_template_directory_uri() . 'style/style.css');

}
add_action( 'wp_enqueue_scripts', 'an_theme_scripts' );


function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_filter('jpeg_quality', function($arg){return 100;});

?>

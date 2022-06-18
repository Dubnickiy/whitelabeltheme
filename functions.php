<?php
function my_files(){
    wp_enqueue_style('main_style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'my_files');
// Set up the WordPress Theme logo feature.
    add_theme_support( 'custom-logo' );

    function theme_enqueue_styles() {

  // Get the theme data.
  $the_theme = wp_get_theme();

  $suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
  // Grab asset urls.
  $theme_styles  = "/css/child-theme{$suffix}.css";
  $theme_scripts = "/js/child-theme{$suffix}.js";

  wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/slick/slick.css', array());
  
  
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/script.js' , array());
  wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/slick/slick.min.js' , array());

  wp_enqueue_style( 'bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '4.6.0' );
  wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '4.6.0');
}
add_theme_support( 'menus' ); 
add_filter('use_block_editor_for_post_type', '__return_false');
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


function my_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');
add_post_type_support( 'page', 'excerpt' );
?>


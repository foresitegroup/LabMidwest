<?php
// We want Featured Images on Pages and Posts
add_theme_support( 'post-thumbnails' );

// Define menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Make videos autoplay with Responsive Lightbox / Swipebox
add_action( 'wp_enqueue_scripts', 'enqueue_and_register_my_scripts' );
function enqueue_and_register_my_scripts(){
  wp_deregister_script(
    'responsive-lightbox-swipebox', plugins_url( 'assets/swipebox/js/jquery.swipebox.min.js', __FILE__ ), array( 'jquery' )
  );
  wp_register_script(
    'responsive-lightbox-swipebox', get_stylesheet_directory_uri() . '/inc/jquery.swipebox.min.js', array( 'jquery' )
  );
}
?>
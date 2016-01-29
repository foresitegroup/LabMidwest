<?php
// We want Featured Images on Pages and Posts
add_theme_support( 'post-thumbnails' );

// Define menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'blog-menu' => __( 'Blog Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_action( 'wp_enqueue_scripts', 'enqueue_and_register_my_scripts' );
function enqueue_and_register_my_scripts(){
  // Make videos autoplay with Responsive Lightbox / Swipebox
  wp_deregister_script('responsive-lightbox-swipebox', plugins_url( 'assets/swipebox/js/jquery.swipebox.min.js', __FILE__ ), array('jquery'));
  wp_register_script('responsive-lightbox-swipebox', get_stylesheet_directory_uri() . '/inc/jquery.swipebox.min.js', array('jquery'));

  // Load jQuery plugins
  if (is_front_page()) wp_enqueue_script('cycle', get_stylesheet_directory_uri() . '/inc/jquery.cycle2.min.js', array('jquery'));
  wp_enqueue_script('match-height', get_stylesheet_directory_uri() . '/inc/jquery.matchHeight-min.js', array('jquery'));
}

// Don't allow Insert Pages plugin to insert a wrapper (which breaks some things)
remove_filter( 'insert_pages_wrap_content', array( $insertPages_plugin, 'insertPages_wrap_content' ));

// Home page blog excerpt
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'....';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
?>
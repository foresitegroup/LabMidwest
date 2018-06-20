<?php
// We want Featured Images on Pages and Posts
add_theme_support( 'post-thumbnails' );

// Define menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'blog-menu' => __( 'Blog Menu' ),
      'footer-menu-col1' => __( 'Footer Menu Column 1' ),
      'footer-menu-col2' => __( 'Footer Menu Column 2' ),
      'footer-menu-col3' => __( 'Footer Menu Column 3' ),
      'footer-menu-col4' => __( 'Footer Menu Column 4' )
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

// Wrap video embed code in DIV for responsive goodness
add_filter( 'embed_oembed_html', 'my_oembed_filter', 10, 4 ) ;
function my_oembed_filter($html, $url, $attr, $post_ID) {
  $return = '<div class="video">'.$html.'</div>';
  return $return;
}

// Ninja Forms
add_filter( 'ninja_forms_i18n_front_end', 'my_custom_ninja_forms_i18n_front_end' );
function my_custom_ninja_forms_i18n_front_end( $strings ) {
  $strings['fieldsMarkedRequired'] = '* Required';
  return $strings;
}

// Add subtitle field to pages
add_action('edit_form_after_title', 'add_after_title');
function add_after_title() {
  global $post, $wp_meta_boxes;

  do_meta_boxes(get_current_screen(), 'after_title', $post);

  unset($wp_meta_boxes['post']['after_title']);
}

add_action('add_meta_boxes', 'fg_subtitle_mb');
function fg_subtitle_mb() {
  add_meta_box('fg_subtitle_mb', 'Annual Report PDF', 'fg_subtitle_mb_content', 'page', 'after_title', 'high');
}

function fg_subtitle_mb_content($post) {
  $meta = get_post_meta($post->ID);
  ?>
  <input type="text" name="fg_subtitle" placeholder="Enter subtitle here" value="<?php if (isset($post->fg_subtitle)) echo esc_attr($post->fg_subtitle); ?>">
  <?php
}

add_action('admin_head', 'fg_subtitle_css');
function fg_subtitle_css() {
  if (get_post_type() == 'page') {
    echo '<style>
      #fg_subtitle_mb { border: 0; background: transparent; box-shadow: none; }
      #fg_subtitle_mb .handlediv, #fg_subtitle_mb H2 { display: none; }
      #fg_subtitle_mb .inside { padding: 0 }
      #fg_subtitle_mb INPUT { width: 100%; padding: 3px 8px; font-size: 1.4em; line-height: 1em; height: 1.7em; }
    </style>';
  }
}

add_action('save_post', 'fg_subtitle_save');
function fg_subtitle_save($post_id) {
  update_post_meta($post_id, 'fg_subtitle', $_POST['fg_subtitle']);
}

add_filter('manage_pages_columns', 'fg_subtitle_pages_columns');
function fg_subtitle_pages_columns($columns) {
  $new_columns = array();

  foreach ($columns as $column => $value) {
    $new_columns[$column] = $value;
    if ('title' == $column) $new_columns['fg_subtitle'] = 'Subtitle';
  }

  return $new_columns;
}

add_action('manage_pages_custom_column', 'fg_subtitle_pages', 10, 2);
function fg_subtitle_pages($column, $post_id) {
  switch ($column) {
    case 'fg_subtitle':
      echo get_post_meta($post_id, 'fg_subtitle', true);
      break;
  }
}

// Remove visual editor on certain pages
add_filter('user_can_richedit', 'fg_remove_visual_editor');
function fg_remove_visual_editor($can) {
  global $post;

  if (
    $post->ID == 15 ||
    $post->ID == 72 ||
    $post->ID == 88 ||
    $post->ID == 114 ||
    $post->ID == 144 ||
    $post->ID == 575
  ) return false;

  return $can;
}
?>
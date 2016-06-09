<?php
/**
 * baileigh Class
 *
 * @author   ENGAG3
 * @since    1.0
 */

// // Remove parrent styles
// function PREFIX_remove_styles() {
//   wp_dequeue_style( 'source-sans-pro' );
//   wp_deregister_style( 'source-sans-pro' );
// }
// add_action( 'enqueue_embed_scripts', array( $this, 'PREFIX_remove_styles' ) );

 /**
  * Enqueue baileigh Styles
  * @return void
  */
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

  // wp_enqueue_style( 'inconsolata', '//fonts.googleapis.com/css?family=Inconsolata:400,700' );

  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );

	wp_register_script('baileigh-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'),'1.1', true);
	wp_enqueue_script('baileigh-script');

	wp_register_script('flexslider', get_stylesheet_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('jquery'),'1.1', true);
	wp_enqueue_script('flexslider');

	// wp_register_script('stickyJS', get_stylesheet_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'),'1.2', true);
	// wp_enqueue_script('stickyJS');

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



function mason_script() {
  wp_enqueue_script( 'jquery-masonry' );
}
add_action( 'wp_enqueue_scripts', 'mason_script' );




if ( ! isset( $content_width ) ) {
	$content_width = 850;
}

// This theme uses wp_nav_menu() these locations.
// register_nav_menus( array(
//   'account_menu' => esc_html__( 'Account Dash', 'engag3' ),
// ) );


// Add Image size(s)
add_image_size( 'blog-thumbnail', 400, 250, true ); // Unlimited Height Mode


add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="video-container">' . $html . '</div>';
}

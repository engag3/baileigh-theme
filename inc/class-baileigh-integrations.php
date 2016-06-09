<?php
/**
 * baileigh_Integrations Class
 *
 * @author   WooThemes
 * @since    2.0
 */


 // Remove custom fields metabox
function remove_post_custom_fields() {
	remove_meta_box( 'postcustom' , 'post' , 'normal' );
	remove_meta_box( 'postcustom' , 'page' , 'normal' );
	remove_meta_box( 'postcustom' , 'product' , 'normal' );
	remove_meta_box( 'postcustom' , 'shop_order' , 'normal' );
	remove_meta_box( 'postcustom' , 'project' , 'normal' );
}
add_action( 'admin_menu' , 'remove_post_custom_fields' );


function remove_page_excerpt_field() {
	remove_meta_box( 'postexcerpt' , 'page' , 'normal' );
	remove_meta_box( 'postexcerpt' , 'post' , 'normal' );
	remove_meta_box( 'postexcerpt' , 'project' , 'normal' );
}
add_action( 'admin_menu' , 'remove_page_excerpt_field' );


function remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );


// Remove Storefront header content
function engag3_remove_storefront_header_content() {
	remove_action( 'storefront_header', 'storefront_social_icons', 	10 );
	remove_action( 'storefront_header', 'storefront_site_branding', 	20 );
	remove_action( 'storefront_header', 'storefront_secondary_navigation', 	30 );
	remove_action( 'storefront_header', 'storefront_product_search', 	40 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 	42 );
	remove_action( 'storefront_header', 'storefront_primary_navigation', 	50 );
	remove_action( 'storefront_header', 'storefront_header_cart', 	60 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 	68 );
}
add_action( 'init', 'engag3_remove_storefront_header_content' );



// Remove sidebar on single product page
function remove_storefront_footer_credit() {
	remove_action( 'storefront_footer', 'storefront_credit',			20 );
}
add_action( 'init', 'remove_storefront_footer_credit' );


// Remove footer bar
function remove_storefront_footer_bar() {
	remove_action( 'storefront_footer', 'storefront_handheld_footer_bar',			999 );
}
add_action( 'init', 'remove_storefront_footer_bar', 999 );


// Remove blog elemnts
function remove_storefront_blog() {
	remove_action( 'storefront_loop_post',         'storefront_post_meta',        20 );
	remove_action( 'storefront_loop_post',         'storefront_post_content',     30 );
	remove_action( 'storefront_single_post',         'storefront_post_meta',        20 );
	remove_action( 'storefront_single_post',         'storefront_post_content',     30 );
}
add_action( 'init', 'remove_storefront_blog');
//
// function filter_media_comment_status( $open, $post_id ) {
// 	$post = get_post( $post_id );
// 	if( $post->post_type == 'attachment' ) {
// 		return false;
// 	}
// 	return $open;
// }
// add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);


function remove_pods_shortcode_button () {
    remove_action( 'media_buttons', array( PodsInit::$admin, 'media_button' ), 12 );
}
add_action( 'admin_init', 'remove_pods_shortcode_button', 14 );


add_filter('contextual_help_list','contextual_help_list_remove');
function contextual_help_list_remove() {
    global $current_screen;
    $current_screen->remove_help_tab( 'options-press' );
}

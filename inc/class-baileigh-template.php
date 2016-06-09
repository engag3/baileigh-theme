<?php
/**
 * baileigh_Template Class
 *
 * @author   ENGAG3
 * @since    1.0
 */


 if ( ! function_exists( 'engag3_navigation' ) ) {
	/**
	 * Display Secondary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function engag3_navigation() {

    if ( is_page_template( 'templates/blank-slate.php' ) ) {

    } else { ?>

      <?php
      FLBuilder::render_query( array(
          'post_type' => 'fl-builder-template',
          'p'         => 5400
      ) );
      ?>

    <?php } // end if
	}
}
add_action( 'storefront_header', 'engag3_navigation',     10 );



// Remove sidebar on single product page
function remove_engag3_menu() {
  if ( is_page_template( 'templates/blank-slate.php' ) ) {
    remove_action( 'storefront_header', 'engag3_navigation', 10 );
  }
}
add_action( 'init', 'remove_engag3_menu' );




 if ( ! function_exists( 'engag3_footer_logo' ) ) {
	/**
	 * Display Footer logo
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function engag3_footer_logo() {
     ?>

     <div class="footer_logo">
       <a href="<?php echo get_site_url(); ?>">

         <!-- <img src="http://woocommerce-19988-43796-117042.cloudwaysapps.com/wp-content/uploads/2016/05/EM_icon_grg_001.png" alt="ENGAG3" /> -->

       </a>
     </div>
    <?php
	}
}
add_action( 'storefront_footer', 'engag3_footer_logo',     5 );


 if ( ! function_exists( 'engag3_footer_credit' ) ) {
	/**
	 * Display Footer credit
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function engag3_footer_credit() {

     FLBuilder::render_query( array(
         'post_type' => 'fl-builder-template',
         'p'         => 5403
     ) );

	}
}
add_action( 'storefront_footer', 'engag3_footer_credit',     20 );


// Add blog templates


if ( ! function_exists( 'baileigh_post_content' ) ) {
	/**
	 * Display the post content with a link to the single post
	 *
	 * @since 1.0.0
	 */
	function baileigh_post_content() {
		?>
		<div class="entry-content" itemprop="articleBody">
		<?php

		the_content(
			sprintf(
				__( 'Continue reading %s', 'baileigh' ),
				'<span class="screen-reader-text">' . get_the_title() . '</span>'
			)
		);

		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'baileigh' ),
			'after'  => '</div>',
		) );
		?>
		</div><!-- .entry-content -->
		<?php
	}
}
add_action( 'storefront_loop_post',         'baileigh_post_content',     20 );
add_action( 'storefront_single_post',         'baileigh_post_content',     20 );



if ( ! function_exists( 'baileigh_post_header' ) ) {
	/**
	 * Display the post content with a link to the single post
	 *
	 * @since 1.0.0
	 */
	function baileigh_post_header() {
		?>
      <div class="post_banner">
        <a href="<?php echo get_permalink(); ?>">
          <?php storefront_post_thumbnail( 'full' ); ?>
        </a>
      </div>
		<?php
	}
}
add_action( 'storefront_loop_post',         'baileigh_post_header',     10 );


if ( ! function_exists( 'baileigh_post_single_header' ) ) {
	/**
	 * Display the post content with a link to the single post
	 *
	 * @since 1.0.0
	 */
	function baileigh_post_single_header() {
		?>
      <div class="post_banner">
          <?php storefront_post_thumbnail( 'full' ); ?>
      </div>
		<?php
	}
}
add_action( 'storefront_single_post',         'baileigh_post_single_header',     10 );

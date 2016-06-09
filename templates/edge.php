<?php
 /**
  * Template Name: Edge to edge
  *
  * @link https://codex.wordpress.org/Template_Hierarchy
  *
  * @package engag3
  */
  get_header(); ?>

  	<div id="primary" class="content-area">
  		<main id="main" class="site-main" role="main">

  			<?php while ( have_posts() ) : the_post();

  				do_action( 'storefront_page_before' ); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content" itemprop="mainContentOfPage">
              <?php the_content(); ?>
              <?php
                wp_link_pages( array(
                  'before' => '<div class="page-links">' . __( 'Pages:', 'storefront' ),
                  'after'  => '</div>',
                ) );
              ?>
            </div><!-- .entry-content -->

          </article><!-- #post-## -->


  				<?php /**
  				 * Functions hooked in to storefront_page_after action
  				 *
  				 * @hooked storefront_display_comments - 10
  				 */
  				do_action( 'storefront_page_after' );

  			endwhile; // End of the loop. ?>

  		</main><!-- #main -->
  	</div><!-- #primary -->

  <?php
  get_footer();

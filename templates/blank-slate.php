<?php
 /**
  * Template Name: Blank Slate
  *
  * @link https://codex.wordpress.org/Template_Hierarchy
  *
  * @package engag3
  */
  get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <article  <?php post_class(); ?>>

          <div class="entry-content--wide" itemprop="mainContentOfPage">
            <?php the_content(); ?>
            <?php
              wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'storefront' ),
                'after'  => '</div>',
              ) );
            ?>
          </div><!-- .entry-content -->

        </article><!-- #post-## -->

      <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

  <?php get_footer();

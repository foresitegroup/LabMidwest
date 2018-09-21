<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
			  <div class="banner banner-news">
					<div class="site-width">
						<?php //wp_nav_menu( array( 'theme_location' => 'blog-menu' ) ); ?>
						<!-- <a href="<?php //echo home_url(); ?>/news" class="blog-home-link current-menu-item">VIEW ALL</a> -->
						<h1>News</h1>
					</div>
				</div>

				<div class="site-width">
			<?php endif; ?>

			<?php
			// $count = 1;
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				if ( is_home() && ! is_front_page() ) :
				  //get_template_part( 'content-blog', get_post_format() );
				  include( locate_template( 'content-blog.php' ) );
				else:
					get_template_part( 'content-blog-single', get_post_format() );
				endif;
        
				// if ($count == 3) { echo "<div style=\"clear: both;\"></div>"; $count = 1; } else { $count++; }

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

			if ( is_home() && ! is_front_page() ) : echo "</div>"; endif;

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
		<div class="footer-gray"></div>
	</div><!-- .content-area -->

<?php get_footer(); ?>

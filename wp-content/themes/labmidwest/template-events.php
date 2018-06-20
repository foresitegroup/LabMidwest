<?php
/* Template Name: Events */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();
  ?>

    <div class="banner banner-events"<?php if (get_post_thumbnail_id() != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ");\""; ?>>
      <div class="site-width">
        <h1><?php the_title(); ?></h1>
        <?php echo $post->fg_subtitle; ?>
      </div>
    </div>

    <div class="site-width">
    	<?php the_content(); ?>
    </div>

  <?php
  // End the loop.
  endwhile;
  ?>

  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
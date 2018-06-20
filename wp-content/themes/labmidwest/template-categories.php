<?php
/* Template Name: Category */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();
  ?>

    <div class="banner banner-category">
      <div class="site-width-left">
        <div class="site-width-left-content">
          <h1><?php echo get_the_title(); ?></h1>
          <?php echo $post->fg_subtitle; ?>
        </div>
      </div>
      <div class="site-width-right"<?php if (get_post_thumbnail_id() != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ");\""; ?>>
      </div>
      <div style="clear: both;"></div>
    </div>

    <?php the_content(); ?>

  <?php
  // End the loop.
  endwhile;
  ?>

  </main><!-- .site-main -->

  <div id="rmi" class="rmi-category">
    <div class="site-width">
      <div class="rmi-header">
        <h2>FOR MORE INFORMATION</h2>
        Contact us directly at (414) 258-6415 or fill out the form below.
      </div>

      <?php if(function_exists('ninja_forms_display_form')){ ninja_forms_display_form(5); } ?>
    </div>
  </div>

</div><!-- .content-area -->

<?php get_footer(); ?>
<?php
/* Template Name: Product Page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();
  ?>

    <div class="banner banner-product full-width"<?php if (get_post_thumbnail_id() != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ");\""; ?>>
<!--  <div class="site-width-left">
        <div class="site-width-left-content">
          <h1><?php //echo get_the_title(); ?></h1>
          <?php //the_subtitle(); ?>
        </div>
      </div>
      <div class="site-width-right"<?php //if (get_post_thumbnail_id() != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ");\""; ?>>
      </div>
      <div style="clear: both;"></div> -->
    </div>

    <div class="site-width">
      <div class="product product-header">
        <div class="product-image"><h2><?php echo get_the_title(); ?></h2></div>
        <div class="product-info"><hr></div>
      </div>

    	<?php the_content(); ?>
    </div>

  <?php
  // End the loop.
  endwhile;
  ?>

  </main><!-- .site-main -->

  <div id="rmi">
    <div class="site-width">
      <div class="rmi-header">
        <h2>INTERESTED IN A PRODUCT?</h2>
        Contact us directly at (414) 258-6415 or fill out the form below.
      </div>

      <?php if(function_exists('ninja_forms_display_form')){ ninja_forms_display_form(5); } ?>
    </div>
  </div>

</div><!-- .content-area -->

<?php get_footer(); ?>
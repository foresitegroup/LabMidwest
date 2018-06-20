<?php
/* Template Name: Services */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();
  ?>

    <div class="banner banner-services"<?php if (get_post_thumbnail_id() != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ");\""; ?>>
      <div class="site-width">
        <h1><?php the_title(); ?></h1>
        <?php echo $post->fg_subtitle; ?>
      </div>
    </div>

    <div class="site-width services">
    	<?php the_content(); ?>
    </div>

  <?php
  // End the loop.
  endwhile;
  ?>

  </main><!-- .site-main -->

  <div class="contact-prefooter">
    <div class="site-width">
      <?php $prefooter = get_post(144); echo $prefooter->post_content; ?>
    </div>
  </div>
  
  <div class="site-width services-form">
    <?php
    $form = get_post(551);
    echo $form->post_content;
    echo do_shortcode('[ninja_forms id=1]');
    ?>
  </div>
</div><!-- .content-area -->

<?php get_footer(); ?>
<div class="banner-home">
  
</div>

<div class="home-content">
  <div class="site-width">
  	<?php the_content(); ?>
  </div>
</div>

<div class="home-product-video">
  <div class="home-video-background"<?php if (get_post_thumbnail_id(15) != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id(15)) . ");\""; ?>>
    <div class="overlay"></div>
  </div>
  <div class="site-width">
    <div class="home-featured-product">
      <?php echo do_shortcode('[insert page="featured-product" display="content"]'); ?>
    </div>
    <div class="home-video">
      <?php echo do_shortcode('[insert page="video" display="content"]'); ?>
    </div>
  </div>
</div>

Oh what a hack....
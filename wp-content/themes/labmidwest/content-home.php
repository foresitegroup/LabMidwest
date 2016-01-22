<div class="banner-home">
  
</div>

<div class="home-content">
  <div class="site-width">
  	<?php the_content(); ?>
  </div>
</div>

<div class="home-product-video">
  <div class="site-width-left">
    <div class="site-width-left-content">
      <?php echo do_shortcode('[insert page="featured-product" display="content"]'); ?>
    </div>
  </div>
  <div class="site-width-right"<?php if (get_post_thumbnail_id(15) != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id(15)) . ");\""; ?>>
    <div class="overlay"></div>
      <div class="site-width-right-content">
        <?php echo do_shortcode('[insert page="video" display="content"]'); ?>
      </div>
  </div>
  <div style="clear: both;"></div>
</div>

<div class="home-philosophy-news">
  <div class="site-width-left" data-mh="hpn-height">
    <div class="site-width-left-content">
      <?php echo do_shortcode('[insert page="our-philosophy" display="content"]'); ?>
    </div>
  </div>
  <div class="site-width-right" data-mh="hpn-height">
    <div class="overlay">
      <?php
      $tickler_query = new WP_Query('posts_per_page=3');
      if ($tickler_query->have_posts()) {
        while ($tickler_query->have_posts()) {
          $tickler_query->the_post();
          ?>
          <div class="home-news-background"<?php if (get_post_thumbnail_id() != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ");\""; ?>>
            <?php if (get_post_thumbnail_id() != "") { ?><div class="overlay"><?php } ?>
              <div class="home-news-content">
                <h2>FEATURED NEWS</h2>
                <span class="home-news-date"><?php echo get_the_date(); ?></span>
                <h3><?php echo get_the_title(); ?></h3>
                <?php echo excerpt(42); ?>
                <a href="<?php echo get_permalink(); ?>">READ MORE</a>
              </div>
            <?php if (get_post_thumbnail_id() != "") { ?></div><?php } ?>
          </div>
          <?php
        }
      }
      wp_reset_postdata();
      ?>
    </div>
  </div>
  <div style="clear: both;"></div>
</div>


<br><br><br><br><br><br><br><br><br>

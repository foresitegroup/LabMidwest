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

<div class="site-width home-prefooter">
  <div class="one-half">
    <div class="col1" data-mh="pf-height">
      <h3>SALES &amp; SERVICE</h3>
      Providing the best sales &amp; service to our customers, speak to one of our sales representatives today:<br>
      <br>
      <span class="phone">(414) 258-6415</span><br>
      <br>
      <a href="#" class="lm-button">CONTACT US</a>
    </div>

    <div class="col2" data-mh="pf-height">
      <h3>REQUEST MORE INFORMATION</h3>
      For more information contact us directly or follow the link below to complete the form for your RMI.<br>
      <br>
      <a href="#" class="lm-button">REQUEST MORE INFO</a>
    </div>
  </div>

  <div class="one-half last">
    <h3>UPCOMING EVENTS</h3>
    <?php echo do_shortcode('[calendar id="43"]'); ?>
  </div>
</div>


<br><br><br><br><br><br><br><br><br>

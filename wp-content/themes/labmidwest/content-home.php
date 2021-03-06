<div class="banner-home">
  <div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="8000" data-cycle-pager-template="<span></span>">
    <p class="cycle-pager"></p>
    <?php $slider = get_post(72); echo $slider->post_content; ?>
  </div> <!-- END cycle-slideshow -->
</div>

<div class="home-content">
  <div class="site-width">
  	<?php the_content(); ?>
  </div>
</div>

<div class="home-product-video">
  <div class="site-width-left">
    <div class="site-width-left-content">
      <?php $featured = get_post(13); echo wpautop($featured->post_content); ?>
    </div>
  </div>
  <div class="site-width-right"<?php if (get_post_thumbnail_id(15) != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id(15)) . ");\""; ?>>
    <div class="overlay"></div>
      <div class="site-width-right-content">
        <?php $video = get_post(15); echo $video->post_content; ?>
      </div>
  </div>
  <div style="clear: both;"></div>
</div>

<div class="home-philosophy-news">
  <div class="site-width-left" data-mh="hpn-height">
    <div class="site-width-left-content">
      <?php $philosophy = get_post(33); echo $philosophy->post_content; ?>
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
      <?php $sales = get_post(47); echo wpautop($sales->post_content); ?>
    </div>

    <div class="col2" data-mh="pf-height">
      <?php $moreinfo = get_post(49); echo wpautop($moreinfo->post_content); ?>
    </div>
  </div>

  <div class="one-half last">
    <h3>UPCOMING EVENTS</h3>
    <?php echo do_shortcode('[my_calendar_upcoming before="0" after="2" type="event" template="<div class=fg-event-date><span>{eventday}</span></div><div class=fg-event-details><h5>{daterange}</h5>{title}</div>" show_today="yes"]'); ?>
    <a href="events" class="lm-button">VIEW ALL EVENTS</a>
  </div>
</div>
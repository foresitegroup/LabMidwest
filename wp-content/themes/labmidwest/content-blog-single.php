<div class="banner banner-news-single"<?php if (has_post_thumbnail()) echo "style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . "\""; ?>>
  <div class="overlay">
    <div class="site-width">
      <h2><?php the_title(); ?></h2>
      <span style="color: #60ADE2;">Posted on</span> <?php echo get_the_date(); ?>
    </div>
  </div>
</div>

<div class="site-width">
  <div class="blog-entry blog-entry-single">
    <?php the_content(); ?>
  </div>
</div>
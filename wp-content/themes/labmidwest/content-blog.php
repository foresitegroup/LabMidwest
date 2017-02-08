<a href="<?php the_permalink(); ?>" class="blog-entry one-third">
  <?php the_title( '<h2>', '</h2>' ); ?>

  <div class="blog-entry-image"<?php if (has_post_thumbnail()) echo "style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ")\""; ?>>
    <div class="overlay"><span class="lm-button">VIEW</span></div>
  </div>

  <?php echo excerpt(26); ?>
  
  <div class="blog-entry-footer">
    <span>READ MORE</span>

    <?php echo get_the_date(); ?>
  </div>
</a>
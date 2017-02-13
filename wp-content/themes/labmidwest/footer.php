
<?php wp_footer(); ?>

<div class="footer">
  <div class="site-width">
    <div class="footer-form">
      <h2>SUBSCRIBE</h2>
      Stay up to date on industry news &amp; events.<br>
      <br>

      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
        <form action="//labmidwest.us3.list-manage.com/subscribe/post?u=0a4c9e5c39e55cdc38cda3b97&amp;id=fbe781d09c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <div class="mc-field-group">
              <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="EMAIL ADDRESS">
            </div>

            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>

            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0a4c9e5c39e55cdc38cda3b97_fbe781d09c" tabindex="-1" value=""></div>

            <div class="clear"><input type="submit" value="SUBMIT" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
        </form>
      </div>
      <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->
    </div>

    <div class="footer-menu">
      <div class="footer-menu-col">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-col1' ) ); ?>
      </div>

      <div class="footer-menu-col">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-col2' ) ); ?>
      </div>

      <div class="footer-menu-col">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-col3' ) ); ?>
      </div>

      <div class="footer-menu-col">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-col4' ) ); ?>
        
        <br>

        <a href="https://www.facebook.com/labmidwest/" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/company/7582826" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
      </div>
    </div>

    <div style="clear: both;"></div>

    <div class="copyright">&copy; <?php echo date("Y"); ?> Lab Midwest LLC</div>
  </div>
</div>

</body>
</html>
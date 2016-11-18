
<?php wp_footer(); ?>

<div class="footer">
  <div class="site-width">
    <div class="footer-form">
      <h2>SUBSCRIBE</h2>
      Stay up to date on industry news &amp; events.<br>
      <br>

      <!-- Begin TEMP MailChimp code  !!!REPLACE WITH REAL CODE!!! -->
      <script type="text/javascript">!function(){window.mc4wp||(window.mc4wp={listeners:[],forms:{on:function(n,w){window.mc4wp.listeners.push({event:n,callback:w})}}})}();</script>
      <!-- MailChimp for WordPress v3.0.12 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
      <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-78" method="post" data-id="78" data-name="Default sign-up form" >
        <div class="mc4wp-form-fields">
          <input type="email" name="EMAIL" placeholder="Email Address" required="required">
          <input type="submit" value="SUBMIT">
          <div style="display: none;">
            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
          </div>
          <input type="hidden" name="_mc4wp_timestamp" value="1453999098" />
          <input type="hidden" name="_mc4wp_form_id" value="78" />
          <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
        </div>
        <div class="mc4wp-response"></div>
      </form><!-- / MailChimp for WordPress Plugin -->
      <!-- End TEMP MailChimp code  !!!REPLACE WITH REAL CODE!!! -->
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

        <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      </div>
    </div>

    <div style="clear: both;"></div>

    <div class="copyright">&copy; <?php echo date("Y"); ?> Lab Midwest LLC</div>
  </div>
</div>

</body>
</html>
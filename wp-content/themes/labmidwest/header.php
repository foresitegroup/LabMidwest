<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
    <?php if (is_home() && !is_front_page()) { wp_title(''); echo " - "; } ?>
    <?php if(is_home() || is_front_page()) {
      echo get_bloginfo('name');
    } else {
      wp_title('');
      echo ' - '.get_bloginfo('name'); 
    }?>
  </title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo filemtime(get_template_directory() . "/style.css"); ?>">
  <link href='https://fonts.googleapis.com/css?family=Bitter:400,400italic,700|Titillium+Web:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

      var totalWidth = 0;
      jQuery('#menu-main-menu LI.products > UL > LI').each(function(index) {
        totalWidth += parseInt(jQuery(this).outerWidth(), 10) + 10;
      });
      jQuery('#menu-main-menu LI.products > UL').width(totalWidth);
      jQuery('.psh1').matchHeight();
      jQuery('.psh2').matchHeight();
    });
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-91838870-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>

<body>

<div class="topbar">
  <div class="site-width">
    (414) 258.6415 &nbsp; | &nbsp; 
    <a href="https://www.facebook.com/labmidwest/" class="fa-stack"><i class="fa fa-square fa-stack-1x"></i><i class="fa fa-facebook-square fa-stack-1x"></i></a>
    <a href="https://www.linkedin.com/company/7582826" class="fa-stack"><i class="fa fa-square fa-stack-1x"></i><i class="fa fa-linkedin-square fa-stack-1x"></i></a>
  </div>
</div>

<div class="site-width logo-menu">
  <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="LAB Midwest" id="logo"></a>
  
  <label for="show-menu" id="menu-toggle"><i class="fa fa-bars"></i></label>
  <input type="checkbox" id="show-menu" role="button">
  <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</div>

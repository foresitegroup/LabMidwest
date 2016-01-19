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
  <link href='https://fonts.googleapis.com/css?family=Bitter:400,400italic,700|Titillium+Web' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
    });
  </script>
</head>

<body>

<div class="topbar">
  <div class="site-width">
    (414) 258.6415 &nbsp; | &nbsp; <i class="fa fa-search"></i> SEARCH &nbsp; | &nbsp; 
    <a href="#" class="fa-stack"><i class="fa fa-square fa-stack-1x"></i><i class="fa fa-facebook-square fa-stack-1x"></i></a>
    <a href="#" class="fa-stack"><i class="fa fa-square fa-stack-1x"></i><i class="fa fa-linkedin-square fa-stack-1x"></i></a>
    <a href="#" class="fa-stack"><i class="fa fa-square fa-stack-1x"></i><i class="fa fa-google-plus-square fa-stack-1x"></i></a>
  </div>
</div>

<div class="site-width logo-menu">
  <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="LAB Midwest" id="logo"></a>

  <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</div>

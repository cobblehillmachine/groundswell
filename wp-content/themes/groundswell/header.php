<?php
/**
 * @package WordPress
 * @subpackage Groundswell PR
 */
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="IE ie8"> <![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="IE ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--[if IE 8 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<title><?php echo site_global_description(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<?php wp_head(); ?>

<!-- TYPEKIT -->
<script src="https://use.typekit.net/mqt6ojf.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexslider.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.columnizer.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fancybox.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/instafeedly.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/pinimages.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesLoaded.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.elevatezoom.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/general.js"></script>


</head>
<body <?php body_class(); ?>>
  <nav>
    <div class="main-cont">
      <div class="close"><i class="fa fa-times"></i></div>
      <?php wp_nav_menu(array('menu' => 'Main Nav')) ?>
    </div>
  </nav>
  <?php if (is_front_page() || is_page_template('template-hero.php')) {

  } else { ?>
    <header class="main gradient <?php echo $color ?>" <?php if (is_front_page()) { ?>style="display: none;"<?php } ?>>
      <div class="main-cont">
        <div class="logo">
          <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundswell-logo-blue.png" alt="" class="blue"></a>
          <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundswell-logo-white.png" alt="" class="white"></a>
        </div>
        <div class="hamburger">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburger-blue.png" alt="" class="blue">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburger-white.png" alt="" class="white">
        </div>
      </div>
  	</header>
  <?php } ?>
  <header class="scroll gradient">
    <div class="main-cont">
      <div class="logo">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundswell-logo-white.png" alt="" class="white"></a>
      </div>
      <div class="hamburger">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburger-white.png" alt="" class="white">
      </div>
    </div>
  </header>
	<div class="body-wrapper">


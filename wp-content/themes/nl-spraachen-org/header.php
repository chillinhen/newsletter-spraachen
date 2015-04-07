<?php
/**
 * Header
 *
 * Setup the header for our theme
 */
?>
<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title('|', true, 'right'); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#fffff">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->
	<!-- typeahead plugin - if top nav search bar enabled -->
	<?php #require_once('library/typeahead.php'); ?>
    </head>
    <body <?php body_class(); ?>>
	<header id="header" class="container">
	    <!-- Logo/ Top Menu -->
	    <?php
	    $header = get_header_textcolor();
	    if ($header !== "blank") : endif;
	    ?>
	    <!-- top section -->
	    <div class="row">
		<!-- integrate Logo  per header_image  -->
		<div class="col-md-4 col-sm-4 col-xs-10 logo-container">
		    <h1 id="logo">
			<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
			    <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/img/logo.png" alt="<?php bloginfo('name'); ?>"/>
			</a>
		    </h1>
		</div>
		<div class="col-xs-2 hidden-lg hidden-sm">
		    <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
		    </div>
		</div>
		<!-- Contact  -->
		<div class="col-sm-offset-1 col-sm-7 col-xs-12 top-section">
		    <?php get_sidebar('languages'); ?>
		    <div id="contact-data">
			<?php get_sidebar('contact'); ?>
		    </div>
		</div>

	    </div>
	</header>
	<div id="main" role="main" class="site-content container">
	    <!-- top Navigation -->
	    <?php get_template_part('partials/main', 'nav'); ?>
	    <!-- Banner -->

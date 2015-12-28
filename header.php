<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!DOCTYPE html>

<html lang="en">
<head>

	<meta charset="UTF-8">
	
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
    
    	<!--[if lt IE 9]>
	<script>
	document.createElement('header');
	document.createElement('nav');
	document.createElement('section');
	document.createElement('article');
	document.createElement('aside');
	document.createElement('footer');
	</script>
	<![endif]-->
    
	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<?php
		if (true == of_get_option('meta_author'))
			echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';

		if (true == of_get_option('meta_google'))
			echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>

	<meta name="Copyright" content="Copyright &copy; Wild Digital. All Rights Reserved.">

	<meta name='viewport' content='width=device-width, initial-scale=1' /> 	

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-precomposed.png">
    	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
            
    	<!--[if lt IE 9]>
    	<link href="<?php bloginfo('template_directory'); ?>/style_ie8.css" rel="stylesheet" type="text/css">
		<![endif]-->

	<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71292143-1', 'auto');
  ga('send', 'pageview');
</script>
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<div itemscope itemtype="http://schema.org/LocalBusiness" class="wrapper" id="wrapper">
 
	<div class="headerWrapper">
    
    <header id="top" class="main-header" role="banner">
          
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="wildLogo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wildLogo.png" alt="Wild Digital" />
	<meta itemprop="name" content="Wild Digital"></a>
    
    	<div class="headerContact">
    		<ul>
            	<li><a href="https://plus.google.com/+WildDigitalFyshwick/posts?hl=en" target="blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_google.png" alt="google plus link" /></a></li>
                <li><a href="https://www.facebook.com/pages/Wild-Digital/1379323082288249" target="blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_facebook.png" alt="facebook link" /></a></li>
                <li class="headerEmail"><a href="mailto:sales@wilddigital.com.au"><span itemprop="email">sales@wilddigital.com.au</span></a></li>
                <li itemprop="telephone" class="headerPhone"> 02 6280 0991</li>
                </ul>
    		</div><!-- end .headerContact -->
        	
            <div class="navSecondary">
          	
            <div class="shopBtn">
            	<a href="http://www.wilddigital.com.au/wallart/">SHOP WALL ART</a>
            </div>
            	
			<div class="searchform">
            		<?php get_search_form(); ?>
                	</div><!-- end .searchform -->
          
          	</div><!-- end .navSecondary -->
 
              
                <nav id="navPrimary" class="navPrimary nav-collapse" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
       
   	 			</nav><!-- end #navPrimary -->
        
                </header>
                
                </div><!-- end .headerWrapper -->
   
   <div id="mainContent">
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tvivalves
 */

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
	   <meta charset="<?php bloginfo('charset'); ?>">
	   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


	   <meta name="description" content="">
	   <meta name="viewport" content="width=device-width, initial-scale=1">


	   <?php $favicon_uploader =  get_field('favicon_uploader','options'); 
		if($favicon_uploader):  ?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon_uploader['url']; ?>" />
		<?php endif; ?>
	   
	   
	   
	   <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	   <!--[if lt IE 8]>
	   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	   <![endif]-->
<div class="page text-center">
  <!--========================================================
                            HEADER
  =========================================================-->
  <header class="bg-image-1">
	<div class="menu-toggle-bar"> 
		<a href="#"><i class="fas fa-bars"></i></a>
	</div>
    <div id="stuck_container b2bdd-header-container" class="stuck_container b2bdd-header-container">
	
	<?php 

		  	wp_nav_menu([
		  		'theme_location'	=> 'main-menu',
		  		'menu_class'		=> 'sf-menu b2bdd-menu',
		  		'fallback_cb'		=> 'default_menu',
		  	]);

		  	 ?>
	
     
		<form class="tvi-search-form" action="http://products.tvivalves.com/keyword/" method="get">
			<input type="text" name="keyword" placeholder="Enter Keyword"><button type="submit">Search</button>
		</form>
    </div>
	
	
	<?php if(is_front_page()): ?>
	<div class="onCamera">
		 <?php $slider_image =  get_field('slider_image','options'); 
		if($slider_image):  ?>
		  <div class="brand">
			<span class="bsh"></span>
			<div><img src="<?php echo $slider_image['url']; ?>" alt="TVI Valves"></div>
		  
		  </div>
		  <?php endif; ?>
		  
		  <h3></h3>
		  <hr>
		   <?php $slider_text =  get_field('slider_text','options'); 
		if($slider_text):  ?>
		  <h1><?php echo $slider_text; ?></h1>
		  <?php endif; ?>
		</div>
		<div class="camera_container">
		
		
		
		
		  <div id="camera" class="camera_wrap">
		  
		  <?php $home_slider =  get_field('home_slider','options'); 
			if($home_slider):  
			foreach($home_slider as $slider): ?>
			<div data-src="<?php echo $slider['slider_background']['url']; ?>">
			  <div class="camera_caption fadeIn">
			  </div>
			</div>
			<?php endforeach; endif; ?>
		  </div>
		</div>
		
		
		<?php else: ?>
		
	<?php $page_banner =  get_field('page_banner','options');

	if($page_banner):  ?>
	<section class="well-lg bg-image-4" style="background: url(<?php echo $page_banner['url']; ?>) center no-repeat;">
      <div class="brand">
        <span class="bsh"></span>

		<?php $page_banner_image =  get_field('page_banner_image','options');
		if($page_banner_image):  ?>
        <div><a href="#" ><img src="<?php echo $page_banner_image['url']; ?>" alt="TVI Valves"></a></div>
		<?php endif; ?>

		
		<?php $page_banner_text =  get_field('page_banner_text','options');
		if($page_banner_text):  ?>
        <div class="brand_slogan sbold"><?php echo $page_banner_text; ?></div>
		<?php endif; ?>


      </div>
    </section>
		
	<?php endif;  endif; ?>
	  </header>
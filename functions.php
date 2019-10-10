<?php
/**
 * tvivalves functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tvivalves
 */

if ( ! function_exists( 'tvivalves_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tvivalves_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tvivalves, use a find and replace
		 * to change 'tvivalves' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tvivalves', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', ['video','audio','gallery','quote'] );
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' =>  'Main Menu',
		) );
		
		function default_menu(){
			
			echo '<ul class="sf-menu b2bdd-menu">';
			echo '<li class="current-menu-item" ><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		 
				 /* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}
		

			
			

		 
	
	}
endif;
add_action( 'after_setup_theme', 'tvivalves_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */



/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 90px !important; width: 100px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.png") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.7); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Mostafiz Shabbir';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );
		 
		 
/* customize login screen */
		 
/**
 * Enqueue scripts and styles.
 */
function tvivalves_scripts() {
	
	
	
	
	wp_enqueue_style( 'tvivalves-grid', get_template_directory_uri().'/css/grid.css' );
	wp_enqueue_style( 'tvivalves-camera', get_template_directory_uri().'/css/camera.css' );
	wp_enqueue_style( 'tvivalves-css-style', get_template_directory_uri().'/css/style.css' );
	wp_enqueue_style( 'tvivalves-animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_style( 'tvivalves-mailform', get_template_directory_uri().'/css/rd-mailform.css' );
	//wp_enqueue_style( 'tvivalves-fontawesome', get_template_directory_uri().'/css/fontawesome.min.css' );
	wp_enqueue_style( 'tvivalves-fontawesome', get_template_directory_uri().'/css/font-awesome.min.css' );
	
	wp_enqueue_style( 'tvivalves-style', get_stylesheet_uri() );
	wp_enqueue_style( 'tvivalves-responsive', get_template_directory_uri().'/css/responsive.css' );





	wp_enqueue_script('jquery');
	
	wp_enqueue_script( 'davide-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-navbar', get_template_directory_uri() . '/js/jquery.rd-navbar.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-camera', get_template_directory_uri() . '/js/camera.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-mobile', get_template_directory_uri() . '/js/jquery.mobile.customized.min.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'davide-device', get_template_directory_uri() . '/js/device.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-equalheights', get_template_directory_uri() . '/js/jquery.equalheights.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-form', get_template_directory_uri() . '/js/jquery.form.min.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'davide-mailform', get_template_directory_uri() . '/js/jquery.rd-mailform.min.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'davide-parallax', get_template_directory_uri() . '/js/jquery.rd-parallax.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-totop', get_template_directory_uri() . '/js/jquery.ui.totop.js', array('jquery'), '', true );

	wp_enqueue_script( 'davide-events', get_template_directory_uri() . '/js/pointer-events.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-superfish', get_template_directory_uri() . '/js/superfish.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-tmstickup', get_template_directory_uri() . '/js/tmstickup.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), '', true );


}
add_action( 'wp_enqueue_scripts', 'tvivalves_scripts' );


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/tgm/example.php';






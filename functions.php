<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */

	// Options Framework (https://github.com/devinsays/options-framework-plugin)
	if ( !function_exists( 'optionsframework_init' ) ) {
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/_/inc/' );
		require_once dirname( __FILE__ ) . '/_/inc/options-framework.php';
	}
	// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function wild_digital_setup() {
		load_theme_textdomain( 'html5reset', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );	
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
		add_theme_support( 'post-thumbnails' );
		register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );
		register_nav_menus( array(	'primary-menu' => __( 'Primary Menu', 'html5reset' ),
									'secondary-menu' => __( 'Secondary Menu', 'html5reset' ))
									);
	}
	add_action( 'after_setup_theme', 'wild_digital_setup' );
		
	
	// WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_wp_title( $title, $sep ) {
		global $paged, $page;
	
		if ( is_feed() )
			return $title;
	
		// Add the site name.
		$title .= get_bloginfo( 'name' );
	
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
	
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'html5reset' ), max( $paged, $page ) );
	
		return $title;
	}
	add_filter( 'wp_title', 'html5reset_wp_title', 10, 2 );


	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ), false);
				//wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}
	
	// Load js functions
	function my_scripts_method() {
		wp_enqueue_script(
			"functions",
			get_stylesheet_directory_uri() . "/_/js/functions.js",
			array( 'jquery' )
		);
	}
	add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

	// Widgets
	if ( function_exists('register_sidebar' )) {
		function html5reset_widgets_init() {
			register_sidebar( array(
				'name'          => __( 'Sidebar Widgets', 'html5reset' ),
				'id'            => 'sidebar-primary',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
		}
		add_action( 'widgets_init', 'html5reset_widgets_init' );
	}

	
	// Remove Query strings from Static Resources.
	function _remove_script_version( $src ){
    	$parts = explode( '?', $src );
    	return $parts[0];
		}
		add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
		add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
	
	
	// Turn off admin bar for frontend of site.
	show_admin_bar( false );
	

	//Shortcode to add Product Section Start on Multiple product pages
	function product_section_start_func() {
		return '<section class="subCategory">';	
		}
		add_shortcode('product_section_start', 'product_section_start_func');
	

	//Shortcode to add Product Section End on Multiple product pages
	function product_section_end_func() {
		return '</section><!-- end .subCategory-->';	
		}
		add_shortcode('product_section_end', 'product_section_end_func');

	
	//Deregister stylesheets from plugins
	function my_deregister_styles() {
		wp_deregister_style( 'responsive-menu' );
		}
		add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
	
	
	//Remove Contact Form7 scripts from pages that don't need it
	function form7_dequeue_scripts() {

    $load_scripts = false;

    if( is_singular() ) {
        $post = get_post();

        if( has_shortcode($post->post_content, 'contact-form-7') ) {
            $load_scripts = true;
        }
    }
    if( ! $load_scripts ) {
        wp_dequeue_script( 'contact-form-7' );
        wp_dequeue_style( 'contact-form-7' );
    	}
	}
		add_action( 'wp_enqueue_scripts', 'form7_dequeue_scripts', 99 ); 
	
	
	//Remove bxslider script from pages that don't need it
	function bxslider_dequeue_scripts() {

    $load_scripts = false;

    if( is_singular() ) {
        $post = get_post();

        if( has_shortcode($post->post_content, 'gallery') ) {
            $load_scripts = true;
        }
    }
    if( ! $load_scripts ) {
        wp_dequeue_script( 'jquery.bxslider' );
    	}
	}
		add_action( 'wp_enqueue_scripts', 'bxslider_dequeue_scripts', 99 );   
		
	
?>
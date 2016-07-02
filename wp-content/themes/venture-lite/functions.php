<?php


// #################################################
// Setup Theme
// #################################################

if ( ! function_exists( 'venture_lite_theme_setup' ) ) {

	function venture_lite_theme_setup() {



		// Make theme available for translation.

		load_theme_textdomain( 'venture-lite', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.

		add_theme_support( 'automatic-feed-links' );
		
		// Add custom Background option
		
		add_theme_support( 'custom-background' );

		// Let WordPress manage the document title.

		add_theme_support( 'title-tag' );

		// Set content width

		if ( ! isset( $content_width ) ) $content_width = 700;

		// Enable support for Post Thumbnails on posts and pages.

		add_theme_support( 'post-thumbnails' );
		add_image_size('venture_lite_652_411', 652, 411, true); // thumbnail on frontpage news section 
		add_image_size('venture_lite_750_420', 750, 420, true); // archive thumbnail on index.php

		// This theme uses wp_nav_menu() in one location.

		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'venture-lite' ),
		) );

		// output valid HTML5.

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	}
}
add_action( 'after_setup_theme', 'venture_lite_theme_setup' );




// #################################################
// Customizer stuff
// #################################################

require_once(get_template_directory() . '/inc/kirki/kirki.php' );
require_once(get_template_directory() . '/inc/options.php' );


// #################################################
// Custom NavWalker
// #################################################
 
require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');


// #################################################
// Register widget area.
// #################################################

function venture_lite_theme_widgets_init() {


    // primary sidebar
    register_sidebar(array(
        'id' => 'primary_sidebar',
        'name' => __('Primary Sidebar', 'venture-lite' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>'
    ));

    // frontpage - featured - left
    register_sidebar(array(
        'id' => 'frontpage-featured-left',
        'name' => __('Frontpage Featured Left', 'venture-lite' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="featured-item-title">',
        'after_title' => '</h4>'
    ));

    // frontpage - featured - center left
    register_sidebar(array(
        'id' => 'frontpage-featured-center-left',
        'name' => __('Frontpage Featured Center Left', 'venture-lite' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="featured-item-title">',
        'after_title' => '</h4>'
    ));
    
    // frontpage - featured - center right
    register_sidebar(array(
        'id' => 'frontpage-featured-center-right',
        'name' => __('Frontpage Featured Center Right', 'venture-lite' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="featured-item-title">',
        'after_title' => '</h4>'
    ));
    
    // frontpage - featured - right
    register_sidebar(array(
        'id' => 'frontpage-featured-right',
        'name' => __('Frontpage Featured Right', 'venture-lite' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="featured-item-title">',
        'after_title' => '</h4>'
    ));


    // frontpage - about
    register_sidebar(array(
        'id' => 'frontpage-about',
        'name' => __('Frontpage About', 'venture-lite' ),
        'before_widget' => '<div class="row frontpage-about-row" data-sr="enter left and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    
    
    
    // frontpage - team - left
    register_sidebar(array(
        'id' => 'frontpage-team-left',
        'name' => __('Frontpage Team Left', 'venture-lite' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));

    // frontpage - team - center left
    register_sidebar(array(
        'id' => 'frontpage-team-center-left',
        'name' => __('Frontpage Team Center Left', 'venture-lite' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));
    
    // frontpage - team - center right
    register_sidebar(array(
        'id' => 'frontpage-team-center-right',
        'name' => __('Frontpage Team Center Right', 'venture-lite' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));
    
    // frontpage - team - right
    register_sidebar(array(
        'id' => 'frontpage-team-right',
        'name' => __('Frontpage Team Right', 'venture-lite' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));    
    
    // frontpage - social
    register_sidebar(array(
        'id' => 'frontpage-social-media',
        'name' => __('Frontpage Social Media', 'venture-lite' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));


    // footer - box 1
    register_sidebar(array(
        'id' => 'footer_box_1',
        'name' => __( 'Footer - Box 1', 'venture-lite' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // footer - box 2
    register_sidebar(array(
        'id' => 'footer_box_2',
        'name' => __( 'Footer - Box 2', 'venture-lite' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // footer - box 3
    register_sidebar(array(
        'id' => 'footer_box_3',
        'name' => __( 'Footer - Box 3', 'venture-lite' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // footer - box 4
    register_sidebar(array(
        'id' => 'footer_box_4',
        'name' => __( 'Footer - Box 4', 'venture-lite' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

}
add_action( 'widgets_init', 'venture_lite_theme_widgets_init' );



// #################################################
// Custom Widgets
// #################################################
 
require_once(get_template_directory() . '/inc/widgets.php');



// #################################################
// Enqueue scripts and styles.
// #################################################

function venture_lite_theme_scripts() {
	if (!is_admin()) {
	    
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.5', 'all');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.0.3', 'all');
        wp_enqueue_style('venture_lite_font-oswald', '//fonts.googleapis.com/css?family=Oswald:400,300,700', array(), '', 'all');
        wp_enqueue_style('venture_lite_font-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic', array(), '', 'all');
		wp_enqueue_style('venture_lite_theme-style', get_stylesheet_uri() );


        // footer
        wp_enqueue_script('bootstrap',get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ),'3.0.5',true);
        wp_enqueue_script('waypoints',get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(),'3.1.1',true);
        wp_enqueue_script('waypoints-sticky',get_template_directory_uri() . '/assets/js/sticky.min.js', array(),'3.1.1',true);
        wp_enqueue_script('scrollreveal',get_template_directory_uri() . '/assets/js/scrollReveal.min.js', array(),'2.3.2',true);
        wp_enqueue_script('easing',get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(),'1.3.0',true);
        wp_enqueue_script('nicescroll',get_template_directory_uri() . '/assets/js/nicescroll.min.js','','3.6.0',true);
        wp_enqueue_script('venture_lite_public',get_template_directory_uri() . '/assets/js/public.js', array(),'1.0.0',true);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'venture_lite_theme_scripts' );



// #################################################
// Override search forms
// #################################################


function venture_lite_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div class="search-wrap">
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'venture-lite' ) .'" />
	</div>
	</form>';
	return $form;
}
add_filter( 'get_search_form', 'venture_lite_search_form' );
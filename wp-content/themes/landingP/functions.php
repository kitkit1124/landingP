<?php 

/*
 * Enqueue scripts and styles. 
 */

 function landingP_load_stylesheets() {
    wp_enqueue_style('all', get_template_directory_uri() . '/assets/css/all.css'); 
    wp_enqueue_style( 'bootstrap-cdn-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' );
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/dist/assets/owl.carousel.min.css'); 
    wp_enqueue_style('owl-carousel2', get_template_directory_uri() . '/assets/owl-carousel/dist/assets/owl.theme.default.min.css'); 
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/assets/css/flexslider.css'); 
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('reject', get_template_directory_uri() . '/assets/css/reject.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css'); 
    wp_enqueue_style('mediaqueries', get_template_directory_uri() . '/assets/css/mediaqueries.css'); 
    wp_enqueue_style('typography', get_template_directory_uri() . '/assets/css/typography.css'); 
 }

 add_action( 'wp_enqueue_scripts', 'landingP_load_stylesheets' );

function landingP_load_js() {
    wp_enqueue_script( 'jqueryL', get_template_directory_uri() . '/assets/js/jquery.js', array(), 1, 1, 1);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), 1, 1, 1);
    wp_enqueue_script( 'jquery.matchHeight-min', get_template_directory_uri() . '/assets/js/jquery.matchHeight-min.js', array(), 1, 1, 1);
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/owl-carousel/dist/owl.carousel.min.js', array(), 1, 1, 1);
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array(), 1, 1, 1);
    wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/assets/js/slick.min.js', array(), 1, 1, 1);
    wp_enqueue_script( 'jquery.placeholder.min', get_template_directory_uri() . '/assets/js/jquery.placeholder.min.js', array(), 1, 1, 1);
    wp_enqueue_script( 'jquery.reject.min', get_template_directory_uri() . '/assets/js/jquery.reject.min.js', array(), 1, 1, 1);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1);
  }

add_action( 'wp_enqueue_scripts', 'landingP_load_js' );
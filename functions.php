<?php

function wpflattern_files()
{

    wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), NULL, true ) );
    wp_enqueue_script( 'jquery_easing', get_theme_file_uri( 'assets/vendor/jquery.easing/jquery.easing.min.js' ), array('jquery'), NULL, true );
    wp_enqueue_script( 'mail_validate_file', get_theme_file_uri( 'assets/vendor/php-email-form/validate.js' ), NULL, NULL, true );
    wp_enqueue_script( 'jquery_sticky', get_theme_file_uri( 'assets/vendor/jquery-sticky/jquery.sticky.js' ), array('jquery'), NULL, true );
    wp_enqueue_script( 'isotype', get_theme_file_uri( 'assets/vendor/isotope-layout/isotope.pkgd.min.js' ), NULL, NULL, true );
    wp_enqueue_script( 'venobox', get_theme_file_uri( 'assets/vendor/venobox/venobox.min.js' ), NULL, NULL, true );
    wp_enqueue_script( 'waypoints', get_theme_file_uri( 'assets/vendor/waypoints/jquery.waypoints.min.js' ), NULL, NULL, true );
    wp_enqueue_script( 'owl_carousel', get_theme_file_uri( 'assets/vendor/owl.carousel/owl.carousel.min.js' ), NULL, NULL, true );
    wp_enqueue_script( 'aos', get_theme_file_uri( 'assets/vendor/aos/aos.js' ), NULL, NULL, true );
    wp_enqueue_script( 'template_main_file', get_theme_file_uri( 'assets/js/main.js' ), NULL, '1.0', true );

    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i' );
    wp_enqueue_style( 'vendor_file1', get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css') );
    wp_enqueue_style( 'vendor_file2', get_theme_file_uri('assets/vendor/icofont/icofont.min.css') );
    wp_enqueue_style( 'vendor_file3', get_theme_file_uri('assets/vendor/boxicons/css/boxicons.min.css') );
    wp_enqueue_style( 'vendor_file4', get_theme_file_uri('assets/vendor/animate.css/animate.min.css') );
    wp_enqueue_style( 'vendor_file5', get_theme_file_uri('assets/vendor/venobox/venobox.css') );
    wp_enqueue_style( 'vendor_file6', get_theme_file_uri('assets/vendor/owl.carousel/assets/owl.carousel.min.css') );
    wp_enqueue_style( 'vendor_file7', get_theme_file_uri('assets/vendor/aos/aos.css') );
    wp_enqueue_style( 'template_file', get_theme_file_uri('assets/css/style.css') );
    wp_enqueue_style( 'flattern_main_styles', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'wpflattern_files' );

function wpflattern_features() {
    add_theme_support( 'title-tag' );
    add_theme_support('custom-logo');

    register_nav_menu('header-menu', 'Header Menu');
}

add_action( 'after_setup_theme', 'wpflattern_features' );
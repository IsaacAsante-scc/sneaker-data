<?php

function sneakerdata_theme_support(){

    // Adds dynamic title tag support(WordPress manage title tag itself
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 50, 50 );   
}

add_action('after_theme_setup', 'sneakerdata_theme_support');



function sneakerdata_menus(){

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'sneakerdata_menus');


function sneakerdata_register_styles(){
    // Version variable to get version number paramerter(dynamic parameter) from style.css
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style( 'sneakerdata-style', get_template_directory_uri() . "/style.css", array('sneakerdata-bootstrap'), $version, 'all');
    wp_enqueue_style( 'sneakerdata-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style( 'sneakerdata-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

    add_action( 'wp_enqueue_scripts', 'sneakerdata_register_styles');




function sneakerdata_register_scripts(){

    wp_enqueue_script('sneakerdata-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('sneakerdata-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('sneakerdata-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script('sneakerdata-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);


}
    
    add_action( 'wp_enqueue_scripts', 'sneakerdata_register_scripts');
    

    function themename_custom_logo_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


    add_theme_support( 'post-thumbnails');
    set_post_thumbnail_size( 50, 50 ); 

?>

<?php
  
?>
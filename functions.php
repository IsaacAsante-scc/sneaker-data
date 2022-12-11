<?php

function sneakerdata_register_styles(){
    // version variable to get version number paramerter(dynamic parameter) from style.css
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style( 'sneakerdata-style', get_template_directory_uri() . "/style.css", array('sneakerdata-bootstrap'), $version, 'all');
    wp_enqueue_style( 'sneakerdata-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style( 'sneakerdata-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

    add_action( 'wp_enqueue_scripts', 'sneakerdata_register_styles');




function sneakerdata_register_scripts(){
       
}
    
    add_action( 'wp_enqueue_scripts', 'sneakerdata_register_scripts');
    
?>
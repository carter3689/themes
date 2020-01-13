<?php

function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), false, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_register_script('revolvingtext', get_template_directory_uri() . '/js/revolvingtext.js', 'jquery', false, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('revolvingtext');
}

add_action('wp_enqueue_scripts', 'load_js');
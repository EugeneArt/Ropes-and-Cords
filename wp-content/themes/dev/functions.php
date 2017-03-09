<?php

function whispandropes_scripts() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('small', get_template_directory_uri().'/css/small.css');
    wp_enqueue_style('medium', get_template_directory_uri().'/css/medium.css');
    wp_enqueue_style('large', get_template_directory_uri().'/css/large.css');

    wp_enqueue_script("jquery");
    wp_enqueue_script('menu-jquery', get_template_directory_uri() . '/js/menu.js');

}

add_action( 'wp_enqueue_scripts', 'whispandropes_scripts' );

//function whispandropes_setup() {
//    add_theme_support('menus');
//    load_textdomain('whispandropes');
//
//    add_theme_support('title-tag');
//
//    add_theme_support('post-thumbnails');
//    set_post_thumbnail_size(230,200);
//}
//add_action('after_setup_theme', ' whispandropes_setup');

add_theme_support('post-thumbnails');

register_nav_menu('menu', 'header menu');


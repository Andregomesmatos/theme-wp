<?php

function fisacorp_wp_style()
{
    //Css 
    wp_enqueue_style('theme-css-deafault', get_stylesheet_directory_uri() . '/assets/css/theme-default.css');
    wp_enqueue_style('theme-css-deafault-2', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

    //Css em diretorio bootstrap
    wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.css');
    //font em web 
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Signika:wght@300;400;500;600&display=swap');
    //Js em em diretorio bootstrap
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array('jquery'), '', true);
    wp_enqueue_script('npm_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array(), '', true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'fisacorp_wp_style');

function mytheme_config()
{
    register_nav_menus(
        [
            'wp_defaulttheme_my_menu' => 'Top Menu',
            'wp_defaulttheme_footer_menu' => 'Footer Menu'
        ]
    );

    $args = array(
        'height'    => 225,
        'width'     => 1920
    );

    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width' => 200,
        'height'    => 110,
        'flex-height'   => true,
        'flex-width'    => true
    ));
}

add_action('after_setup_theme', 'mytheme_config', 0);

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

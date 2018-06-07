<?php

register_nav_menus(array(
    'primary' => __( 'Primary Menu',    'twentyfitheen' ),
    'social' => __( 'Social links menu',    'twentyfitheen' ),
));

function theme_styles()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

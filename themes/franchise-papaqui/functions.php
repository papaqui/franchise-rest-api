<?php

/*********************
 * Styles and Scripts
 ********************/
function franchise_files() {
    
    wp_enqueue_style('main_styles', esc_url( get_template_directory_uri() .'/assets/css/style.css'), array(), '');
    wp_enqueue_style('main_queries', esc_url( get_template_directory_uri() .'/assets/css/queries.css'), array(), '');
    
    wp_register_style('franchise_styles', esc_url( get_template_directory_uri() .'/assets/css/franchise-style.css'));

    if( is_page_template('single-franchise.php') ) {
        wp_enqueue_style('franchise_styles');
    }

}

add_action('wp_enqueue_scripts', 'franchise_files');

/*********************
 * Features
 ********************/
function franchise_features() {
    register_nav_menu('mainMenu', 'Main Menu');
    add_image_size('custom-landscape', 600, 400, true);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width'         => '400',
        'height'        => '250',
        'flex-height'   => true,
        'flex-width'    => true,
    ));
}

add_action('after_setup_theme', 'franchise_features');
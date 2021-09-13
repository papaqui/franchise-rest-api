<?php

/*********************
 * Styles and Scripts
 ********************/
function franchise_files() {
    
    wp_enqueue_style('_franchise-stylesheet', esc_url( get_template_directory_uri() .'/assets/dist/css/style.css'), array(), '');
    
    wp_register_style('_franchise-stylesheet-template', esc_url( get_template_directory_uri() .'/assets/dist/css/franchise-style.css'));

    wp_register_script( '_franchise-scripts', get_template_directory_uri() . '/assets/dist/js/bundle.js', array(), '1.0.0', true );

    if( is_page_template('single-franchise.php') ) {
        wp_enqueue_style('_franchise-stylesheet-template');
    }
    if( !is_page_template('single-franchise.php') ) {
        wp_enqueue_script('_franchise-scripts');
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
}

add_action('after_setup_theme', 'franchise_features');
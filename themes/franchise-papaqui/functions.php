<?php

function franchise_files() {
    wp_enqueue_style('franchise_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'franchise_scripts');
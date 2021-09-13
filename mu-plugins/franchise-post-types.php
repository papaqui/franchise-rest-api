<?php
function franchise_post_types() {
    register_post_type('franchise', array(
        'rewrite'       => array('slug' => ' franchise'),
        'supports'      => array('title', 'editor', 'author', 'thumbnail', 'page-attributes', 'post_formats'),
        'menu_position' => 5,
        'public'        => true,
        'show_in_rest'  => true,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'labels'        => array(
            'name'          => 'Franchise',
            'add_new_item'  => 'Add new franchise',
            'edit_item'     => 'Edit franchise',
            'singular_name' => 'Franchise',
        ),
        'menu_icon'     => 'dashicons-awards',
    ));
}

add_action('init', 'franchise_post_types');
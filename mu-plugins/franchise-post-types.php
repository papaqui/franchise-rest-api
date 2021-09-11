<?php

/********************
 *  Custom Post Type
********************/
function franchise_post_types() {
    register_post_type('franchise', array(
        'rewrite'       => array('slug' => ' franchise'),
        'supports'      => array('title', 'editor', 'thumbnail'),
        'has_archive'   => true,
        'menu_position' => 5,
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
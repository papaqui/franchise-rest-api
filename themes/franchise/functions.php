<?php

/*********************
 * Styles and Scripts
 ********************/
function franchise_files() {

    // Main CSS
    wp_enqueue_style('_franchise-stylesheet', esc_url( get_template_directory_uri() .'/assets/dist/css/style.css'), array(), '');
    
    // Franchise CSS
    if( is_page_template('single-franchise.php') ) {
        wp_register_style('_franchise-stylesheet-template', esc_url( get_template_directory_uri() .'/assets/dist/css/franchise-style.css'));
        wp_enqueue_style('_franchise-stylesheet-template');
    }
    
    // JS - Vanilla JS Version
    if( !is_page_template('single-franchise.php') ) {
        wp_register_script( '_franchise-scripts', get_template_directory_uri() . '/assets/dist/js/bundle.js', array(), '1.0.0', true );
        wp_localize_script( 
            '_franchise-scripts', 
            'my_ajax',
            array( 
                'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
                'posts' => json_encode( $the_query->query_vars ), 
                'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
                'max_page' => $the_query->max_num_pages
            ) 
        );
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

/*********************
 * Load More AJAX
 ********************/

function loadmore(){
 
    $args['post_type'] = 'franchise';
	$args['paged'] = $_POST['page'] + 1; 
	$args['post_status'] = 'publish';

	query_posts( $args );

	if( have_posts() ) :
		while( have_posts() ): 
            the_post();
 
            get_template_part( 'template-parts/content', 'post-franchise' );
            
	    endwhile;
	endif;

	die; 
}
 
add_action('wp_ajax_loadmore', 'loadmore'); 
add_action('wp_ajax_nopriv_loadmore', 'loadmore'); 
<?php
/*
 * Template Name: Franchise Template
 * Template Post Type: franchise
*/
get_header(); ?>

<article class="page-franchise">

    <?php
        while(have_posts()) : the_post();

        get_template_part( 'template-parts/content', 'franchise' );
    
        endwhile; 
    ?>

</article>

<?php get_footer(); ?>
<?php 
/**
 * Template part for displaying the post content
 * 
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class('franchise-item'); ?>>
    <!-- The Thumbnail -->
    <?php 
        if(has_post_thumbnail()) : 
        $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'custom-landscape' );
    ?>
    <a href="<?php the_permalink(); ?>">
        <img class="franchise-image" src="<?php echo $img['0']; ?>" alt="<?php the_title(); ?>">
    </a>
    <?php endif; ?>
    <!-- The Title -->
    <h3 class="franchise-title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h3>
    <!-- The Author -->
    <div class="franchise-author-box">
        <p class="franchise-author">Author: <span><?php the_author(); ?></span></p>
    </div>
    <!-- The Button -->
    <div class="franchise-button">
        <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
    </div>
</section>
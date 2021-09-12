<?php get_header(); ?>

<!-- Custom Query for Franchis CPT -->
<?php
    $franchiseQuery = new WP_Query(array(
        'post_type'         => 'franchise',
        'posts_per_page'    => 5,
        'order'             => 'ASC',
    ));
?>

<section class="section-franchise">
    <div class="main-container">
        <div class="franchise-posts">

<?php
    while($franchiseQuery->have_posts()) :
        $franchiseQuery->the_post() ?>

        <div class="franchise-item">
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
        </div><!-- /end .franchise-item -->

<?php 
    endwhile; 
    wp_reset_postdata(); 
?>
        </div>
    </div>
</section><!-- /end .section-franchise -->

<?php get_footer(); ?>
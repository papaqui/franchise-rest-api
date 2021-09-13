<?php 
/**
 * Template part for displaying content in single-franchise.php 
 * 
 */
?>

<!-- Page Banner -->
<?php 
    if(has_post_thumbnail()) : 
    $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    endif;
?>
<div class="page-banner" style="background-image: url('<?php echo $img['0']; ?>');">
    <div class="page-banner-content">
        <h1><?php the_title(); ?></h1>
        <p>Author: <?php the_author(); ?></p>
    </div>
</div>

<!-- Page Content -->
<div class="page-content main-container">
    <?php the_content(); ?>
</div>


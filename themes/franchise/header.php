<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
        <div class="header main-container">
            <div class="header-title">
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_bloginfo('name'); ?>
                </a>
            </div>
            <nav class="header-navigation">
                <?php 
                    wp_nav_menu(array(
                        'theme_location'    => 'mainMenu'
                    ))
                ?>
            </nav>
        </div>
        </header>
    </body>
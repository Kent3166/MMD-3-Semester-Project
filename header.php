<!DOCTYPE html>

<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>">
        
        <meta name="viewport" 
              content="width=device-width, initial-scale=1.0">
        
        <meta http-equiv="X-UA-Compatible" 
              content="ie=edge">

        <meta name="yandex-verification" 
              content="7e520d70d8db6d7e" />

        <?php 
            wp_head(); 
        ?>

        <!-- For Search Engines -->
        <?php 
            if ( get_field( 'description' ) ):
        ?>
            <meta name="description" 
                  content="<?php the_field('description') ?>" />
        <?php 
            endif;
        ?>

        <?php 
            if ( get_field( 'keywords' ) ):
        ?>
            <meta name="keywords" 
                  content="<?php the_field('keywords') ?>" />
        <?php 
            endif;
        ?>

        <?php 
            if ( get_field( 'index-message' ) ):
        ?>
            <meta name="robots" 
                  content="<?php the_field('index-message') ?>" />
        <?php 
            endif;
        ?>
                
    </head>
    
    <body>
    
        <!-- HEADER AREA -->
        <header> 

            <nav> 
                <?php
                    if ( has_nav_menu( 'header-menu' ) )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                'menu-class' => '',
                                'item_spacing' => 'preserve'
                            )
                        );        
                    }
                ?>
            </nav>

        </header>

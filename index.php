<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>">
        
        <meta name="viewport" 
              content="width=device-width, initial-scale=1.0">
        
        <meta http-equiv="X-UA-Compatible" 
              content="ie=edge">
        
        <title>
            Document
        </title>

        <?php 
            wp_head(); 
        ?>
    </head>

    <body>
        <?php 
            get_header(); 
        ?>

        <main> 

        </main>
        
        <?php
            get_footer();
        ?>
    </body>

    <?php 
        wp_footer(); 
    ?>
</html>
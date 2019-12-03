<!-- FRONTPAGE AREA -->
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>">
        
        <meta name="viewport" 
              content="width=device-width, initial-scale=1.0">
        
        <meta http-equiv="X-UA-Compatible" 
              content="ie=edge">

        <meta name="description" 
              content="en wordpress side" />
        
        <meta name="yandex-verification" 
              content="7e520d70d8db6d7e" />

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
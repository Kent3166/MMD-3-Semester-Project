<?php 

function theme_setup_after()
{
      /* Adds support for wordpress to handle setting the title  */
      add_theme_support( 'title-tag' );
      
}

add_action('after_setup_theme', 'theme_setup_after');

function theme_scripts()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', null, null, null);
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

?>
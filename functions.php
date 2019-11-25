<?php 

function theme_setup_after()
{
      /* Adds support for wordpress to handle setting the title  */
      add_theme_support( 'title-tag' );
      
}

add_action('after_setup_theme', 'theme_setup_after')

?>
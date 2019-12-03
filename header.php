<!-- HEADER AREA -->
<header> 

    <nav> 
        <?php
            if ( has_nav_menu('header-menu') )
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

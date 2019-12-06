<?php 
    get_header(); 
?>

    <main> 
        <!-- Help Template --> 
        <section class="<?php the_field('first-menu') ?>">
        <?php 
            if ( get_field( 'basic-title' ) ):
        ?>
            <h1>
                <?php the_field('basic-title') ?> 
            </h1>

            
            <nav> 
                <?php
                    if ( has_nav_menu( 'page-help-basic-menu' ) )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'page-help-basic-menu',
                                'menu-class' => '',
                                'item_spacing' => 'preserve'
                            )
                        );        
                    }
                ?>
            </nav>

        <?php 
            endif;
        ?> 
        
        </section>
        

        <section class="<?php the_field('second-menu')  ?>"> 
            <?php 
                if ( get_field( 'areas' ) ):
            ?>
                <h1>
                    <?php the_field('areas') ?> 
                </h1>
                
            <nav> 
                <?php
                    if ( has_nav_menu( 'page-help-advanced-menu' ) )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'page-help-advanced-menu',
                                'menu-class' => '',
                                'item_spacing' => 'preserve'
                            )
                        );        
                    }
                ?>
            </nav>

            <?php 
                endif;
            ?> 
        
        </section>
    </main>
        
<?php
    get_footer();
?>
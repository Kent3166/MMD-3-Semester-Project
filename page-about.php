<?php 
    get_header(); 
?>

    <main> 
    
        <!-- About Template --> 
        <?php 
            while( have_posts() ):
                    the_post();
        ?>

        <section> 
        
            <!--  -->
         
                <h1> 
                    <?php the_title(); ?> 
                </h1>
                
                <div>
                    <?php the_content(); ?> 
                </div>

        </section>

        
        <?php 
            $children = get_pages( array( 'sort_order'=>'desc', 'parent' => $post->ID ) );

            foreach( $children as $post ):
                setup_postdata( $post );
        ?>

        <?php if( get_field( 'section-overlay' ) ): ?>

        <section class="<?php the_field( 'section-overlay' ); ?>"> 
            <h1> 
                <?php the_title(); ?> 
            </h1>
        
            <p> 
                <?php the_content(); ?>
            </p>
        </section>

        <?php endif; ?>
        
        <?php 
            endforeach;
            wp_reset_postdata();
        ?>

        <?php endwhile; ?>     

    </main>
        
<?php
    get_footer();
?>
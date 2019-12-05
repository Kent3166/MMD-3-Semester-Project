<?php 
    get_header(); 
?>

    <main> 
    
        <!-- About Template --> 
        <?php 
            while( have_posts() ):
                    the_post();
        ?>

        <?php // If it has a section ?>
        <?php if( get_field( 'section-overlay' ) ):  ?>
            <section class="<?php the_field('section-overlay'); ?>"> 
        <?php endif; ?>

        <?php // if it does not have a overlay style ?>
        <?php if( !get_field( 'section-overlay' ) ):  ?>
            <section> 
        <?php endif; ?>
        
            <!--  -->
                
                <div>
                    <h1> 
                        <?php the_title(); ?> 
                    </h1>
                    <div> 
                        <?php the_content(); ?> 
                    </div>
                </div>

        </section>

        
        <?php 
            $children = get_pages( array( 'sort_order'=>'desc', 'parent' => $post->ID ) );

            foreach( $children as $post ):
                setup_postdata( $post );
        ?>

        <?php if( get_field( 'section-overlay' ) ): ?>

        <section class="<?php the_field( 'section-overlay' ); ?>"> 
            <span> 
                <h1> 
                    <?php the_title(); ?> 
                </h1>

                <?php if (! ($post->post_name == 'our-mission')): ?>
                    <?php the_content(); ?>
                <?php endif; ?>

                <?php if ( ($post->post_name === 'our-mission')): ?>
                    <?php the_content(); ?>
                <?php endif; ?>
            
            </span>

            <?php // Has a image ?>
            <?php if(get_field('image')): ?>
                <img src="<?php the_field( 'image' ); ?>" width="100%;" />
            <?php endif; ?>
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
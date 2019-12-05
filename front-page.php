<?php 
    get_header(); 
?>

    <main> 
        <section> 
            <!--  -->
            <?php 
                while( have_posts() ):
                    the_post();
            ?>

            <h1> 
                <?php the_title(); ?> 
            </h1>
            
            <div>
                <?php the_content(); ?> 
            </div>

            <div> 
            </div>

            <?php endwhile; ?>
        </section>
        
        <section> 
        
        </section>
        
        <section> 

        </section>
        
        <section> 
        
        </section>
    </main>
        
<?php
    get_footer();
?>
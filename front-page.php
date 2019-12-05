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

            <?php endwhile; ?>

            <div class="video">
                <video width="1280" height="720" controls>
                    <source src="<?php echo get_template_directory_uri() . '/content/video/presentation.mp4' ?>" type="video/mp4">
                </video> 
            </div>
        </section>
        
        <section> 
            <!-- Orientation -->
            <p> 
                Become more productive 
            </p>
            
            <p> 
                See clearer, when your trying to achieve your goals. 
            </p>

            <div> 
                <div>
                    <p> 
                        Set your Goals 
                    </p> 
                    <p> 
                        List your goals and prioritize them 
                    </p>
                    
                    <ul>
                        <li> 
                            <a href="#"> 
                                <p> Get started </p>
                            </a>
                        </li> 
                        
                        <li> 
                            <a href="#"> 
                                <p> Help </p>
                            </a>
                        </li> 
                    </ul>
                </div>
                
                <div> 
                    <p> 
                        planning the journey 
                    </p>
                    
                    <p> 
                        make a plan on how to achieve your goals 
                    </p>
                    
                    <ul>
                        <li> 
                            <a href="#"> 
                                <p> Get started </p>
                            </a>
                        </li> 
                        
                        <li> 
                            <a href="#"> 
                                <p> Help </p>
                            </a>
                        </li> 
                    </ul>
                </div>    
            </div>
        </section>
        
        <!-- Mission -->
        <section> 
            <p> Our Mission </p>
            
            <div> 
                    <div> 
                        <p> Open Source </p>
                        
                        <p> 
                            An open platform, that everyone
                            can help collaborate on, be able to 
                            see what happens beneath the hood
                            and see the current issues. 
                        </p>

                        <ul> 
                            <li> 
                                <a> 
                                    <p> 
                                        Source code here
                                    </p> 
                                </a>
                            </li>
                            
                            <li>
                                <a> 
                                    <p> 
                                        Read more
                                    </p> 
                                </a>
                            </li>
                        </ul>
                    
                    </div>
                    
                    <div> 
                        <p> Secure </p>
                        
                        <p> 
                            An open platform, that everyone
                            can help collaborate on, be able to 
                            see what happens beneath the hood
                            and see the current issues.
                        </p>
                    
                    </div>
                    
                    <div> 
                        <p> Productive </p>
                        
                        <p> 
                            An open platform, that everyone
                            can help collaborate on, be able to 
                            see what happens beneath the hood
                            and see the current issues.
                        </p>
                    
                    </div>
            </div>

        </section>
        
        <!-- ACTION AREA -->
        <section> 
            <div>
                    <img />
            </div>
            <p> Download Pioneer diagram </p>
            <p> A fast, productive and privacy respecting tool to be productive for tomorrow </p>
            <a href="#"> <p> Download here </p> </a>
        </section>
    </main>
        
<?php
    get_footer();
?>
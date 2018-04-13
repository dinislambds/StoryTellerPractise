
    
    <section id="team-members" class="section-padding text-center">
        <div class="container">
           
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wow zoomIn">
                    <div class="page-title">
                        <h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, tempore.</p>
                    </div>
                </div>
            </div>
            


                                  
            <div class="row">
            
            <?php
                // The Query
                $the_query = new WP_Query( array(
                    'post_type'          => 'team',
                    'posts_per_page'     => 4,
                    'order'              => 'ASC'
                    ) );

                // The Loop
                if ( $the_query->have_posts() ) {

                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        $team_desgination = get_post_meta( get_the_ID(), '_KING_KHAN_team_desgination', true );
                        ?>


                <div class="col-sm-3 wow zoomIn">
                    <div class="single-team">
                        <?php the_post_thumbnail(); ?>
                        <h2> <?php the_title(); ?> </h2>
                        <p> <?php echo $team_desgination; ?> </p>
                    </div>
                </div>
            

                    <?php }

                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {
                    // no posts found
                }
                ?>




            </div>
        </div>
    </section> <!-- End team members -->
    
    
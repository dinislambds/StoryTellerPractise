
   
    
    <section id="events" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center wow zoomIn">
                    <div class="page-title">
                        <h2>Events</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quisquam harum quidem nobis ipsam, nostrum consequuntur, delectus dolor recusandae asperiores assumenda dignissimos! Illo dolore, deserunt quisquam, vel nisi placeat eligendi.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                   

                    <?php
                        $prefix = '_KING_KHAN_';

                        // The Query
                        $event_query = new WP_Query( array(
                            'post_type'         => 'event',
                            'posts_per_page'    =>  3,
                            'order'             => 'ASC'
                            ) );

                        // The Loop
                        if ( $event_query->have_posts() ) {

                            while ( $event_query->have_posts() ) {
                                $event_query->the_post();
                               $sub_title = get_post_meta( get_the_ID(), $prefix.'sub_title', true );
                               echo $image_select = get_post_meta( get_the_ID(), $prefix.'image_select', true );
                               //$ = get_post_meta( get_the_ID(), $prefix.'', true );
                                ?>

                    
                    <div class="single-event wow zoomIn">
                        <div class="row">
                          

                        <?php if ( $image_select == 2 ) { ?>
                           
                            <div class="col-sm-6">
                                <div class="event-thumb">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            
                              <div class="col-sm-6">
                                <div class="event-title">
                                    <p> <?php echo $sub_title; ?> / <?php the_time('d M, Y') ?></p>
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                
                                <div class="event-content">
                                    <p> <?php echo wp_trim_words( get_the_content(), 25, ' '); ?> </p>
                                </div>
                            </div>
                            
                       <?php } else {  ?>
                            <div class="col-sm-6">
                                <div class="event-title">
                                    <p> <?php echo $sub_title; ?> / <?php the_time('d M, Y') ?></p>
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                
                                <div class="event-content">
                                    <p> <?php echo wp_trim_words( get_the_content(), 25, ' '); ?> </p>
                                </div>
                            </div>
                                     
                            
                            <div class="col-sm-6">
                                <div class="event-thumb">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            <?php } ?>



                        </div>
                    </div>






                            <?php }

                            /* Restore original Post Data */
                            wp_reset_postdata();
                        } else {
                            // no posts found
                        } ?>


                           





                </div>
            </div>
        </div>
    </section> <!-- End events -->
    
    

    
    <section id="more-events" class="section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="old-event-list wow zoomIn">
                        <div class="single-old-event">
                            <h2><a href="">Lorem ipsum dolor sit amet</a></h2>
                            <p>incidunt / 21st March, 2014</p>
                        </div>
                        <div class="single-old-event">
                            <h2><a href="">Consectetur adipisicing elit. Odit</a></h2>
                            <p>Voluptate / 21st March, 2014</p>
                        </div>
                        <div class="single-old-event">
                            <h2><a href="">Omnis quia, nihil ratione sunt</a></h2>
                            <p>Necessitatibus / 21st March, 2014</p>
                        </div>
                        <div class="single-old-event">
                            <h2><a href="">Quidem praesentium animi, fuga</a></h2>
                            <p>Inventore / 21st March, 2014</p>
                        </div>
                        <div class="single-old-event">
                            <h2><a href="">Temporibus ducimus fugit</a></h2>
                            <p>Ipsam / 21st March, 2014</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End more events -->
    
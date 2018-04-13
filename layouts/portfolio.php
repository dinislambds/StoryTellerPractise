   
    <div id="portfolios" class="portfolio-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center wow zoomIn">
                    <div class="page-title">
                        <h2>Portfolio & Screenshots</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas unde itaque iure nesciunt expedita! Beatae consectetur, mollitia nulla, necessitatibus ducimus blanditiis nobis. Quam asperiores molestiae, eum, pariatur officia harum. Sequi.</p>
                    </div>
                </div>
            </div>
        </div>
           
        <div class="portfolio-wrapper">
            <div class="portfolio-menu wow zoomIn">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <?php
                    $terms = get_terms( 'protfolios_category', array(
                            'hide_empty' => false,
                        ) );

                    foreach ($terms as $key => $term) {
                        echo '<li data-filter=".'. $term->slug .'">'. $term->name. '</li>';
                    }

                    ?>
                    
                    
                </ul>
            </div>
            
            <div class="portfolio-items wow zoomIn">
                        <?php
                        // The Query
                        $post_query = new WP_Query( array(
                            'post_type'             => 'protfolios',
                            'posts_per_page'        => -1,
                            ) );

                        // The Loop
                        if ( $post_query->have_posts() ) {

                            while ( $post_query->have_posts() ) {
                                $post_query->the_post();
                                $post_terms = get_the_terms( get_the_ID(), 'protfolios_category' );
                                ?>
                                

                                       
                <figure class="single-portfolio <?php foreach ($post_terms as $key => $post_term) {
                     $term_slug = $post_term->slug.' ';
                     echo $term_slug;
                } ?>">
                    <?php the_post_thumbnail(); ?>
                    <figcaption>
                        <h2>Creative <span>Zoe</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_1_big.jpg" class="strip" data-strip-caption="Creative Zoe" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                    </figcaption>           
                </figure>               
               



                            <?php }
                            
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        } else {
                            // no posts found
                        }
                        ?>
               
               
                
               
                
            </div>              
        </div>
            

    </div> <!-- End portfolio area -->     
    

    
    
    <section id="our-blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center wow zoomIn">
                    <div class="page-title">
                        <h2>Featured Articles</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequuntur officia delectus ex hic nobis maxime. Quasi incidunt blanditiis rem molestiae aut excepturi. Voluptatibus dolor, molestias nostrum ullam ratione odit.</p>
                    </div>
                </div>
            </div>           
            

            <div class="row">
                <div class="col-md-12">
                    <div class="article-list wow zoomIn">

                    <?php 
                        $post_query = null;
                         $post_query = new WP_Query( array(
                            'post_type'         => 'post',
                            'posts_per_page'    => -1,
                            'order'             => 'ASC',
                            'category_name'               => '',
                            ) );

                         if ($post_query->have_posts()) {
                             while ($post_query->have_posts()) {
                                 $post_query->the_post(); ?>
                            

                        <div class="single-article">
                            <div class="article-header">
                                <a href=""><?php echo storyteller_cate(); ?> </a>
                            </div>
                            
                            <div class="article-title">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            
                            <div class="article-footer">
                            <?php echo get_avatar(get_the_author_meta('ID'), 60); ?>
                                
                                <p> <?php the_author_posts_link(); ?><br/><?php the_time('d/m/Y'); ?></p>
                            </div>
                        </div>



                            <?php }
                         }

                    ?>
                        


                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End our blog -->
    
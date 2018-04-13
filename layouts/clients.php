<?php 
global $storyteller_options;
    $clients_logo = $storyteller_options['client-slides'];
?>
    
    <section id="our-clients" class="section-padding section-gray">
        <div class="container">
           
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wow zoomIn">
                    <div class="page-title text-center">
                        <h2>Clients</h2>
                    </div>
                </div>
            </div>
                       
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="client-list wow zoomIn">
                        
                    <?php
                            
                        if ( is_array($clients_logo) ) {
                        
                        foreach ($clients_logo as $key => $value_logo) { 
                            
                            ?>

                        <div class="single-client">
                            <img src="<?php echo $value_logo['image']; ?>" alt="">
                        </div>
                        

                        <?php }  } else { ?> 
                        
                          <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/client_1.png" alt="">
                        </div>


                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/client_2.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/client_3.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/client_4.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/client_5.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/client_1.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/client_2.png" alt="">
                        </div>


                        <?php }       ?>


                      


                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End our clients -->  
    
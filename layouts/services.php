<?php 
global $storyteller_options;
    
     $services_content = $storyteller_options['opt-slides'];

?>

    <section id="our-services" class="section-gray section-padding">
        <div class="container">
            <div class="row">
            <?php 
                if (is_array($services_content)) {
                    
              
                foreach ($services_content as $key => $singleValue ) { ?>
                    
                <div class="col-sm-4 wow zoomIn" data-wow-delay="100ms" data-wow-duration="700ms">
                    <div class="single-service">
                        <i class="<?php echo $singleValue['url']; ?>"></i>
                        <h2> <?php echo $singleValue['title']; ?> </h2>
                        <p> <?php echo $singleValue['description']; ?> </p>
                    </div>
                </div>
               
               <?php } } else{ ?> 

                <div class="single-service">
                        <i class="li_fire"></i>
                        <h2>An Wow Feature</h2>
                        <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living.</p>
                    </div>
                </div>
                <div class="col-sm-4 wow zoomIn" data-wow-delay="300ms" data-wow-duration="700ms">
                    <div class="single-service">
                        <i class="li_truck"></i>
                        <h2>A Beautiful Feature</h2>
                        <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living.</p>
                    </div>
                </div>
                <div class="col-sm-4 wow zoomIn" data-wow-delay="500ms" data-wow-duration="700ms">
                    <div class="single-service">
                        <i class="li_clip"></i>
                        <h2>An Amazing Feature</h2>
                        <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living.</p>
                    </div>
                </div>
                

               <?php } ?>


                

            </div>
        </div>
    </section> <!-- End our services -->
    
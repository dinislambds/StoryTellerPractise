<?php
global $storyteller_options;
    $facts_color = $storyteller_options['facts_color'];
    $facts_opacity = $storyteller_options['facts_opacity'];
    $facts_slides = $storyteller_options['facts-slides'];
?>



    <section id="facts" class="section-padding text-center" style="background-color: <?php echo $facts_color; ?>">
        <div class="facts-bg" style="opacity: <?php echo $facts_opacity; ?>"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wow zoomIn">
                    <div class="page-title">
                        <h2>Facts</h2>
                    </div>
                    
                    <div class="facts-wrapper wow zoomIn">
                        <div class="row">
                            



                        <?php 
                            if ( is_array($facts_slides) ) {
                                
                           
                            foreach ($facts_slides as $key => $facts_value) { ?>
                                
                            <div class="col-sm-6">
                                <div class="single-fact">
                                    <h2><span class="counter"> <?php echo $facts_value['title']; ?> </span></h2>
                                    <p> <?php echo $facts_value['description']; ?> </p>
                                </div>
                            </div>



                            <?php } } else { ?>

                            

                            <div class="col-sm-6">
                                <div class="single-fact">
                                    <h2><span class="counter">110</span></h2>
                                    <p>successful projects</p>
                                </div>
                            </div>

                            
                            <div class="col-sm-6">
                                <div class="single-fact">
                                    <h2><span class="counter">25</span></h2>
                                    <p>awesome clients</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-fact">
                                    <h2><span class="counter">30</span></h2>
                                    <p>open source plugins</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-fact">
                                    <h2><span class="counter">13</span></h2>
                                    <p>open source themes</p>
                                </div>
                            </div>

                           <?php } ?>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End facts -->
    
<?php 
global $storyteller_options;
$about_icon = $storyteller_options['about_icon'];
$about_description_content = $storyteller_options['about_description_content'];
?>

    <section id="about" class="section-padding text-center">
        <div class="container">
            
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="about-text wow bounceIn">
                        <div class="about-icon">
                        <?php if($about_icon) {
                            echo '<i class="fa fa-'.$about_icon.'"></i>';
                        } else {
                            echo '<i class="fa fa-facebook"></i>';
                            }  ?>
                            
                        </div>
                        
                        <?php if($about_description_content){
                            echo $about_description_content;
                        } 

                        else { 
                            echo '<h2>Who & Why</h2>
                        <p> The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept closed in the evening. But Gregor found it easy to give up having the door open, he had, after all, often failed to make use of it when it was open and, without the family having noticed it, lain in his room in its darkest corner. One time, though, the charwoman left the door. </p>';

                            } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End about -->
    
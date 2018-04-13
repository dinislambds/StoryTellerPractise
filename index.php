<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package storyteller
 */

get_header(); ?>

	
    <section id="slider">
       
        <div data-velocity="-.2" class="overlay-bg slide-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-text-table">
                        <div class="slide-text-table-cell">
                            <div class="slide-text wow fadeIn">
                                <h1>STORYTELLER</h1>

                                <p> One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.  </p>   

                                <a href="" class="learn-more">read the rest</a>                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> <!-- End slider -->
    
    

    <?php 
    	global $storyteller_options;
    	$homepage_layout = $storyteller_options['opt-homepage-layout']['enabled'];

    	foreach ($homepage_layout as $key => $value) {

    		switch ($key) {
    			case 'about':	get_template_part('layouts/about', 'about');
    				break;
    			

    			case 'services':	get_template_part('layouts/services', 'services');
    				break;
    			
                case 'blog':    get_template_part('layouts/blog', 'blog');
                    break;
                

                case 'clients': get_template_part('layouts/clients', 'clients');
                    break;
                

                case 'events':  get_template_part('layouts/events', 'events');
                    break;
                

                case 'facts':   get_template_part('layouts/facts', 'facts');
                    break;
                

                case 'portfolio':   get_template_part('layouts/portfolio', 'portfolio');
                    break;
                


    			case 'team':	get_template_part('layouts/team', 'team');
    				break;
    			

    			case 'testimonials':	get_template_part('layouts/testimonials', 'testimonials');
    				break;
    			

    			case 'twitter':	get_template_part('layouts/twitter', 'twitter');
    				break;
    			


    		}
    	}
    ?>








<?php
get_footer();
?>
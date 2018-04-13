<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package storyteller
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

 <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>

    <!-- Bootstrap css form cdn -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/linecons.css">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/strip/css/strip.css">
    
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <h1><a href="<?php echo site_url(); ?>">unicorn</a></h1>
                        
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>                         
                    </div>
                </div>
                
                <div class="col-sm-10">
                         

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right text-uppercase">
                            <li class="active"><a href="#slider">home</a></li>

    <?php 
        global $storyteller_options;
        $homepage_layout = $storyteller_options['opt-homepage-layout']['enabled'];

        foreach ($homepage_layout as $key => $value) {

            switch ($key) {
                case 'about':   echo '<li><a href="#about">about</a></li>';
                    break;
                

                case 'blog':    echo '<li><a href="#our-blog">articles</a></li>';
                    break;
                

                case 'clients': echo '<li><a href="#our-clients">clients</a></li>';
                    break;
                

                case 'events':  echo '<li><a href="#events">events</a></li>';
                    break;
                

                case 'facts':   echo '<li><a href="#facts">facts</a></li>';
                    break;
                

                case 'portfolio':   echo '<li><a href="#portfolios">portfolios</a></li>';
                    break;
                
                case 'testimonials':    echo '<li><a href="#testimonials">testimonials</a></li>';
                    break;

                case 'services':    echo '<li><a href="#our-services">services</a></li>';
                    break;
                

                case 'team':    echo '<li><a href="#team-members">team</a></li>';
                    break;
                

                

                case 'twitter': echo '<li><a href="#twitter-feed">twitter</a></li>';
                    break;
        
            


               
            }
        }
    ?>
                           
                           
                            
                            <li><a href="#footer">contact us</a></li>
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </header> <!-- End header -->
    

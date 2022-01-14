<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/cf50086926.js" crossorigin="anonymous"></script>
    <title><?php wp_title();?></title>

    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>


<header id="header">
<nav>
    <div class="container">
        <div class="row top">
            

                    <!------------------------------nav-menu-left--------------------------------->
            <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="nav-bar-left">
                        <?php
                        $args = [
                            'theme_location' => 'primary-left'
                        ];
						 wp_nav_menu($args);
						?>
                    </div>

  
                    <div class="hamburger-wrap">
                        <i class="fas fa-bars" style="color:#8A4F46;font-size:32px;"></i>
        
                            <div class="hamburger-nav">
                                <?php
                                $args = [
                                'theme_location' => 'primary-hamburger'
                                ];
						        wp_nav_menu($args);
						        ?>
                            </div>     
                    </div>
            </div>



       
                
                    <!------------------------------logga--------------------------------->
            <div class="col-xs-4 col-sm-4 col-md-4">
                    
                    <?php
                        $website_logo = get_field('logo_header', 'options');
                        if( !empty($website_logo) ):
                    ?>
                            <a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo $website_logo['url']; ?>"></a>

                    <?php endif; ?>	
                    
            </div>
                    <!------------------------------nav-menu-right--------------------------------->
            <div class="col-xs-4 col-sm-4 col-md-4">       
                    <div class="nav-bar-right">
                        <?php
                        $args = [
                            'theme_location' => 'primary-right'
                        ];
						 wp_nav_menu($args);
                        ?>
                    </div> 

                    <div class="search-wrap">
                    <a href="search.php"><i class="fa fa-search" aria-hidden="true" style="color:#8A4F46;font-size:32px;"></i></a>
                    </div>     
            </div>
                    
                    
</nav>     
                    




<!-------------------------------det gula fältet------------------------------------------------>    

            <div class="yellow-bar">
                    <!--------------------------breadcrumbs------------------------------>       
                <div class="bread-container">    
                    <?php if(function_exists('breadcrumbs')): ?>
                    
                        <?php breadcrumbs();?>
                    
                    <?php endif; ?>
                </div> 
                    <!------------------------search-------------------------------> 
                    <div class="nav-search">
                        <?php get_search_form(); ?>
                    </div>
                
            </div>

        
</header>


	


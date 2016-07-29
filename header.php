<!DOCTYPE html>
<html lang="en">
<head>
 <title><?php wp_title( '|', true, 'right' ); ?></title>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php wp_head(); ?>
</head>
<body <?php body_class( $alpha_classes); ?> >
  <div id="site-wrap">
    <div id="wa-header"> <!-- Start of Header wrap -->
     <!-- Primary Menu with Logo -->
     <div class="top-bar-wrapper">
       <div class="top-bar">
         <div class="top-bar-title">
          <div class="wa-menu-button">
           <span data-responsive-toggle="responsive-menu" data-hide-for="large">
             <button class="menu-icon" type="button" data-toggle></button>
           </span>
           <span  class="wa-burger-menu-text" data-responsive-toggle="responsive-menu" data-hide-for="large">
             MENU - Inland  <span class="toner">Toner</span>
           </span>
         </div>
         <div class="show-for-large wa-backing"><?php  
           if (has_custom_logo('$blog_id = 0') ) {
             the_custom_logo( $blog_id = 0 );
           }  ?>
         </div>
       </div>

       <div id="responsive-menu"><span class="wa-vertical-align"></span>
         <div class="top-bar-left hide-for-large">

           <?php wp_nav_menu(array('theme_location'=>'primary')); ?> 
           
           <ul class="menu">
             <li><?php get_search_form(); ?></li>
           </ul>
         </div>

         <div class="top-bar-left show-for-large">
           <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
         </div>
         
         <div class="top-bar-right show-for-large">

           <ul class="menu">
             <li><?php get_search_form(); ?></li>
             <li><button type="button" class="search-icon"><img src="<?php echo bloginfo('template_directory') . '/images/search-icon.png'; ?> " alt="search-icon"></button></li>
           </ul>

         </div>

       </div> 
     </div> 
   </div>
 </div>
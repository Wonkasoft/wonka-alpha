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
  <div id="site-wrap"> <!-- Start of Site Wrap -->
    <div id="wa-header"> <!-- Start of Header wrap -->
     <!-- Primary Menu with Logo -->
     <div class="top-bar-wrapper">

      <div class="top-bar">
        <div class="top-bar-title">
          <div class="wa-backing"><?php  
           if (has_custom_logo('$blog_id = 0') ) {
             the_custom_logo( $blog_id = 0 );
           }  ?>
           </div>
        </div>
        <div class="wa-menu-button">
          <span class="wa-textColor" data-responsive-toggle="responsive-menu" data-hide-for="large">MENU</span>
           <span data-responsive-toggle="responsive-menu" data-hide-for="large">
           <button class="menu-icon" type="button" data-toggle></button> 
          </span>
          </div>
        <div id="responsive-menu" class="wa-clear-center">
          <div class="top-bar-left hide-for-large">
          <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
          </div>
          <div class="top-bar show-for-large">
            <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
          </div>
          <div class="top-bar-right show-for-large">
            <ul class="wa-search">
              <li><div class="search-form-container"><?php get_search_form(); ?></div></li>
              <li><button type="button" class="search-icon"><img src="<?php echo bloginfo('template_directory') . '/images/search-icon.png'; ?> " alt="search-icon"></button>
              </li>
            </ul>
        </div>
      </div>
    </div>
 </div>  <!-- End of Header wrap -->
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
       <div class="top-bar-wrapper" data-sticky-container>
       <div class="top-bar hide-for-large sticky" data-sticky data-options="marginTop:0;">
          <div class="top-bar-title">
            <div class="wa-menu-button">
             <span data-responsive-toggle="responsive-menu" data-hide-for="large">
               <button class="menu-icon" type="button" data-toggle></button>
             </span>
             <span  class="wa-burger-menu-text" data-responsive-toggle="responsive-menu" data-hide-for="large">
               MENU - Inland  <span class="toner">Toner</span>
             </span>
           </div>
         </div>
         <div id="responsive-menu">
          <div class="wa-logo-margin">
            <div class="top-bar-right wa-centered">
            <div class="wa-top-bar-menu-alignment">
              <?php wp_nav_menu(array('container_id'=>'menu-main-nav', 'theme_location'=>'primary')); ?> 
              <ul class="hide-for-large wa-responsive-search">
                <li><button type="button" class="search-icon"><img src="<?php echo bloginfo('template_directory') . '/images/search-icon.png'; ?> " alt="search-icon" /></button></li>
                <li><?php get_search_form(); ?></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>
         <div class="top-bar show-for-large">
           <div class="show-for-large wa-sub-menu-top">
           <div class="top-bar-right">
               <ul class="wa-sub-menu-list-inline">
                <li><?php get_search_form(array('wa-search-for-large')); ?></li>
                <li><button type="button" class="search-icon"><img src="<?php echo bloginfo('template_directory') . '/images/search-icon.png'; ?> " alt="search-icon" /></button></li>
                <li><button type="button" class=""><img class="wa-chart" src="<?php echo bloginfo('template_directory') . '/images/shopping-chart.png'; ?>" /></button></li>
                <li>
                  <?php wp_nav_menu(array('container_id'=>'menu-sub-menu-top', 'theme_location'=>'third')); ?>
                </li>
              </ul>
            </div>
          </div>
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
         <div id="responsive-menu">
         <div class="hide-for-large wa-backing"><?php  
             if (has_custom_logo('$blog_id = 0') ) {
               the_custom_logo( $blog_id = 0 );
             }  ?>
           </div>
          <div class="wa-logo-margin">
            <div class="top-bar-right wa-centered">
            <div class="wa-top-bar-menu-alignment">
              <?php wp_nav_menu(array('container_id'=>'menu-main-nav', 'theme_location'=>'primary')); ?> 
              <ul class="hide-for-large wa-responsive-search">
                <li><button type="button" class="search-icon"><img src="<?php echo bloginfo('template_directory') . '/images/search-icon.png'; ?> " alt="search-icon" /></button></li>
                <li><?php get_search_form(); ?></li>
                </ul>
              </div>
            </div>
        </div> 
      </div> 
    </div>
    </div>
</div>
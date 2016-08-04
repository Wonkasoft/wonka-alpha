$( document ).ready(function() {
  checkSize();
  $(window).resize(checkSize);

// Primary Mobile Menu
 var wa_menu_li = document.createElement('li');
 var wa_menu_a = document.createElement('a');
 wa_menu_li.appendChild(wa_menu_a);
 wa_menu_a.href = "/";
 wa_menu_li.className = "hide-for-large";
 wa_menu_a.innerHTML = "Home";
 $('#menu-main-nav > ul').prepend(wa_menu_li);

  // Orbit Changes
   $('.orbit-container').css('height','100%');
   $('.orbit-slide').css('height','100%');
   $('.search-input').hide(); 

   // Search changes
   $('.search-input').hide();   
       $('.search-icon').click(function() {
           $('.search-input').slideToggle().focus().val("");
       });
    
   function checkSize() { 
    if ($(window).width() <= 1006) {   
   $main_navigation = $('#menu-main-navigation').hasClass('vertical');
   $clear_center = $('.wa-logo-margin').hasClass('wa-clear-centered');
   if ($main_navigation == false) {
   $('#menu-main-navigation').addClass('vertical');
   } 
   if ($clear_center == false) {
    $('.wa-logo-margin').addClass('wa-clear-centered');
   }
 } else {
   $main_navigation = $('#menu-main-navigation').hasClass('vertical');
   $clear_center = $('.wa-logo-margin').hasClass('wa-clear-centered');
   if ($main_navigation == true) {
   $('#menu-main-navigation').removeClass('vertical');
   }
   if ($clear_center == true) {
    $('.wa-logo-margin').removeClass('wa-clear-centered');
   }
 }  };
     
});
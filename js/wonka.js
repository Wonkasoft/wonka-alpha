$( document ).ready(function() {
  checkSize();
  $(window).resize(checkSize);

   $('.orbit-container').css('height','100%');
   $('.orbit-slide').css('height','100%');
       
       $('.search-icon').click(function() {
           $('.search-input').slideToggle().focus().val("");
       });
    
   function checkSize() { 
    if ($(window).width() <= 1006) {   
   $('.search-input').show();
   $main_navigation = $('#menu-main-navigation').hasClass('vertical');
   $clear_center = $('#responsive-menu').hasClass('wa-clear-center');
   if ($main_navigation == false) {
   $('#menu-main-navigation').addClass('vertical');
   } 
   if ($clear_center == false) {
    $('#responsive-menu').addClass('wa-clear-center');
   }
 } else {
   $('.search-input').hide();
   $main_navigation = $('#menu-main-navigation').hasClass('vertical');
   $clear_center = $('#responsive-menu').hasClass('wa-clear-center');
   if ($main_navigation == true) {
   $('#menu-main-navigation').removeClass('vertical');
   }
   if ($clear_center == true) {
    $('#responsive-menu').removeClass('wa-clear-center');
   }
 }  };
     
});
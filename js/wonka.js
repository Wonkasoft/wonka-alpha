$( document ).ready(function() {
checkSize();
$(window).resize(checkSize);

  $('.orbit-container').css('height','100%');
  $('.orbit-slide').css('height','100%');
      
      $('.search-icon').click(function() {
          $('.search-input').slideToggle().focus().val("");
      });
   
function checkSize() { if ($(window).width() <= 1022) {   
  $('.search-input').show();

  if ($('#menu-main-navigation').hasClass('vertical') == "false") {
  $('#menu-main-navigation').addClass('vertical');
  }
    else {
  $('.search-input').hide();
  if ($('#menu-main-navigation').hasClass('vertical') == "true") {
  $('#menu-main-navigation').removeClass('vertical');
  }
}  
};
    
});
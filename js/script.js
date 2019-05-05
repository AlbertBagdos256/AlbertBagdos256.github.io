$(document).ready(function () {
  var $burger = $('.burger');
  var $menu = $('.header-menu');
  var $close = $('.close');
  $links = $('.final');
  $(window).scroll(function () { 
      var scroll = $(this).scrollTop();
      if (scroll > 800) {
          $burger.fadeIn();
      }
  
      else {
          $burger.fadeOut();
      }
   
   })
  $burger.click(function () {
      $menu.addClass('menu-active')
     if ($menu.hasClass('menu-active')) {
      $close.show()
      $burger.hide()
  }
  else {
    $close.hide()
    $burger.show()
  }  
  })
 $close.click(function (e) {
     e.preventDefault()
     $menu.removeClass('menu-active')
     if ($menu.hasClass('menu-active')) {
        $close.show()
        
    }
    else {
      $close.hide()
      $burger.show()
    } 
   })
   
  
   $links.click(function (e) {
       e.preventDefault();
       $links.removeClass('active-link');
       var attr = $(this).addClass('active-link').attr('href'); //#home
       var target = $(attr).offset().top //get from home find coordinations of sections
       
       $('body, html').animate({
          scrollTop: target 
       });
   })
   
   $(window).scroll(function () {
       var scroll = $(this).scrollTop()
       $links.each(function () {
           var id = $(this).attr('href');
           var selector = $(id).offset().top
           if (scroll >= selector) {
            $links.removeClass('active-link');
               $(this).addClass('active-link');
           }
         })
       
   })
});

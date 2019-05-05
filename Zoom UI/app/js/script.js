$(document).ready(function () {
    var $burger = $('.burger');
    var $menu = $('.header-menu');
    var $close = $('.close');
    var $navbar = $('.menu-top');
    var $links = $('.menu-link');
    $burger.click(function () {
       
        $menu.addClass('menu-active')
        if ($menu.hasClass('menu-active')) {
            $navbar.animate({
                opacity: 0
            },200, function () {
                $navbar.css('opacity', 1).removeClass('fixed-top')
            });
            $close.show()
        }
        else {
            $navbar.addClass('fixed-top')
            $close.hide()
        }
    })
    $close.click(function (e) {
        e.preventDefault()
        $menu.removeClass('menu-active')
        if ($menu.hasClass('menu-active')) {
            $navbar.removeClass('fixed-top')
            $close.show()
        }
        else {
            $navbar.addClass('fixed-top')
            $close.hide()
        }
    })
$links.click(function (e) {
    e.preventDefault()

    var attr = $(this).attr('href')
    var target = $(attr).offset().top
    
    $('body, html').animate({
       scrollTop: target 
    },1500)
})

$(window).scroll(function () {  
    var scroll = $(this).scrollTop()
    $links.each(function () {
        var id = $(this).attr('href');
        var selector = $(id).offset().top
        
        if (scroll >= selector) {
            $links.removeClass('active-link');
            $(this).addClass('active-link')
        }
    })
})
  $('.slider').owlCarousel({
      items: 4,
      loop: true,
      responsive: {
          0: {
              items: 2
          },
          767: {
              items: 3
          },
          900:{
              items:4
          }
      }

  });
});
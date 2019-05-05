$(document).ready(function () {
    var $burger = $('.burger');
    var $menu = $('.header-menu');
    var $close = $('.close');
    var $navbar = $('.menu-top')
    var $links = $('.menu-link')
    var $navLinks = $('.nav-link')
    $burger.click(function () {
        $menu.addClass('menu-active')
        if ($menu.hasClass('menu-active')) {
            $navbar.animate({
                opacity: 0
            }, 200, function () {
                $navbar.css('opacity', 1).removeClass('fixed-top')
            })
            $close.show()
        }
        else {
            // $navbar.addClass('fixed-top')
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
        e.preventDefault();

        var attr = $(this).attr('href') //#home
        var target = $(attr).offset().top
        
        $('body, html').animate({
            scrollTop: target
        },1500)
    })

    $(window).scroll(function () {
        var scroll = $(this).scrollTop()

        $links.each(function() {
            var id = $(this).attr('href')
            var selector = $(id).offset().top - 5

            if (scroll >= selector) {
                $links.removeClass('active-link');
                $(this).addClass('active-link')
            }
        })
        console.log(scroll);
    })

    var $grid = $('.tab-content').isotope({
        itemSelector: '.tab-item'
    });
    $navLinks.click(function (e) {
        e.preventDefault();
        $navLinks.parent().removeClass('nav-active')
        $(this).parent().addClass('nav-active')
        var attr = $(this).attr('data-filter')
        $grid.isotope({
            filter: attr
        })
    })
    
    $('.slider').owlCarousel({
        items: 4,
        loop: true,
        margin: 25,
        responsive: {
            0: {
                items: 2
            },
            767: {
               items: 3 
            },
            
            900: {
                items: 4
            }
        },
        autoplay: true,
        autoplayTimeout: 1200
    });
    
});

$('.count').counterUp({
    time: 2000,
});
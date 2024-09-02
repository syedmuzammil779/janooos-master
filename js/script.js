$(function () {
    "use strict";

    /*------ MENU Fixed ------*/
    $(window).scroll(function () {
        var $scroll = $(window).scrollTop();
        var $navbar = $(".navbar");
        var $header = $(".header-icon-bars ");
        if ($scroll > 100) {
            $navbar.addClass("scroll-nav");
            $header.addClass("bar-color");
        } else {
            $navbar.removeClass("scroll-nav");
            $header.removeClass("bar-color");
        }
    });
    $('.hamburger').click(function(){
        $(this).toggleClass('active');


    });
    $('.client-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText: ["<img src='http://localhost/janus/wp-content/uploads/2021/03/left-arow.png'>","<img src='http://localhost/janus/wp-content/uploads/2021/03/right-arow.png'>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:1
            }
        }
    })
    $('.hamburger').click( function(e) {
        e.preventDefault();
        $('.menuContainer').slideToggle();
    })

});




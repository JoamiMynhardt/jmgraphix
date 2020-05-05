 (function ($) {
   "use strict";

   /* PREALODER */
   $(window).on("load", function() {
     $(".loader").delay(5000).fadeOut("slow");
     $("#overlayer").delay(600).fadeOut("slow");
     $("#wrapper").delay(600).fadeIn("slow");
     $(".typing-text").delay(1000).fadeIn("slow");
   })


   /* MENU OPEN / CLOSE */
   function menuOpen() {

     setTimeout(function () {
       $(".popup-menu").css({
         "opacity": "1",
         "visibility": "visible"
       });

       $(".menu-close").animate({
         opacity: '1'
       });
       $(".menu-open").animate({
         opacity: '0'
       });
     }, 500);

     setTimeout(function () {
       $(".menu-area ul li:nth-child(1)").animate({
         opacity: '1'
       });
     }, 900);
     setTimeout(function () {
       $(".menu-area ul li:nth-child(2)").animate({
         opacity: '1'
       });
     }, 1200);
     setTimeout(function () {
       $(".menu-area ul li:nth-child(3)").animate({
         opacity: '1'
       });
     }, 1500);
     setTimeout(function () {
       $(".menu-area ul li:nth-child(4)").animate({
         opacity: '1'
       });
     }, 1800);
     /* RESPONSIVE MENU CODE */
     if ($(window).width() >= 1280 && $(window).height() >= 768) {
       setTimeout(function () {
         $(".menu-area").animate({
           width: '60%',
           padding: '50px'
         });
       }, 500);
     } else if ($(window).width() >= 768 && $(window).height() >= 768) {

       setTimeout(function () {
         $(".menu-area").animate({
           width: '80%',
           padding: '50px'
         });
       }, 500);
     } else if ($(window).width() > 400 && $(window).height() < 768) {
       setTimeout(function () {
         $(".menu-area").animate({
           width: '80%',
           padding: '15px'
         });
         $(".menu-area ul li").animate({
           lineHeight: '50px'
         });
         $(".menu-area ul li a").animate({
           lineHeight: '30px',
           fontSize: '16px',
           textIndent: '-8px',
           letterSpacing: '8px'
         });
         $(".menu-area .menu-close").animate({
           marginTop: '-55px'
         });
       }, 500);
     } else {
       setTimeout(function () {
         $(".menu-area").animate({
           width: '80%',
           padding: '15px'
         });
         $(".menu-area ul li a").animate({
           lineHeight: '50px',
           fontSize: '16px',
           textIndent: '-8px',
           letterSpacing: '8px'
         });
       }, 500);
     }

   }

   function menuClose() {
     setTimeout(function () {
       $(".popup-menu").css({
         "opacity": "0",
         "visibility": "hidden"
       });
       $(".menu-area ul").animate({
         padding: '0px'
       });
       $(".menu-area").animate({
         width: '0px'
       });
       $(".menu-open").animate({
         opacity: '1'
       });
       $(".menu-close").animate({
         opacity: '0'
       });
     }, 700);

     setTimeout(function () {
       $(".menu-area ul li:nth-child(4)").animate({
         opacity: '0'
       });
     }, 100);
     setTimeout(function () {
       $(".menu-area ul li:nth-child(3)").animate({
         opacity: '0'
       });
     }, 300);
     setTimeout(function () {
       $(".menu-area ul li:nth-child(2)").animate({
         opacity: '0'
       });
     }, 500);
     setTimeout(function () {
       $(".menu-area ul li:nth-child(1)").animate({
         opacity: '0'
       });
     }, 700);
   }
   $(".menu-close").on("click", function() {
     menuClose();
   });

   $(".menu-open").on("click", function() {
     menuOpen();
   });

   $(document).click('change', '.menu-close', function () {
     menuClose();
   });

   /* HOME SLIDER */
   $(".fullscreen-slider").slick({
     dots: true,
     arrows: false,
     infinite: true,
     centerMode: false,
     autoplay: true
   });

   /* EXPERIENCE CAROUSEL */
   $.js = function (el) {
     return $('[data-js=' + el + ']')
   };

   function carousel() {
     $.js('experience-carousel').slick({
       infinite: true,
       arrows: false,
       dots: true,
       autoplay: false,
       speed: 1100,
       slidesToShow: 2,
       slidesToScroll: 1,
       centerMode: true,
       responsive: [{
         breakpoint: 800,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       }]
     });
   }

   carousel();

/* LIGHT GALLERY */
$(document).on("ready", function() {
  $('#lightgallery').lightGallery({
    pager: true
  });
});


/* PREALODER */
   $(window).on("load", function() {

var wow = new WOW({
       boxClass: 'wow',
       animateClass: 'animated',
       offset: 0,
       mobile: true,
       live: true
     });
     wow.init();
   });
 })(jQuery);

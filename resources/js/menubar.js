jQuery(document).ready(function ($) {
  
  'use strict';
  
   var c, currentScrollTop = 0,
       navbar = $('.fixed-top');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();
     
      currentScrollTop = a;

     
     if (c < currentScrollTop && a > b) {
        navbar.addClass("scrollUp");
        navbar.removeClass("scrollTop");
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scrollUp");
        navbar.addClass("scrollDown");
        navbar.removeClass("scrollTop");
      } else if ($(document).scrollTop() < 500) {
        navbar.addClass("scrollTop");
        navbar.removeClass("scrollUp");
        navbar.removeClass("scrollDown");
      }
      c = currentScrollTop;

  });
});
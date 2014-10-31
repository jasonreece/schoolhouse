var animateDiv = function(){
  $(".js-hero-thank-you").animate({opacity:0,zIndex:-1},1000,function(){});
};

var animateCarousel = function() {
  if ($('.carousel')) {
    $('.carousel').carousel({
      interval: 7500,
      pause: false
    });
  }
};

$(document).ready(function(){
  animateDiv();
  animateCarousel();
});
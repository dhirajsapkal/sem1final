$(document).foundation();
$(document).ready(function(){
  $('.product-slider').slick({
    // arrows: true,
    mobileFirst: true,
    slidesToShow: 5,
    focusOnSelect: false,
    dots: false,
    prevArrow: true,
    nextArrow: true,

    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }]
  });
});
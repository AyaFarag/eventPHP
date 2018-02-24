$(document).ready(function(){
  
   
    $('.responsive').slick({
          dots: true,
          infinite: true,
          speed: 500,
            autoplay: true,
            autoplaySpeed: 3500,
          slidesToShow: 3,
          slidesToScroll: 1,
            prevArrow:'.slider-container .next',
            nextArrow:'.slider-container .prev',
          responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

});
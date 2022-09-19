$('.slider').slick({
  infinite: false,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow:5,
  slidesToScroll: 1,
  dots: true,
  responsive: [
    {
      breakpoint: 1924,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: true,
      }
    },

    {
      breakpoint: 1424,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: true,
      }
    },

    {
      breakpoint: 1224,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
      }
    },

    {
      breakpoint: 990,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },

    {
      breakpoint: 824,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },

    
  

    {
      breakpoint: 763,
      settings: {
        slidesToShow: 2.5,
        slidesToScroll: 2.5,
        arrows: false
      }
    },


    {
      breakpoint: 510,
      settings: {
        slidesToShow: 2.3,
        slidesToScroll: 2.3,
        arrows: false
      }
    },

    {
      breakpoint: 470,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false
      }
    },

    {
      breakpoint: 430,
      settings: {
        slidesToShow: 1.7,
        slidesToScroll:1.7,
        arrows: false
      }
    },
    {
      breakpoint: 364,
      settings: {
        slidesToShow: 1.5,
        slidesToScroll:1.5,
        arrows: false
      }
    }
    
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
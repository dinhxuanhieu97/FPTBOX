jQuery( document ).ready(function() {
    
      

  jQuery('.slider_home_page').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    fade: true,
    cssEase: 'linear',
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          autoplay:true,
          autoplaySpeed: 2000,
        }
      },
      {
        breakpoint: 600,
        settings: {
          autoplay:true,
          autoplaySpeed: 2000,
        }
      },
      {
        breakpoint: 480,
        settings: {
          autoplay:true,
          autoplaySpeed: 3000,
        }
      }
    ]
  });
  
  jQuery('.news__list').slick({
    dots: true,
    infinite: true,
    // speed: 300,
    slidesToShow: 4,
    // autoplay: true,
    // autoplaySpeed: 2000,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
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

  // var menu = jQuery("header");
  // jQuery(window).scroll(function() {
  //     if (jQuery(window).scrollTop() > 200) {
  //         menu.addClass("fix");
  //     } else {
  //         menu.removeClass("fix");
  //     }
  // });

	jQuery('.click-open').click(function(){
		jQuery('.menu__mobile-content').css('display','block');
		//jQuery('.sidenav').addClass('slide-in-blurred-top');
        jQuery('.click-close').css('display','block');
        jQuery('.click-open').css('display','none');
	});
	jQuery('.click-close').click(function(){
		jQuery('.menu__mobile-content').css('display','none');
        jQuery('.click-open').css('display','block');
        jQuery('.click-close').css('display','none');
	});
	
});


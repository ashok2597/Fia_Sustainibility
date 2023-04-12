/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

  equalheight('.equal_Title');
  equalheight('.equal_Content');
  equalheight('.equal_height');

  $('.menubar .navbar').before('<a class="expandMenu"><i></i><i></i><i></i></a>');
  $('.menubar .dropdown-mob').before('<span class="childExpand"><i></i><i></i></span>');
  // $('.menubar .MegaMenuInner').before('<span class="childExpand"><i></i><i></i></span>');
  $(document).on("click", ".expandMenu", function () {
    $(this).toggleClass("active").next().slideToggle(250)

  });
  // $(".hs-item-has-children > a ").attr("href", "javascript:(0);");




  $(document).on("click", ".childExpand", function () {
    $(this).parent().siblings(".childmenu-Mob").find(".childExpand").removeClass("open");
    $(this).parent().siblings(".childmenu-Mob").find(".dropdown-mob").slideUp(250);
    $(this).next(".dropdown-mob").slideToggle(250);
    $(this).toggleClass("open");
    return false
  });


  var windowWidth = $(window).width();
  if (windowWidth > 991) {
    $(document).on("click", ".Megachildmenu > a", function () {
      $(this).parent().siblings('li').find("a").removeClass("open");
      $(this).parent().siblings(".childmenu").find(".dropdown-menu-icon").slideUp(250);
      $(this).parent().find(".dropdown-menu-icon").slideToggle(250);
      $(this).toggleClass("open");
      return false
    });

    $(document).on("click", ".item-has-children > a", function () {
      $(this).parent().siblings(".item-has-children").find("a").removeClass("open");
      $(this).parent().siblings(".item-has-children").find(".dropdown-menu-icon-Inner").slideUp(250);
      $(this).parent().find(".dropdown-menu-icon-Inner").slideToggle(250);
      $(this).toggleClass("open");
      return false
    });

    $(document).on("click", ".child-item-has-children > a", function () {
      $(this).parent().siblings(".child-item-has-children").find("a").removeClass("open");
      $(this).parent().siblings(".child-item-has-children").find(".child-dropdown-menu-icon-Inner").slideUp(250);
      $(this).parent().find(".child-dropdown-menu-icon-Inner").slideToggle(250);
      $(this).toggleClass("open");
      return false
    });

    $(document).on("click", ".CloseIcon", function () {
      $(this).closest(".childmenu").find("a").removeClass("open");
      $(this).closest(".childmenu").find(".childExpand").removeClass("open");
      $(this).closest(".Mega-dropdown-menu").slideUp(250);
    });
  }

  // Top Nxt section

  $(".AngleImgTxt a").click(function () {
    $('html, body').animate({
      scrollTop: $(".IconTitleSection").offset().top - 75
    }, 2000);
  });
  // Animation
  AOS.init({
    offset: 100,
    duration: 1500,
    delay: 100,
    once: true
  });

  window.addEventListener('load', AOS.refresh)

  // Tab V2
  $(".tabsV2").on("click", ".tabV2", function (e) {
    e.preventDefault();
    $(".tabV2").removeClass("activeV2");
    $(".showcontentV2").removeClass("showV2");
    $(this).addClass("activeV2");
    $($(this).attr("href")).addClass("showV2");
    $(this).closest('.tabsV2').find('.expandTabbV2').removeClass('changeV2');

    if ($(window).width() < 768) {
      var tabText = $(".tabV2.activeV2").text();
      $('.expandTabbV2').text(tabText);
    }

  });

  if ($(window).width() < 768) {
    $(".tabPV2 .showcontentV2:nth-child(2)").addClass("showV2");
    $('.expandTabbV2').on('click', function () {
      $(this).next().slideToggle();
      $(this).toggleClass('changeV2');

    });
    $('.tabV2').on('click', function () {
      $(this).parents('.tabsToggleV2').slideUp();

    })
  }
  // 
  $(".tabs").on("click", ".tab", function (e) {
    e.preventDefault();
    $(".tab").removeClass("active");
    $(".showcontent").removeClass("show").fadeOut(1000);
    $(this).addClass("active");
    $($(this).attr("href")).addClass("show").fadeIn(1000);
    $(this).closest('.tabs').find('.expandTabb').removeClass('change');

    if ($(window).width() < 768) {
      var tabText = $(".tab.active").text();
      $('.expandTabb').text(tabText);
    }

  });

  if ($(window).width() < 768) {
    $(".tabP .showcontent:first-child").addClass("show");
    $('.expandTabb').on('click', function () {
      $(this).next().slideToggle();
      $(this).toggleClass('change');

    });
    $('.tab').on('click', function () {
      $(this).parents('.tabsToggle').slideUp();

    })
  }
  // Slider
  var swiper = new Swiper(".mySwiperCounterSlider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: false,
    autoHeight: true,
    // autoplay: {
    //   delay: 2400,
    //   disableOnInteraction: false,
    // },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  //     Counter
  var counted = 0;
  $(window).on('scroll', function () {

    var oTop = $('#counterTop')?.offset()?.top - window.innerHeight;
    if (counted == 0 && $(window).scrollTop() > oTop) {
      $('.count').each(function () {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },

          {

            duration: 2000,
            easing: 'swing',
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
              //alert('finished');
            }

          });
      });
      counted = 1;
    }

  });


  //     Counter New V4
  var countedV4 = 0;
  $(window).on('scroll', function () {

    var oTop = $('#counterTopV4')?.offset()?.top - window.innerHeight;
    if (countedV4 == 0 && $(window).scrollTop() > oTop) {
      $('.countV4').each(function () {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },

          {

            duration: 2000,
            easing: 'swing',
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
              //alert('finished');
            }

          });
      });
      countedV4 = 1;
    }

  });


  //     Counter Inner
  var countedV2 = 0;
  $(window).on('scroll', function () {

    var oTop = $('#counterTopV2')?.offset()?.top - window.innerHeight;
    if (countedV2 == 0 && $(window).scrollTop() > oTop) {
      $('.count').each(function () {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },

          {

            duration: 2000,
            easing: 'swing',
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
              //alert('finished');
            }

          });
      });
      countedV2 = 1;
    }

  });

  //     Counter Two Column
  var countedV2New = 0;
  $(window).on('scroll', function () {

    var oTop = $('#counterTopV2New')?.offset()?.top - window.innerHeight;
    if (countedV2New == 0 && $(window).scrollTop() > oTop) {
      $('.count').each(function () {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },

          {

            duration: 2000,
            easing: 'swing',
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
              //alert('finished');
            }

          });
      });
      countedV2New = 1;
    }

  });

  // Blog Slider

  // Swiper Configuration
  var swiper = new Swiper(".SwiperBlogSlider", {
    slidesPerView: 1.5,
    autoplay: true,
    spaceBetween: 48,
    centeredSlides: true,
    centeredSlidesBounds: true,
    freeMode: true,
    grabCursor: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    // autoplay: {
    //   delay: 4000,
    //   disableOnInteraction: false
    // },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      320: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2.47
      }
    }
  });

  // End of Blog Slider

  // Header Version 2
  $('.V2MenuParent .V2navbar').before('<a class="V2expandMenu"><i></i><i></i><i></i></a>');
  $('.V2MenuParent .V2-dropdown-menu').before('<span class="V2childExpand"><i></i><i></i></span>');
  $(document).on("click", ".V2expandMenu", function () {
    $(this).toggleClass("active").next().slideToggle(250)

  });
  // $(".hs-item-has-children > a ").attr("href", "javascript:(0);");


  $(document).on("click", ".V2childExpand", function () {
    $(this).parent().siblings(".V2childmenu").find(".V2childExpand").removeClass("open");
    $(this).parent().siblings(".childmenu").find(".V2-dropdown-menu").slideUp(250);
    $(this).next(".V2-dropdown-menu").slideToggle(250);
    $(this).toggleClass("open");
    return false
  });

  // Logo Slider

  $('.GrpILogoParent').slick({
    slidesToShow: 8,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 767,
      settings: {
        slidesToShow: 6
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 4
      }
    }]
  });

});


$(window).on('load', function () {
  equalheight('.equal_Title');
  equalheight('.equal_Content');
  equalheight('.equal_height');
});
$(window).on('resize', function () {
  equalheight('.equal_Title');
  equalheight('.equal_Content');
  equalheight('.equal_height');
});

// Equal Height Function
equalheight = function (container) {
  var currentTallest = 0, currentRowStart = 0, rowDivs = new Array(), $el, topPosition = 0;
  $(container).each(function () {
    $el = $(this);
    $($el).height('auto')
    topPostion = $el.position().top;
    if (currentRowStart != topPostion) {
      for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
        rowDivs[currentDiv].height(currentTallest);
      }
      rowDivs.length = 0; // empty the array
      currentRowStart = topPostion;
      currentTallest = $el.outerHeight();
      rowDivs.push($el);
    } else {
      rowDivs.push($el);
      currentTallest = (currentTallest < $el.outerHeight()) ? ($el.outerHeight()) : (currentTallest);
    }
    for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
      rowDivs[currentDiv].height(currentTallest);
    }
  });
}
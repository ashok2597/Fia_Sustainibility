// import { ResizeObserver as Polyfill } from '@juggle/resize-observer';
// import scrollToElement from "scroll-to-element";
import Swiper from "swiper";
import tick from "../helpers/async";
import { setCSSCustomProperty } from "../helpers/css";
import wait from '../helpers/wait';
// const ResizeObserver = window.ResizeObserver || Polyfill;

const isPage = slug => document.body.classList.contains(slug);

export const UIController = {
  init() {
    return new Promise((resolve, reject) => {
      try {
        this.initMeasurementCheckers();
        this.recordNavBarHeight();
        this.initTimeLineSlideMain();
        // this.initNavSearchFormControl();
        // this.initContentTabs();
        // this.initLazyVideos();
        // this.initAnchorLinksScroller();

          // this.initPopups();
        // this.checkStoredHash();

        this.initBrochureSlider();

        this.initFAQTriggers();
        // this.initAccordionTriggers();

        //this.initBannerSlider();
        if (isPage('home')) {
          this.initGallerySlider();
          this.initscrolltoptobottum();
          this.inithomePageslider();
        }

        // if (isPage('single') || isPage('page-template-page')) {
        //   this.initPostGridSwiper();
        // }

        // if (isPage('archive-team')) {
          this.initAccreditationsSlider()
        // }

        this.initanimationForallPage();
        this.initcounterforAllslide();
        this.initBlogslider();
        this.initTabforAllpage();
        this.initGroupLogoforpages();

        resolve();
      } catch (error) {
        reject(error);
      }
    })
  },
  recordWpAdminBarHeight() {
    const el = document.getElementById('wpadminbar');
    const height = el ? el.clientHeight : 0;
    setCSSCustomProperty('--wp-admin-bar-height', height + 'px');
    return height;
  },
  recordNavBarHeight() {
    const el = document.querySelector('.nav');
    // const el = document.querySelector('.section-nav');
    const height = el ? el.clientHeight : 0;
    setCSSCustomProperty('--nav-height', height + 'px');
    return height;
  },
  // recordNavSearchBarHeight() {
  //   const el = document.querySelector('.search-form-wrapper');
  //   const height = el ? el.clientHeight : 0;
  //   setCSSCustomProperty('--nav-search-form-height', height + 'px');
  //   return height;
  // },
  // recordContentTabsHeight() {
  //   const el = document.querySelector('.section-content-tabs');
  //   const height = el ? el.clientHeight : 0;
  //   setCSSCustomProperty('--content-tabs-height', height + 'px');
  //   return height;
  // },
  initMeasurementCheckers() {
    const handleWindowLoad = () => {
      this.recordWpAdminBarHeight();
      this.recordNavBarHeight();
      this.equalheight('.equal_Title');
      this.equalheight('.equal_Content');
      this.equalheight('.equal_height');
      // this.recordNavSearchBarHeight();
    }
    const handleWindowResize = () => {
      this.recordWpAdminBarHeight();
      this.recordNavBarHeight();
      this.equalheight('.equal_Title');
      this.equalheight('.equal_Content');
      this.equalheight('.equal_height');
      // this.recordNavSearchBarHeight();
    }
    // const handleScroll = () => {

    // }
    window.addEventListener('load', handleWindowLoad);
    // window.addEventListener('scroll', handleWindowLoad);
    window.addEventListener('resize', handleWindowResize);
  },
  // initAnchorLinksScroller() {
  //   const els = document.querySelectorAll('.section-nav a[href*="#"], .view-main a[href*="#"]');
  //   const handler = e => {
  //     try {
  //       const { target } = e;
  //       const href = target.getAttribute('href');
  //       const match = href.match(/([^#]*)#(.*)/);
  //       if (!match) return;
  //       const pathname = match[1];
  //       // console.log(match, pathname, window.location.pathname, pathname !== window.location.pathname);
  //       if (!!pathname && pathname !== window.location.pathname) return;
  //       // do not do anything if the thing links to a different page
  //       const id = match[2];
  //       if (!id) return;
  //       // only prevent default if an id is found
  //       e.preventDefault();
  //       this.scrollToId(id); 
  //     } catch(e) {
  //       console.error(e);
  //       return;
  //     }
  //   };
  //   Array.from(els).forEach(el => {
  //     el.addEventListener('click', handler);
  //   })
  // },
  // async checkStoredHash() {
  //   if (window.ID_HASH) {
  //     await wait(500);
  //     this.scrollToId(window.ID_HASH);
  //     await wait(618);
  //     window.location.hash = window.ID_HASH;
  //   }
  // },
  // scrollToId(id) {
  //   if (!id) this.scrollToTop();
  //   else {
  //     const offset = -1 * (
  //       this.recordWpAdminBarHeight() + 
  //       this.recordNavBarHeight() +
  //       // this.recordContentTabsHeight()
  //     );
  //     scrollToElement('#' + id, { offset, ease: 'inOutCube', duration: 618 });
  //   }
  // },
  scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  },
  getSiteTitle() {
    return document.body.getAttribute('data-site-title');
  },
  getPageTitle() {
    const titleEl = document.querySelector('.page-header__title') || document.querySelector('h1') || document.querySelector('title');
    const title = titleEl && titleEl.innerText;
    return title || '';
  },
  // initContentTabs() {
  //   const el = document.querySelector('.section-content-tabs');
  //   if (!el) return;
  //   const makeTab = (title, url, active) => `<li><a class="content-tab${active && ' active'}" href="${url}" title="${title}">${title}</a></li>`
  //   const tabSourceEls = Array.from(document.querySelectorAll('[data-content-tab-id]'));
  //   tabSourceEls.forEach(el => el.setAttribute('id', el.getAttribute('data-content-tab-id')))
  //   const tabs = tabSourceEls.map(el => makeTab(
  //     el.getAttribute('data-content-tab-title'),
  //     '#' + el.getAttribute('data-content-tab-id'),
  //   ));
  //   const pageTitle = this.getPageTitle();
  //   const hasHashOnLoad = !!window.location.hash;
  //   tabs.unshift(makeTab(pageTitle, '#', !hasHashOnLoad));
  //   el.querySelector('ul').innerHTML = tabs.join('');
  //   const anchors = Array.from(el.querySelectorAll('a'));
  //   const setActive = e => {
  //     anchors.forEach(a => a.classList.remove('active'));
  //     const { target } = e;
  //     target.classList.add('active');
  //   }
  //   anchors.forEach(a => a.addEventListener('click', setActive));
  // },
  initPostGridSwiper() {

    const grid = document.querySelector('.post-grid');
    if (!grid) return;
    const postItems = grid.querySelectorAll('.post-item');

    const container = document.createElement('div');
    container.classList.add('post-grid-swiper');
    container.classList.add('swiper-container');

    const wrapper = document.createElement('div');
    wrapper.classList.add('swiper-wrapper');

    const slides = Array.from(postItems).map(postItem => {
      const slideContainer = document.createElement('div');
      slideContainer.classList.add('swiper-slide');
      slideContainer.append(postItem);
      return slideContainer;
    });

    wrapper.append(...slides);
    container.append(wrapper);
    grid.replaceWith(container);

    // new Swiper(container, {
    //   slidesPerView: 1.5,
    //   centeredSlides: true,
    //   loop: true,
    //   slideToClickedSlide: true,
    //   autoplay: {
    //     delay: 4000,
    //   },
    //   // breakpoints: {
    //   //   768: {
    //   //     slidesPerView: 3,
    //   //   }
    //   // }
    // });

  },
  detectRatio(el) {
    if (!el) return;
    const w = el.clientWidth;
    const h = el.clientHeight;
    const ratio = w / h;
    const orientation = ratio >= 1 ? 'landscape' : 'portrait';
    el.setAttribute('data-element-width', w + 'px');
    el.setAttribute('data-element-height', h + 'px');
    el.setAttribute('data-element-ratio', ratio);
    el.setAttribute('data-element-orientation', orientation);
    setCSSCustomProperty('--element-width', w + 'px', el);
    setCSSCustomProperty('--element-height', h + 'px', el);
    setCSSCustomProperty('--element-ratio', ratio, el);
    setCSSCustomProperty('--element-orientation', orientation, el);
  },
  // initLazyVideos() {

  //   var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));

  //   if ("IntersectionObserver" in window) {
  //     var lazyVideoObserver = new IntersectionObserver(function (entries, observer) {
  //       entries.forEach(video => {
  //         if (video.isIntersecting) {
  //           for (var source in video.target.children) {
  //             var videoSource = video.target.children[source];
  //             if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
  //               videoSource.src = videoSource.dataset.src;
  //             }
  //           }

  //           video.target.load();
  //           video.target.classList.remove("lazy");
  //           lazyVideoObserver.unobserve(video.target);
  //         }
  //       });
  //     });

  //     lazyVideos.forEach(function (lazyVideo) {
  //       lazyVideoObserver.observe(lazyVideo);
  //     });
  //   }

  //   this.initRatioWatcher();
  //   this.initVideoCoverer();

  // },
  initRatioWatcher() {
    const els = document.querySelectorAll('[data-watch-ratio]');
    Array.from(els).forEach(el => {
      const handler = () => this.detectRatio(el);
      window.addEventListener('load', handler);
      window.addEventListener('resize', handler);
    });
  },
  initVideoCoverer() {
    const handler = () => {
      const videoSlides = document.querySelectorAll('.section-hero-banner');
      Array.from(videoSlides).forEach(slide => {
        const video = slide.querySelector('video');
        const checkVideoRatio = () => {
          const videoWidth = video.videoWidth;
          const videoHeight = video.videoHeight;
          const videoRatio = videoWidth / videoHeight;
          const containerWidth = slide.clientWidth;
          const containerHeight = slide.clientHeight;
          const containerRatio = containerWidth / containerHeight;
          if (videoRatio >= containerRatio) {
            // video is wider or square; 100% height and auto width.
            video.setAttribute('data-fill-mode', 'fill-height');
          } else {
            video.setAttribute('data-fill-mode', 'fill-width');
          }
        };
        checkVideoRatio();
      })
    }
    window.addEventListener('load', handler);
    window.addEventListener('resize', handler);
  },
  // closeAllPopups() {
  //   const popupWrappers = Array.from(document.getElementsByClassName('popup-wrapper'));
  //   popupWrappers.forEach(popup => popup.classList.remove('open'));
  // },
  // initPopups() {
  //   try {
  //     const popupWrappers = Array.from(document.getElementsByClassName('popup-wrapper'));
  //     popupWrappers.forEach(wrapper => {
  
  //       const backdrop = document.createElement('span');
  //       backdrop.classList.add('popup-backdrop');
  //       backdrop.setAttribute('data-toggle-popup', '');
  //       wrapper.prepend(backdrop);
  
  //       const popup = wrapper.querySelector('.popup');
  
  //       const closeButton = document.createElement('button');
  //       closeButton.classList.add('popup-close-button');
  //       closeButton.setAttribute('data-toggle-popup', '');
  //       closeButton.innerHTML = `<svg width="16" height="16" viewBox="0 0 16 16"><use xlink:href="#icon-close"></use></svg>`;
  
  //       popup.append(closeButton);
        
  //     });
  //   } catch(e) {
  //     console.error(e);
  //   } finally {
  //     this.initPopupToggles();
  //   }
  // },
  // initPopupToggles() {
  //   const toggles = Array.from(document.querySelectorAll('[data-toggle-popup]'));
  //   const handler = event => {
  //     if (!event) return;
  //     event.preventDefault();
  //     const { target } = event;
  //     const popupId = target.getAttribute('data-toggle-popup');
  //     if (!popupId) {
  //       this.closeAllPopups();
  //       return;
  //     }
  //     const popupWrapper = document.getElementById(popupId);
  //     if (!popupWrapper) return;
  //     if (popupWrapper.classList.contains('open')) {
  //       popupWrapper.classList.remove('open');
  //     } else {
  //       popupWrapper.classList.add('open');
  //     }
  //   }
  //   toggles.forEach(toggle => {
  //     toggle.addEventListener('click', handler);
  //   })
  // },

  initBannerSlider() {
    new Swiper('.banner-slider', {
      // Optional parameters
      // direction: 'vertical',
      // modules: [EffectFade],
      speed: 650,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      loop: true,
      autoplay: {
        // delay: 5000,
        delay: 2500,
        disableOnInteraction: false,
      },
    
      // If we need pagination
      // pagination: {
      //   el: '.swiper-pagination',
      // },
    
      // Navigation arrows
      // navigation: {
      //   nextEl: '.swiper-button-next',
      //   prevEl: '.swiper-button-prev',
      // },
    
      // And if we need scrollbar
      // scrollbar: {
      //   el: '.swiper-scrollbar',
      // },
    });
  },
  initGallerySlider() {
    new Swiper('.gallery-slider', {
      // Optional parameters
      // direction: 'vertical',
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      slidesPerView: 2,
      spaceBetween: 8,
      // effect: "fade",
    
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
    
      // Navigation arrows
      // navigation: {
      //   nextEl: '.swiper-button-next',
      //   prevEl: '.swiper-button-prev',
      // },
    
      // And if we need scrollbar
      // scrollbar: {
      //   el: '.swiper-scrollbar',
      // },
    });
  },

  initAccreditationsSlider() {
    new Swiper('.accreditations-slider', {
      // Optional parameters
      // direction: 'vertical',
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      slidesPerView: 6,
      // spaceBetween: 48,
      spaceBetween: 96,
      // effect: "fade",
    
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
    
      // Navigation arrows
      // navigation: {
      //   nextEl: '.swiper-button-next',
      //   prevEl: '.swiper-button-prev',
      // },
    
      // And if we need scrollbar
      // scrollbar: {
      //   el: '.swiper-scrollbar',
      // },
    });
  },

  // initBrandSliders() {
  //   const selectors = [
  //     '.section-brands__slider-container-top',
  //     '.section-brands__slider-container-bottom',
  //   ]
  //   selectors.forEach(selector => {
  //     new Swiper(selector, {
  //       preventClicks: false,

  //       loop: true,
  //       speed: 5000,
  //       // noSwiping: true,
  //       // freeMode: true,
  //       // freeModeMomentumRatio: 1,
  //       slidesPerView: 2.5,
  //       spaceBetween: 10,
  //       // breakpoints: {
  //       //   640: {
  //       //     slidesPerView: 6,
  //       //   }
  //       // }
  //       // slidesPerView: 1,
  //       // spaceBetween: 10,
  //       // // Responsive breakpoints
  //       breakpoints: {
  //         // when window width is >= 320px
  //         // 320: {
  //         //   slidesPerView: 2,
  //         //   spaceBetween: 20
  //         // },
  //         // when window width is >= 480px
  //         // 480: {
  //         //   slidesPerView: 3,
  //         //   spaceBetween: 30
  //         // },
  //         // when window width is >= 640px
  //         640: {
  //           slidesPerView: 5,
  //           // spaceBetween: 20,
  //         },
  //         1024: {
  //           slidesPerView: 8,
  //           // spaceBetween: 20,
  //         },
  //       },
  //       autoplay: {
  //         delay: 0,
  //         disableOnInteraction: false,
  //         reverseDirection: selector.includes('bottom'),
  //       },
  //     })
  //   })
  // },
  initBrochureSlider() {
    new Swiper('.section-brochures__slider-container', {
      preventClicks: false,
      loop: true,
      // loop: true,
        speed: 5000,
      slidesPerView: 2,
      spaceBetween: 10,
      breakpoints: {
        640: {
          slidesPerView: 4,
          // spaceBetween: 20,
        },
        1024: {
          slidesPerView: 6,
          // spaceBetween: 20,
        },
      },
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
        // reverseDirection: selector.includes('bottom'),
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  },

  initFAQTriggers() {
    const els = document.querySelectorAll('.faq__question-content');

    const toggleFaqItem = (e) => {
      e.preventDefault();
      const { parentNode } = e.currentTarget;
      if (parentNode instanceof Element) {
        if (parentNode.classList.contains('open')) {
          parentNode.classList.remove('open');
        } else {
          parentNode.classList.add('open');
        }
      }
    }

    // Makes and array from querySelectorAll
    // For Each element in the array add the Event Listener of type click
    Array.from(els).forEach(el => {
      el.addEventListener('click', toggleFaqItem, { capture: true });
    });

    Array.from(els).forEach(el => {
      el.classList.remove('open');
    });

  },
  initforHeaderMenubar() {
    this.equalheight('.equal_Title');
    this.equalheight('.equal_Content');
    this.equalheight('.equal_height');

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
  },
  initscrolltoptobottum() {
    $(".AngleImgTxt a").click(function () {
      $('html, body').animate({
        scrollTop: $(".IconTitleSection").offset().top - 75
      }, 2000);
    });
  },
  initanimationForallPage() {
    Animation
    AOS.init({
      offset: 100,
      duration: 1500,
      delay: 100,
      once: true
    });
  },
  inithomePageslider() {
    var swiper = new Swiper(".mySwiperCounterSlider", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: false,
      autoHeight: true,
      loop: true,
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

  },

  initcounterforAllslide() {
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


    //   //     Counter Inner
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

    //   //     Counter Two Column
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
  },
  initBlogslider() {
    var swiper =  new Swiper(".SwiperBlogSlider", {
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
  },
  initTimeLineSlideMain() {
    var swiper = new Swiper(".TimeLineSlideMain", {
      slidesPerView: 1,
      autoplay: true,
      spaceBetween: 88,
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
        481: {
          slidesPerView: 1.5,
          spaceBetween: 30
        },
        798: {
          slidesPerView: 2.5,
          spaceBetween: 40
        },
        1441: {
          slidesPerView: 3.5
        }
      }
    });
  },
  initTabforAllpage() {

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
  },

  initGroupLogoforpages() {
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
  },
  initMobviewmenuforOffsetPage() {
    $('.V2MenuParent .V2navbar').before('<a class="V2expandMenu"><i></i><i></i><i></i></a>');
    $('.V2MenuParent .V2-dropdown-menu').before('<span class="V2childExpand"><i></i><i></i></span>');
    $(document).on("click", ".V2expandMenu", function () {
      $(this).toggleClass("active").next().slideToggle(250)

    });
    $(document).on("click", ".V2childExpand", function () {
      $(this).parent().siblings(".V2childmenu").find(".V2childExpand").removeClass("open");
      $(this).parent().siblings(".childmenu").find(".V2-dropdown-menu").slideUp(250);
      $(this).next(".V2-dropdown-menu").slideToggle(250);
      $(this).toggleClass("open");
      return false
    });
  },

  equalheight(container) {
    var currentTallest = 0, currentRowStart = 0, rowDivs = new Array(), $el, topPosition = 0;
    $(container).each(function () {
      $el = $(this);
      $($el).height('auto')
      topPosition = $el.position().top;
      if (currentRowStart != topPosition) {
        for (var currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
          rowDivs[currentDiv].height(currentTallest);
        }
        rowDivs.length = 0; // empty the array
        currentRowStart = topPosition;
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
  },
  wrapperPadding() {
    var wW = $(window).width();
    if ($('.TimeLineSliderSection .wrapper').length > 0) { var wSize = $('.TimeLineSliderSection .wrapper').width(); } // if wrapper is available in page
    else { // if wrapper is not available in page
      if ($(window).width() > 1230) { var wSize = 1170; }
      else if ($(window).width() < 1230 && $(window).width() > 992) { var wSize = 900; }
      else { var wSize = wW; }
    }
    var iPadding = ((wW - wSize) / 2);
    if ($('.wrapLeft').length > 0) {
      $('.wrapLeft').css('padding-left', iPadding);
    }
    if ($('.wrapRight').length > 0) {
      $('.wrapRight').css('padding-right', iPadding);
    }
  }



}
jQuery(function() {
  //Chrome Smooth Scroll
  try {
    jQuery.browserSelector();
    if(jQuery("html").hasClass("chrome")) {
      jQuery.smoothScroll();
    }
  } catch(err) {

  };

  jQuery("img, a").on("dragstart", function(event) { event.preventDefault(); });
  
});

jQuery(window).load(function() {
 jQuery(".loader_inner").fadeOut();
 jQuery(".loader").delay(400).fadeOut("slow");
});

/* -------------------

Parallax /js/common.js

--------------------*/
    jQuery(function () {
        jQuery(window).paroller();        
    });

(function (jQuery) {
    'use strict';

    var elem = jQuery('[data-paroller-factor]');
    var setDirection = {
        bgVertical: function (elem, bgOffset) {
            return elem.css({'background-position': 'center ' + -bgOffset + 'px'});
        },
        bgHorizontal: function (elem, bgOffset) {
            return elem.css({'background-position': -bgOffset + 'px' + ' center'});
        },
        vertical: function (elem, elemOffset) {
            return elem.css({
                '-webkit-transform': 'translateY(' + elemOffset + 'px)',
                '-moz-transform': 'translateY(' + elemOffset + 'px)',
                'transform': 'translateY(' + elemOffset + 'px)'
            });
        },
        horizontal: function (elem, elemOffset) {
            return elem.css({
                '-webkit-transform': 'translateX(' + elemOffset + 'px)',
                '-moz-transform': 'translateX(' + elemOffset + 'px)',
                'transform': 'translateX(' + elemOffset + 'px)'
            });
        }
    };

    jQuery.fn.paroller = function(options) {
        var windowHeight = jQuery(window).height();
        var documentHeight = jQuery(document).height();

        // default options
        var options = jQuery.extend({
            factor: 0, // - to +
            type: 'background', // foreground
            direction: 'vertical' // horizontal
        }, options);

        elem.each(function(){
            var jQuerythis = jQuery(this);
            var offset = jQuerythis.offset().top;
            var height = jQuerythis.outerHeight();
            var dataFactor = jQuerythis.data('paroller-factor');
            var dataType = jQuerythis.data('paroller-type');
            var dataDirection = jQuerythis.data('paroller-direction');

            var factor = (dataFactor) ? dataFactor : options.factor;
            var type = (dataType) ? dataType : options.type;
            var direction = (dataDirection) ? dataDirection : options.direction;
            var bgOffset = Math.round(offset * factor);
            var transform = Math.round((offset - (windowHeight / 2) + height) * factor);

            if(type == 'background') {
                if(direction == 'vertical') {
                    setDirection.bgVertical(jQuerythis, bgOffset);
                }
                else if(direction == 'horizontal') {
                    setDirection.bgHorizontal(jQuerythis, bgOffset);
                }
            }
            else if(type == 'foreground') {
                if(direction == 'vertical') {
                    setDirection.vertical(jQuerythis, transform);
                }
                else if(direction == 'horizontal') {
                    setDirection.horizontal(jQuerythis, transform);
                }
            }

            jQuery(window).on('scroll', function(){
                var scrolling = jQuery(this).scrollTop();
                bgOffset = Math.round((offset - scrolling) * factor);
                transform = Math.round(((offset - (windowHeight / 2) + height) - scrolling) * factor);

                if(type == 'background') {
                    if(direction == 'vertical') {
                        setDirection.bgVertical(jQuerythis, bgOffset);
                    }
                    else if(direction == 'horizontal') {
                        setDirection.bgHorizontal(jQuerythis, bgOffset);
                    }
                }
                else if((type == 'foreground') && (scrolling < documentHeight)) {
                    if(direction == 'vertical') {
                        setDirection.vertical(jQuerythis, transform);
                    }
                    else if(direction == 'horizontal') {
                        setDirection.horizontal(jQuerythis, transform);
                    }
                }
            });
        });
    };
})(jQuery);

/* ---------------

Переключатель 
между форматами 
съемки

------------------*/

jQuery(".explGoodsContainer").not(":first").hide();
jQuery(".tab-title-format__title").click(function() {
 jQuery(".tab-title-format__title").removeClass("tab-title-format__title_active").eq(jQuery(this).index()).addClass("tab-title-format__title_active");
 jQuery(".explGoodsContainer").hide().eq(jQuery(this).index()).fadeIn();
}).eq(0).addClass("tab-title-format__title_active");
   
/*------------------

Подсказки в навигации

------------------- */
jQuery(document).ready(function(){
   jQuery('.consoleButton').clone().prependTo('.button-block');

   jQuery(".navConsoleContainer_inner").not(":first").hide();
   jQuery(".button-block .consoleButton").mouseenter(function() {
    jQuery(".consoleButton").removeClass("buttonBlock-active").eq(jQuery(this).index()).addClass("buttonBlock-active");
    jQuery(".navConsoleContainer_inner").hide().eq(jQuery(this).index()).fadeIn();
   }).eq(0).addClass("buttonBlock-active");



   }); 
/*  -------------

Плавная подкрутка

-------------------*/

   jQuery('.smoothscroll').on('click', function (e) {
             
      e.preventDefault();

      var target = this.hash,
       jQuerytarget = jQuery(target);

       jQuery('html, body').stop().animate({
         'scrollTop': jQuerytarget.offset().top
       }, 800, 'swing', function () {
         window.location.hash = target;
       });

     }); 

 /* ------------

 Фиксированное меню

 -------------------*/

     var mainHeader = jQuery('.cd-auto-hide-header'),

       //this applies only if secondary nav is below intro section
       belowNavHeroContent = jQuery('.sub-nav-hero'),
       headerHeight = mainHeader.height();
     
     //set scrolling variables
     var scrolling = false,
       previousTop = 0,
       currentTop = 0,
       scrollDelta = 10,
       scrollOffset = 150;

     mainHeader.on('click', '.nav-trigger',   function(event){
       // open primary navigation on mobile
       event.preventDefault();
       mainHeader.toggleClass('nav-open');
     }); 
     mainHeader.on('click', '#cd-navigation a',   function(event){
       // open primary navigation on mobile
       event.preventDefault();
       mainHeader.toggleClass('nav-open');
     });

     jQuery(window).on('scroll', function(){
       if( !scrolling ) {
         scrolling = true;
         (!window.requestAnimationFrame)
           ? setTimeout(autoHideHeader, 250)
           : requestAnimationFrame(autoHideHeader);
       }
     });

     jQuery(window).on('resize', function(){
       headerHeight = mainHeader.height();
     });

     function autoHideHeader() {
       var currentTop = jQuery(window).scrollTop();

       ( belowNavHeroContent.length > 0 ) 
         ? checkStickyNavigation(currentTop) // secondary navigation below intro
         : checkSimpleNavigation(currentTop);

         previousTop = currentTop;
       scrolling = false;
     }

     function checkSimpleNavigation(currentTop) {
       //there's no secondary nav or secondary nav is below primary nav
         if (previousTop - currentTop > scrollDelta) {
           //if scrolling up...
           mainHeader.removeClass('is-hidden');
         } else if( currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
           //if scrolling down...
           mainHeader.addClass('is-hidden');
         }
     }

/* -------------
Настройка  события скролла на главной странице 
для desctop screen >= 992px  
--------------- */


jQuery(function(jQuery) {

     jQuery(window).scroll(function(){
  
         if(jQuery(this).scrollTop()>100){

          jQuery('.cd-auto-hide-header').addClass('js-cd-auto-hide-header');
          jQuery('.headerTop_btn').addClass('js-button');

        }
         else if (jQuery(this).scrollTop()<100){
          jQuery('.cd-auto-hide-header').removeClass('js-cd-auto-hide-header');
          jQuery('.headerTop_btn').removeClass('js-button');

        }

     });
 });

/* ------------------

Удаляем класс left_title у элемента 
 section_wrapper__title 

--------------------*/

var handleMatchMedia = function(mediaQuery) {
    if (mediaQuery.matches) {
    // если менее 880px или равное, то выполняется код между скобок  
     jQuery('#yourOption').removeClass('left_title ');
     jQuery('#yourOption-delimiter').removeClass('delimiter_left');
     jQuery('#explGoods-delimiter').removeClass('delimiter_left');
     jQuery('#customers-delimiter').removeClass('delimiter_left');
    } else {
    // обратное условие, т.е если более 880px 
    jQuery('#yourOption').addClass('left_title ');
    jQuery('#yourOption-delimiter').addClass('delimiter_left');
    jQuery('#explGoods-delimiter').addClass('delimiter_left');
    jQuery('#customers-delimiter').addClass('delimiter_left');
    }
},
mql = window.matchMedia('all and (max-width: 880px)');
handleMatchMedia(mql);
mql.addListener(handleMatchMedia); 



/* --------------

ROTATOR 
  
----------------*/

jQuery( function() {
  /*
  - how to call the plugin:
  jQuery( selector ).cbpQTRotator( [options] );
  - options:
  {
    // default transition speed (ms)
    speed : 700,
    // default transition easing
    easing : 'ease',
    // rotator interval (ms)
    interval : 8000
  }
  - destroy:
  jQuery( selector ).cbpQTRotator( 'destroy' );
  */

  jQuery('.cbp-qtrotator' ).cbpQTRotator();

} );

/* -------------

 Owlcarousel 

---------------*/

    jQuery(document).ready(function(){
        
        jQuery('.sliderContainer .owl-carousel').owlCarousel({
            loop:true,
            nav:true,
            autoplay:false,
            margin:600,
            smartSpeed:1500,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })


    jQuery('.priceLeftBlock_slider .owl-carousel').owlCarousel({
        loop:true,
        smartSpeed:1100,
        navSpeed:true,
        dotsSpeed:1200,
        nav:true,
        margin:100,
        autoplay:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
});

/* --------------

video 

----------------*/
  jQuery(document).ready(function() {
      jQuery('.embed-video').embedVideo();
  });


/* ------------------

spinner

--------------------*/

jQuery(document).ready(function() {
  jQuery("input[type='number']").InputSpinner({
      decrementButton: "<i class='fa fa-minus-circle'></i>", // button text
      incrementButton: "<i class='fa fa-plus-circle'></i>",
  });
});
/* ------------------

Добовляем событие 
при скролле вниз

--------------------*/

   jQuery(function(jQuery) {

        jQuery('.navigationConsole').scrollTop(function(){
     
            if(jQuery(this).scrollTop()>120){
              jQuery('.arrowSlider_dot__rotate').addClass('js-animation-moove');

           }
            else if (jQuery(this).scrollTop()<120){

              jQuery('.arrowSlider_dot__rotate').removeClass('js-animation-moove');
           }

        });
    });



jQuery(window).scroll(function() {
    // проверка на докрутку до определенного элемента
    var scroll_picca =jQuery('.navigationConsole').offset().top;
    // console.log(scroll_picca) ;// выводим в консоль смещение  элемента пицца
    //если мы докрутили до нужного элемента 
    if (jQuery(this).scrollTop() > scroll_picca) {
      // создаем эффекты и анимацию
      jQuery('.arrowSlider_dot__rotate').addClass('js-animation-moove');
      jQuery(".bottom_float_menu").show();
      
    }else{
      jQuery(".bottom_float_menu").hide();
      jQuery('.arrowSlider_dot__rotate').removeClass('js-animation-moove');
      
    } 
    // если докрутил до низа страницы
    if(jQuery(window).scrollTop()+jQuery(window).height()>=jQuery(document).height()){
      jQuery(".navigationConsole").hide();
    }   
}); 



/* -------------

AOS

---------------*/    

jQuery(document).ready(function() {
  AOS.init();
});


/* -------------------

 счетчики 

 ---------------------*/

    jQuery(document).ready(function( jQuery ) {
        jQuery('.counter').counterUp({
            delay: 3,
            time: 500
        });
    });



/* --------------------

custom-select

----------------------*/

(function (jQuery) {
  jQuery(document).ready(function () {
    jQuery('select').vDrop({allowMultiple: false});

    setTimeout(function () {
      jQuery('[name="delayed"]').append('<option>Now</option><option>We\'re</option><option selected="selected">loaded & i\'m selected</option>').vDrop('update');
    }, 1000);

    jQuery('[name="heading-close"]').closest('.sortByItems').find('h2').on('mouseover', function () {
      jQuery('[name="heading-close"]').data('plugin_vDrop').close();
    });
  });
})(jQuery);



/* ------------------

section privacyPolicy

--------------------*/
  jQuery('.privacyPolicy ').appendTo('.form_ft-div-submit');

/* ------------------

modal window

--------------------*/
var modal = document.getElementById('myModal');
var buttons = document.getElementsByClassName("myBtn")
var span = document.getElementsByClassName("close");

for (var i = 0; i < buttons.length; i++) {
  buttons[i].onclick = function() {
    var id = this.getAttribute('data-modal');
    var modal = document.getElementById(id);
    modal.style.display = 'block';
  }
}

for (var i = 0; i < span.length; i++) {
  span[i].onclick = function() {
    var id = this.getAttribute('data-modal');
    var modal = document.getElementById(id);
    modal.style.display = 'none';
  }
}

window.onclick = function(event) {
  var isModal = (' ' + event.target.className + ' ').indexOf(' modal-overlay ') > -1;
  if (isModal) {
    event.target.style.display = "none";
  }
}

/* ------------------

  hamburger

--------------------*/
var link = jQuery('.menu-link ');
var link_active = jQuery('.menu-link_active');
var menu = jQuery('.menu');
var nav_link =jQuery('.menu a');
link.click(function(){
    link.toggleClass('menu-link_active');
    jQuery('body').toggleClass('fixed');
    menu.toggleClass('menu_active');  
    logo_info.toggle();         
    jQuery('.menu_active ul li a').css('color','#2D476A');
});
nav_link.click(function(){
    link.removeClass('menu-link_active');
    menu.toggleClass('menu_active');
    jQuery('body').toggleClass('fixed');
  });


/* ----------

Google map

-------------*/
          function ShowPositon(x, y) {
              var element = document.getElementById('map_canvas');    
              var options = {
                  center: new google.maps.LatLng(x, y),
                  zoom: 15,
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                  styles: [
                               {elementType: 'geometry', stylers: [{color: '#A8D2E0'}]},
                              // {elementType: 'labels.text.stroke', stylers: [{color: '#F4B459'}]},
                              // {elementType: 'labels.text.fill', stylers: [{color: 'none'}]},
                                   {
                                     featureType: 'administrative.locality',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#00A8E0'}]
                                   },
                                   {
                                     featureType: 'poi',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'poi.park',
                                     elementType: 'geometry',
                                     stylers: [{color: '#98BECB'}]
                                   },
                                   {
                                     featureType: 'poi.park',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#0B0802'}]
                                     // stylers: [{color: '#DAB238'}] 
                                   },
                                   {
                                     featureType: 'road',
                                     elementType: 'geometry',
                                     stylers: [{color: '#EFF4F6'}]
                                   },
                                   {
                                     featureType: 'road',
                                     elementType: 'geometry.stroke',
                                     stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'road',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'road.highway',
                                     elementType: 'geometry',
                                     stylers: [{color: 'none'}]
                                   },
                                   {
                                     featureType: 'road.highway',
                                     elementType: 'geometry.stroke',
                                     stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'road.highway',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'transit',
                                     elementType: 'geometry',
                                     stylers: [{color: '#2DA4CB'}]
                                   },
                                   {
                                     featureType: 'transit.station',
                                     elementType: 'labels.text.fill',
                                     // stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'water',
                                     elementType: 'geometry',
                                     stylers: [{color: '#92B7C3'}]
                                   },
                                   {
                                     featureType: 'water',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#fff'}]
                                   },
                                   {
                                     featureType: 'water',
                                     elementType: 'labels.text.stroke',
                                     stylers: [{color: '#fff'}]
                                   }
                                 ]
              };

              var myMap = new google.maps.Map(element, options);
                  addMarker({
                          coordinates:{lat:55.80495169, lng:37.6181883},
                          info: '<h4> Москва, Шереметьевская ул., 6к1',
                          image: 'http://360sequence.com/wp-content/uploads/2018/06/placeholder.png'
                  });

                   function addMarker(properties){
                    var marker = new google.maps.Marker({
                      position: properties.coordinates,
                      map: myMap,
                      // icon: properties.image
                      });
                     if (properties.image) 
                     {
                      marker.setIcon(properties.image);
                     }
                     if (properties.info) 
                     {
                        var InfoWindow = new google.maps.InfoWindow({
                            content: properties.info
                            })
                            
                            marker.addListener('click', function(){
                              InfoWindow.open(myMap, marker);
                           })           
                     }
                  }
          }

  /* ------------------

  section customers visible-block

  --------------------*/

jQuery('.demo-video').click(function(){
   jQuery('.bg-mac-img').toggle();
   jQuery('.mac-img').toggle();
   jQuery('.customers-block').toggleClass('js-opacity-elem');
   jQuery('.fullscreen-bg__video').toggleClass('js-bg__video-opacity');
    if (jQuery('.customers-block').hasClass('js-opacity-elem')) {
         jQuery(".demo-video__present").text("Скрыть презентацию"); 
         jQuery(".demo-video__icon").html('<i class="fas fa-video-slash"></i>'); 
   } else{
         jQuery(".demo-video__present").text("Смотреть презентацию"); 
         jQuery(".demo-video__icon").html('<i class="fas fa-video"></i>'); 
   };
});

    /* ------------------

    video-popup-modal

    ---------------------*/

      // Demo video 1
    jQuery(".youtube-link").grtyoutube({
        autoPlay:true,
        theme: "dark"
      });

/* ----------------

Ховера для карточек 

------------------*/



  jQuery('.explsSequence_item').hover(function(){
      jQuery(this).find('.top_title').addClass('js-explsSequence_item__hover');
      jQuery(this).find('.top_title__frames h3').css('color','#282923');
      jQuery(this).find('.bottom_pic__circle').addClass('js-explsSequence_item__hover');
      jQuery(this).find('.bottom_pic__circle img').toggle();
  },function() {
      jQuery(this).find('.top_title').removeClass('js-explsSequence_item__hover');
      jQuery(this).find('.top_title__frames h3').css('color','#A2A2B0');
      jQuery(this).find('.bottom_pic__circle').removeClass('js-explsSequence_item__hover');
      jQuery(this).find('.bottom_pic__circle img').toggle();
    });

  jQuery('.explGoodsContainer_item').hover(function(){
      jQuery(this).addClass('js-explsSequence_item__hover');
      jQuery(this).find('.explGoodsContainer_item__title h3').css('color','#282923');
  },function(){
      jQuery(this).removeClass('js-explsSequence_item__hover');
      jQuery(this).find('.explGoodsContainer_item__title h3').css('color','#A2A2B0');
  });

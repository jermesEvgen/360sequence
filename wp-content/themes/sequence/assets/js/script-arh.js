jQuery(function() {

	//SVG Fallback
	// if(!Modernizr.svg) {
	// 	jQuery("img[src*='svg']").attr("src", function() {
	// 		return jQuery(this).attr("src").replace(".svg", ".png");
	// 	});
	// };

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	// jQuery("form").submit(function() { //Change
	// 	var th = jQuery(this);
	// 	jQuery.ajax({
	// 		type: "POST",
	// 		url: "mail.php", //Change
	// 		data: th.serialize()
	// 	}).done(function() {
	// 		alert("Thank you!");
	// 		setTimeout(function() {
	// 			// Done Functions
	// 			th.trigger("reset");
	// 		}, 1000);
	// 	});
	// 	return false;
	// });

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

// jQuery(window).load(function() {

// 	jQuery(".loader_inner").fadeOut();
// 	jQuery(".loader").delay(400).fadeOut("slow");
// });

/* -------------------

Parallax /js/common.js

--------------------*/
    jQuery(function () {
        jQuery(window).paroller();        
    });

// Paralax 
  /**
 * jQuery plugin paroller.js v1.0
 * https://github.com/tgomilar/paroller.js
 * preview: https://tgomilar.github.io/paroller/
 **/

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




/* ------------------

Удаляем класс у объекта 
section  example of goods 

--------------------*/


// jQuery(function(){
//    var li_len = 0;
//    jQuery('.explGoodsContainer_item').each(function(i){       
//        li_len++;
//        if( li_len === 3 ){ 
//            jQuery(this).addClass('explGoodsContainer_item__horz');
//            li_len = 2;
//        }       
//    })
// })




// var handleMatchMedia = function(mediaQuery) {
//     if (mediaQuery.matches) {
//     // если менее 520px или равное, то выполняется код между скобок  
//      jQuery('.explGoodsContainer_item').addClass('explGoodsContainer_item__horz ');


//     } else {
//     // обратное условие, т.е если более 520px 
//         jQuery(function(){
//            var li_len = 0;
//            jQuery('.explGoodsContainer_item').each(function(i){       
//                li_len++;
//                if( li_len == 3 ){ 
//                    jQuery(this).addClass('explGoodsContainer_item__horz')
//                    li_len = 1;
//                }       
//            })
//         })

//         // jQuery('.explGoodsContainer_item').removeClass('explGoodsContainer_item__horz ');

//      }
// },
// mql = window.matchMedia('all and (max-width: 520px)');
// handleMatchMedia(mql);
// mql.addListener(handleMatchMedia); 



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




    //   // add animate.css class(es) to the elements to be animated
    //   function setAnimation ( _elem, _InOut ) {
    //     // Store all animationend event name in a string.
    //     // cf animate.css documentation
    //     var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    //     _elem.each ( function () {
    //       var $elem = jQuery(this);
    //       var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

    //       $elem.addClass($animationType).one(animationEndEvent, function () {
    //         $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
    //       });
    //     });
    //   }

    // // Fired before current slide change
    //   owl.on('change.owl.carousel.sliderContainer_item', function(event) {
    //       var $currentItem = jQuery('.owl-item', owl).eq(event.item.index);
    //       var $elemsToanim = $currentItem.find("[data-animation-out]");
    //       setAnimation ($elemsToanim, 'out');
    //   });

    // // Fired after current slide has been changed
    //   owl.on('changed.owl.carousel.sliderContainer_item', function(event) {

    //       var $currentItem = jQuery('.owl-item', owl).eq(event.item.index);
    //       var $elemsToanim = $currentItem.find("[data-animation-in]");
    //       setAnimation ($elemsToanim, 'in');
    //   })




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



/* ------------------

   phone validation

--------------------*/


    const phone = document.querySelector('.phone');

    phone.addEventListener('keydown', function(event){
      let isdigit = false;
      let isDash = false;
      let isControl = false;


      if (event.key >= 0 || event.key <= 9 ) {
        isdigit = true;
      }

      if (event.key == "-") {
        isDash = true;
      }

      if (event.key == 'ArrowLeft' || event.key == 'ArrowRight' || event.key == 'Backspace' ) {
        isControl = true;
      }

      // if (!isdigit && !isDash)
      if (isdigit == false && isDash == false && isControl == false ) {
        event.preventDefault();
      }

      console.log(event.key);


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


// jQuery('.demo-video').hover(function(){
//      jQuery('.bg-mac-img').toggle();
//      jQuery('.mac-img').toggle();
//      jQuery('.customers-block').toggleClass('js-opacity-elem');
//      jQuery('.fullscreen-bg__video').toggleClass('js-bg__video-opacity');
//       if (jQuery('.customers-block').hasClass('js-opacity-elem')) {
//            jQuery(".demo-video__present").text("Скрыть презентацию"); 
//            jQuery(".demo-video__icon").html('<i class="fas fa-video-slash"></i>'); 
//      } else{
//            jQuery(".demo-video__present").text("Смотреть презентацию"); 
//            jQuery(".demo-video__icon").html('<i class="fas fa-video"></i>'); 
//      };
// }, function() {
//    jQuery('.bg-mac-img').toggle();
//    jQuery('.mac-img').toggle();
//    jQuery('.customers-block').toggleClass('js-opacity-elem');
//    jQuery('.fullscreen-bg__video').toggleClass('js-bg__video-opacity');
//     if (jQuery('.customers-block').hasClass('js-opacity-elem')) {
//          jQuery(".demo-video__present").text("Скрыть презентацию"); 
//          jQuery(".demo-video__icon").html('<i class="fas fa-video-slash"></i>'); 
//    } else{
//          jQuery(".demo-video__present").text("Смотреть презентацию"); 
//          jQuery(".demo-video__icon").html('<i class="fas fa-video"></i>'); 
//    };
// });


    /* ------------------

    video-popup-modal

    ---------------------*/
    // jQuery(document).ready(function() {


            // Demo video 1
          jQuery(".youtube-link").grtyoutube({
              autoPlay:true,
              theme: "dark"
            });

            // // Demo video 2
            // jQuery(".youtube-link-dark").grtyoutube({
            //   autoPlay:false,
            //   theme: "light"
            // });


        // });


  
// var sequenceSneakersWrap = document.querySelectorAll('.cbp-qtcontent div');
// for( var i = 0; i<sequenceSneakersWrap.length; i++ ) {
//   sequenceSneakersWrap[i].style.margin = "5px";
//  }


//  var sequenceIMG = document.getElementById('photo3d-preview-image');
//  sequenceIMG.style.display = "none";




 /*Hover for section you option*/

 // var explsSeq = document.querySelectorAll('.explsSequence_item.top_title');

 // for (var j =0; j<explsSeq.length; j++) {
 //  explsSeq[j].classList.add('js-explsSequence_item__hover'); 
 // }



 // var addClasses;

 // addClasses = function (selector, classArray) {
 //     'use strict';

 //     var classList, className, element, elements, i, j, lengthI, lengthJ;

 //     elements = document.querySelectorAll(selector);

 //     // Loop through the elements
 //     for (i = 0, lengthI = elements.length; i < lengthI; i += 1) {
 //         element = elements[i];
 //         classList = element.classList;

 //         // Pass the array of classes as multiple arguments to classList::add
 //         classList.add.apply(classList, classArray);

 //     }
 // };


 // addClasses('.top_title', ['js-explsSequence_item__hover']);
 // addClasses('.bottom_pic__circle', ['js-explsSequence_item__hover']);


 // var parent = document.querySelectorAll('.explsSequence_item');     
 //     parent.onmouseenter = function() { // курсор зашёл на элемент-родитель [mozilla.org]
 //      this.style.background = 'red';

 //      }

 //     parent.onmouseleave = function() { // курсор ушёл с элемента-родителя
 //       this.style.background = 'transparent';

 //     }
 



/* Ховера для карточек */

// jQuery(document).ready(function(){

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

// });





// var removeClasses;

//  removeClasses = function (selector, classArray) {
//      'use strict';

//      var classList, className, element, elements, i, j, lengthI, lengthJ;

//      elements = document.querySelectorAll(selector);

//      // Loop through the elements
//      for (i = 0, lengthI = elements.length; i < lengthI; i += 1) {
//          element = elements[i];
//          classList = element.classList;

//          // Pass the array of classes as multiple arguments to classList::remove
//          classList.remove.apply(classList, classArray);
//      }
//  };





 // removeClasses('.top_title', ['js-explsSequence_item__hover']);
 // removeClasses('.bottom_pic__circle', ['js-explsSequence_item__hover']);

 //  //select the dom element

 //  var explWrapTl = document.querySelectorAll('.top_title');
 //  var circle = document.querySelectorAll('.bottom_pic__circle');


 //  //define the addclass function
 //  var addClass = function(el,className){
 //    for(var i = 0; i<el.length; i++){
 //       if (el[i].classList){
 //         el[i].classList.add(className);
 //       }
 //       else {
 //         el[i].className += ' ' + className;
 //      }  
 //    }
    
 // };
 //call the function
 // addClass(explWrapTl, 'js-explsSequence_item__hover');
 // addClass(circle, 'js-explsSequence_item__hover');










 // function toggleClass(elTgll, classNameTgll) {
 //   if (elTgll.classList) {
 //     elTgll.classList.toggle(classNameTgll);
 //   } else {
 //     var classes = elTgll.className.split(' ');
 //     var existingIndex = classes.indexOf(classNameTgll);

 //     if (existingIndex >= 0)
 //       classes.splice(existingIndex, 1);
 //     else
 //       classes.push(classNameTgll);

 //     elTgll.className = classes.join(' ');
 //   }
 // }



// function ValidPhone() {
//     var re = /^\d[\d\(\)\ -]{4,14}\d$/;
//     // var myPhone = document.getElementById('phone').value;
//     var myPhone = document.querySelectorAll('.phone').value;
//     var valid = re.test(myPhone);
//     if (valid) output = 'Номер телефона введен правильно!';
//     else output = 'Номер телефона введен неправильно!';
//     document.getElementById('message').innerHTML = document.getElementById('message').innerHTML+'<br />'+output;
//     return valid;
// }  
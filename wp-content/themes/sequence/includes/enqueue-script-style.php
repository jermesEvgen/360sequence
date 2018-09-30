<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Подключаем стили .
 */
add_action( 'wp_enqueue_scripts', 'sequence_style' );

function sequence_style() {


    /* Главные стили */
    wp_enqueue_style( 'sequence-style', get_stylesheet_uri() );
    /* Google material fonts */
    wp_enqueue_style( 'google-fonts' , 'https://fonts.googleapis.com/icon?family=Material+Icons' );
    /* fontawesome fonts */
    wp_enqueue_style( 'fontawesome' , 'https://use.fontawesome.com/releases/v5.1.0/css/all.css' );
    


    /* ROTATOR */
    wp_enqueue_style( 'rotator' , get_template_directory_uri() . '/assets/libs/rotator/css/default.css',array() , null, 'all');
    wp_enqueue_style( 'rotator-comp' , get_template_directory_uri() . '/assets/libs/rotator/css/component.css',array() , null, 'all');
    /*calculator*/
    wp_enqueue_style( 'calculator-css' , get_template_directory_uri() . '/assets/libs/calculator/calc.css',array() , null, 'all');
    
    /* custom style */   
    // wp_enqueue_style( 'media-style' , get_template_directory_uri() . '/assets/css/media.css'); 
    wp_enqueue_style( 'fonts-style' , get_template_directory_uri() . '/assets/css/fonts.css'); 
    wp_enqueue_style( 'main-style' , get_template_directory_uri() . '/assets/css/main.css'); 

    /*GRT Youtube Popup*/
    // wp_enqueue_style( 'video-popup-css' , get_template_directory_uri() . '/assets/libs/video-modal/grt-youtube-popup.css',array() , null, 'all');
    /* AOS  */
    // wp_enqueue_style( 'select-skin-aos' , get_template_directory_uri() . '/assets/libs/aos/aos.css',array() , null, 'all');
    /* custom-select */
    // wp_enqueue_style( 'custom-select' , get_template_directory_uri() . '/assets/libs/select-menu/css/vdrop.min.css',array() , null, 'all'); 
    /*Animation*/
    // wp_enqueue_style( 'animation' , get_template_directory_uri() . '/assets/libs/animate/animate.css',array() , null, 'all');
    /*Кнопки на сайте */
    // wp_enqueue_style( 'buttons-theme' , get_template_directory_uri() . '/assets/libs/buttons/css/buttons.css',array() , null, 'all');
    /* Owlcarousel */
    // wp_enqueue_style( 'owlcarousel' , get_template_directory_uri() . '/assets/libs/owlcarousel/dist/assets/owl.carousel.min.css',array() , null, 'all');
    // wp_enqueue_style( 'owlcarousel-theme' , get_template_directory_uri() . '/assets/libs/owlcarousel/dist/assets/owl.theme.default.min.css',array() , null, 'all');
    /* sequence block css */
    // wp_enqueue_style( 'sequence-style-css' , get_template_directory_uri() . '/assets/libs/photo3d-html-files/v3/css/style.css',array() , null, 'all'); 
    /* bundle.min.css*/
    wp_enqueue_style( 'sequence-style-css' , get_template_directory_uri() . '/assembly/css/bundle.min.css',array() , null, 'all'); 
   

}

/**
 * Подключаем скрипты  
 */
add_action( 'wp_enqueue_scripts', 'sequence_scripts' );
function sequence_scripts() {


    /*Уничтожаем jQuery из коробки  */
    wp_deregister_script( 'jquery' );
    /* Подключаем наш вариант jQuery*/
    wp_enqueue_script( 'jquery' , get_template_directory_uri() . '/assets/libs/jquery/jquery.min.js'); 


    /* script-custom */ 
    // wp_enqueue_script( 'script-custom' , get_template_directory_uri() . '/assets/js/script.js' , array ('jquery'), '', true);
   /* navigation */
    // wp_enqueue_script( 'sequence-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
   /* skip-link-focus-fix */
   // wp_enqueue_script( 'sequence-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

    /*GRT Youtube Popup*/
    // wp_enqueue_script( 'video-popup-js' , get_template_directory_uri() . '/assets/libs/video-modal/grt-youtube-popup.js', array ('jquery'), '', true);  
    /* Animation AOS */
    // wp_enqueue_script( 'AOS' , get_template_directory_uri() . '/assets/libs/aos/aos.js' , array ('jquery'), '', true);
    /* Счетчики */
    // wp_enqueue_script( 'counterUp' , get_template_directory_uri() . '/assets/libs/counterUp/jquery.counterup.js' , array ('jquery'), null, true);
    /* spiner */
     // wp_enqueue_script( 'InputSpinner' , get_template_directory_uri() . '/assets/libs/sppiner/src/InputSpinner.js' , array ('jquery'), '', true); 
    /*  video */
     // wp_enqueue_script( 'video' , get_template_directory_uri() . '/assets/libs/videobox/embed.videos.js' , array ('jquery'),null, true); 
     /* ROTATOR */
    // wp_enqueue_script( 'cbpQTRotator' , get_template_directory_uri() . '/assets/libs/rotator/js/jquery.cbpQTRotator.min.js' , array ('jquery'), null, true); 
    /* animation js*/
    // wp_enqueue_script( 'animation-js' , get_template_directory_uri() . '/assets/libs/animate/animate-css.js' , array ('jquery'), '', true); 
    /* select-menu js*/
    // wp_enqueue_script( 'select-menu-js' , get_template_directory_uri() . '/assets/libs/select-menu/js/jquery.vdrop.min.js' , array ('jquery'), null, true); 
    /* sequence block js  header */ 
    // wp_enqueue_script( 'sequence-reel' , get_template_directory_uri() . '/assets/libs/sequense-headerup/jquery.reel.js' , array ('jquery'), '', true); 
    /*owl.carousel*/
    // wp_enqueue_script( 'owl-carousel-js' , get_template_directory_uri() . '/assets/libs/owlcarousel/docs/assets/owlcarousel/owl.carousel.min.js' , array ('jquery'), '');

    /* sequence block js  body */
    // wp_enqueue_script( 'canvasloader' , get_template_directory_uri() . '/assets/libs/photo3d-html-files/v3/js/canvasloader.js' , array ('jquery'), null, true); 
    // wp_enqueue_script( 'fullscreen' , get_template_directory_uri() . '/assets/libs/photo3d-html-files/v3/js/jquery.fullscreen-0.3.5.js' , array ('jquery'), null, true);
    // wp_enqueue_script( 'mousewheel' , get_template_directory_uri() . '/assets/libs/photo3d-html-files/v3/js/jquery.mousewheel.js' , array ('jquery'), null, true); 
    // wp_enqueue_script( 'selection' , get_template_directory_uri() . '/assets/libs/photo3d-html-files/v3/js/jquery.selection.js' , array ('jquery'), null, true); 
    // wp_enqueue_script( 'metadata' , get_template_directory_uri() . '/assets/libs/photo3d-html-files/v3/js/jquery.metadata.js' , array ('jquery'), null, true); 
    // wp_enqueue_script( 'photo3d' , get_template_directory_uri() . '/assets/libs/photo3d-html-files/v3/js/jquery.photo3d.js' , array ('jquery'), null, true); 
    // wp_enqueue_script( 'photo3dconfig' , get_template_directory_uri() . '/assets/libs/photo3d-html-files/v3/js/jquery.photo3dconfig.js' , array ('jquery'), null, true);
    // wp_enqueue_script( 'device' , get_template_directory_uri() . '/assets/libs/photo3d-html-files/v3/js/device.min.js' , array ('jquery'), null, true); 

    /* bundle.min.js*/
    wp_enqueue_script( 'sequence-js' , get_template_directory_uri() . '/assembly/js/bundle.min.js' , array ('jquery'), null, true); 


    /*calculator*/
    wp_enqueue_script( 'calculator-js' , get_template_directory_uri() . '/assets/libs/calculator/calc.js' , array ('jquery'), '', true);
	/* API ключ от Google*/ 
	wp_enqueue_script( 'map' , 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAkSOzLbgPVknN6Rg_HWx2w1bewosI-Hdg&sensor=false' , array ('jquery'), '', true); 
	/*modernizr.js*/
	wp_enqueue_script( 'modernizr' , get_template_directory_uri() . '/assets/libs/modernizr/modernizr.js' , array ('jquery'), ''); 
    /* Счетчики */
    wp_enqueue_script( 'waypoints' , 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js' , array ('jquery'), null, true); 




  

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}



<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>


			  <?php
		       $mainSlider_list__item = ot_get_option('mainSlider_list__item');
		    ?>	

		    <div class="sliderContainer">
		    	
		    	<div class="owl-carousel">
       			
        	    <?php 
             	    foreach ($mainSlider_list__item as $mainSlider) :
             	    $slider_item__title = $mainSlider['slider_item__title'] ? $mainSlider['slider_item__title'] : ''; 
             	    $slider_item__descr = $mainSlider['slider_item__descr'] ? $mainSlider['slider_item__descr'] : ''; 
             	    $slider_item__descr = $mainSlider['slider_item__descr'] ? $mainSlider['slider_item__descr'] : ''; 
             	    
                   /* Картинки в левой части */
             	    $slider_item__icon = $mainSlider['slider_item__icon'] ? $mainSlider['slider_item__icon'] : ''; 
             	    $slider_item__icon1 = $mainSlider['slider_item__icon1'] ? $mainSlider['slider_item__icon1'] : ''; 
             	    $slider_item__icon2 = $mainSlider['slider_item__icon2'] ? $mainSlider['slider_item__icon2'] : ''; 
             	    $slider_item__icon3 = $mainSlider['slider_item__icon3'] ? $mainSlider['slider_item__icon3'] : ''; 
             	    $slider_item__icon4 = $mainSlider['slider_item__icon4'] ? $mainSlider['slider_item__icon4'] : ''; 
             	    
             	    /* Главная картинка */
             	    $slider_item__img = $mainSlider['slider_item__img'] ? $mainSlider['slider_item__img'] : ''; 

             	 ?>

                   	    <!-- 1 слайд -->
                   	    <div class="sliderContainer_item"  >
       	            	    <div class="sliderContainer_item__left">
       		            	   	   <h3 data-animation-in="bounce" data-animation-out="bounce" ><?php echo $slider_item__title; ?></h3>
       		            	       <p><?php echo $slider_item__descr; ?> </p>
       	                           
       	                           <div class="containerImg">
       	                           	    <img  src="<?php echo $slider_item__icon; ?>" alt=""> 
       	                           	    <img  src="<?php echo $slider_item__icon1; ?>" alt=""> 
       	                           	    <img  src="<?php echo $slider_item__icon2; ?>" alt=""> 
       	                           	    <img  src="<?php echo $slider_item__icon3; ?>" alt=""> 
       	                           	    <img  src="<?php echo $slider_item__icon4; ?>" alt=""> 
       	                           </div>
       	            	     </div>
       	            	     <div class="sliderContainer_item__right">
       	            	     	<div class="arrowSlider_dot"></div>
       	            	     	<img src="<?php echo $slider_item__img; ?>">
       	            	     </div>
                   	    </div>


	            <?php 
	            endforeach;
	            ?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

			<div class="backgroundText" data-paroller-factor="0.09" data-paroller-type="foreground" data-paroller-direction="horizontal" data-aos-once="true" data-aos="fade-right">
				<p>фото 360&deg;</p>
			<div class="arrowSlider_dot arrowSlider_dot__rotate"></div>
			</div>
            <div id="yourOption" class="section_wrapper__title left_title" >	
	    		    <!--  Заголовок для блока  -->
				      <?php if (ot_get_option( 'yourOption_title')) {?>
			  	      <h2><?php echo ot_get_option( 'yourOption_title' ); ?></h2>  
			        <?php } ?>	
              <!-- <div class="delimiter bl-center"> </div>   -->
              <div id="yourOption-delimiter" class="delimiter delimiter_left"> </div>  
		          <!-- <div id="yourOption-delimiter" class="delimiter delimiter_left"></div> 	 -->
  		    		<!-- Подзаголовок для блока  -->

  				      
              <?php if (ot_get_option( 'yourOption_subtitle')) {?>
			  	      <p><?php echo ot_get_option( 'yourOption_subtitle' ); ?></p>  
			        <?php } ?>	
	          </div>
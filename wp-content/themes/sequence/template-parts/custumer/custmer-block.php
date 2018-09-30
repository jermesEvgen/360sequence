<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
   	<div class="wrapper-block" >
   	    <div class="customers-block section_wrapper__title left_title central-title ">	
   					    <!--  Заголовок для блока  -->
   					    <?php if (ot_get_option( 'customers_title')) {?>
   				  	      <h2><?php echo ot_get_option( 'customers_title' ); ?></h2>  
   				        <?php } ?>	
   			    	
   			    		<!-- Подзаголовок для блока  -->
   			    		<div id="customers-delimiter" class="delimiter delimiter_left"> </div>
   					    <?php if (ot_get_option( 'customers_subtitle')) {?>
   				  	      <p><?php echo ot_get_option( 'customers_subtitle' ); ?></p>  
   				      <?php } ?>	
   	    </div>
   	</div>
   	  <!-- <div class="fullscreen-bg" > -->
   	  <div class="bg-flower" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical">
   	      <img  src="<?php echo get_template_directory_uri() ?>/assets/img/flowers.png" alt="">
   	  </div>
   	  <div style="display: none;" class="mac-img" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
   	      <img  src="<?php echo get_template_directory_uri() ?>/assets/img/internet-shop-mac__bg.png">
   	  </div>

   	<div  class="overlay" data-paroller-factor="0.13" data-paroller-type="foreground" data-paroller-direction="vertical">
   	  <video loop muted autoplay poster="<?php echo get_template_directory_uri() ?>/assets/video/final.png" class="fullscreen-bg__video">
            <!-- <source src="<?php echo get_template_directory_uri() ?>/assets/video/video_sqr/mockUp_sqr_640.mp4" type="video/mp4"> -->
   	      <source src="<?php echo get_template_directory_uri() ?>/assets/video/video_sqr/mockUp_sqr_1080.mp4" type="video/mp4">
   	      <!-- <source src="<?php echo get_template_directory_uri() ?>/assets/video/mockup_pups_2.webm" type="video/webm"> -->
   	  </video>
   	</div>
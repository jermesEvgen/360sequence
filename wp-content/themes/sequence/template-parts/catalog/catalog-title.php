<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>


	 		<div class="section_wrapper__title left_title">	

            <!--  Заголовок для блока  -->
			    <?php if (ot_get_option( 'explGoods_title')) {?>
		  	      <h2><?php echo ot_get_option( 'explGoods_title' ); ?></h2>  
		        <?php } ?>		    	          
	    		<!-- Подзаголовок для блока  -->
	    		<div id="explGoods-delimiter" class="delimiter delimiter_left"> </div>
			    <?php if (ot_get_option( 'explGoods_subtitle')) {?>
		  	      <p><?php echo ot_get_option( 'explGoods_subtitle' ); ?></p>  
		        <?php } ?>	


		        <div class="tab-title-format">
		          <div class="tab-title-format__title">
		            <h3>3d фото</h3>
		          </div>
		          <div class="tab-title-format__title">
		            <h3>Gif</h3>
		          </div>
		          <div class="tab-title-format__title">
		            <h3>Видео</h3>
		          </div>
		        </div>


	        </div>

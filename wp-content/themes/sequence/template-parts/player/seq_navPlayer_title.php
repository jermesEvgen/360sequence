<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

        <div class="section_wrapper__title">	
    		    <!--  Заголовок для блока  -->
			    <?php if (ot_get_option( 'navConsole_title')) {?>
		  	      <h2><?php echo ot_get_option( 'navConsole_title' ); ?></h2>  
		        <?php } ?>	
	    	
	    		<!-- Подзаголовок для блока  -->
	    		<div class="delimiter bl-center"> </div>
			    <?php if (ot_get_option( 'navConsole_subtitle')) {?>
		  	      <p><?php echo ot_get_option( 'navConsole_subtitle' ); ?></p>  
		        <?php } ?>	

        </div>

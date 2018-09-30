<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

      <div class="navigationConsole_rightBox">
			 <?php
		       $navConsole_list__item = ot_get_option('navConsole_list__item');
		    ?>	

    		<div class="navConsoleContainer button-block">
    			<!-- Zoom Plusesize -->
    		</div>
    	    <?php 
         	    foreach ($navConsole_list__item as $navConsole) :
         	    $navConsole_title = $navConsole['navConsole_title'] ? $navConsole['navConsole_title'] : ''; 
         	    $navConsole_title__img = $navConsole['navConsole_title__img'] ? $navConsole['navConsole_title__img'] : ''; 
         	    $navConsole_title__btn = $navConsole['navConsole_title__btn'] ? $navConsole['navConsole_title__btn'] : ''; 
         	    $navConsole_decr = $navConsole['navConsole_decr'] ? $navConsole['navConsole_decr'] : ''; 
         	 ?>

 	 			<div class="navConsoleContainer_inner info-block"  >
 
 	 				<div class="navConsoleContainer_inner__div"> 
 	                     <div class="consoleButton">
                              <div class="petal">
       	                     	  <img src="<?php echo $navConsole_title__img; ?>" alt="">
                              </div>
                          </div>
                          <h3><?php echo $navConsole_title; ?> </h3>
 	                     <span><?php echo $navConsole_title__btn; ?></span>
 	 				</div>
 	 				<!-- <hr> -->
 	 				<p>
 	 					<?php echo $navConsole_decr; ?>
 	 				</p>
 	 			</div>



         	 <?php 
         	 endforeach;
         	 ?>
    	</div>
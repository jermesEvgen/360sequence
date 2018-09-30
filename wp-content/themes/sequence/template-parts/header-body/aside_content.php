<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>


       <!--  Заголовок 1 -->
  <?php if (ot_get_option( 'headerContent_text__h5' )) {?>
      <h5><?php echo ot_get_option( 'headerContent_text__h5' ); ?></h5>  
   <?php } ?>  
      <!--  Заголовок 2 -->
   <?php if (ot_get_option( 'headerContent_text__h1' )) {?>
      <h1><?php echo ot_get_option( 'headerContent_text__h1' ); ?></h1>  
   <?php } ?>  
      

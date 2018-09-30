<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

 <!--  mobile screen block -->
   <div class="headerBody_product__3dimg mobileScreen_block" >
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img3d_000176.png" width="600" height="400"
         class="reel"
         id="image"
         data-images="<?php echo get_template_directory_uri(); ?>/assets/img/img3d_36.3d/##.png|1..36"
         data-cw="true"
         data-frame="71"
         data-speed="0.2"
         data-duration="false"
         data-velocity="1"
         data-brake="0.2">
    </div>

   <!--  Заголовок 3 -->
    <?php if (ot_get_option( 'headerContent_text__h4' )) {?>
	   <h4><?php echo ot_get_option( 'headerContent_text__h4' ); ?></h4>  
    <?php } ?>	
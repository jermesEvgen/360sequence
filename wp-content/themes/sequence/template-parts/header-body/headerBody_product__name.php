<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
   <!--Название товара   -->
		<?php if (ot_get_option( 'headerBody_product__name' )) {?>
    		 <div class="headerBody_product__name">
    		 	<span class="headerBody-product__title"><?php echo ot_get_option( 'headerBody_product__name' ); ?></span>  
    		 	<span class="headerBody-product__descr">3D фото 360° с дополненной анимацией </span>
    		 </div>
		<?php } ?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
   			  <?php if (ot_get_option( 'headerTop_bt__link' )) {?>
   			       <a href="<?php echo ot_get_option( 'headerTop_bt__link' ); ?>" class="headerTop_btn button button--moema button--inverted button--text-thick button--size-s myBtn" data-modal="myModal1"><?php echo ot_get_option( 'headerTop_bt__name' ); ?></a>
   			  <?php } ?>	
   			  
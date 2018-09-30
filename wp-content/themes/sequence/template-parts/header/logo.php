<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>  

    <div class="headerTop_logo">
  		<?php if (ot_get_option( 'headerTop_logo-main' )) {?>
  		      <img src="<?php echo ot_get_option( 'headerTop_logo-main' ); ?>" alt="">
  		<?php } ?>	
  		<?php if (ot_get_option( 'headerTop_logo-secondary' )) {?>
  		      <img style="width: 80px;" src="<?php echo ot_get_option( 'headerTop_logo-secondary' ); ?>" alt="">
  		<?php } ?>	
  	</div>
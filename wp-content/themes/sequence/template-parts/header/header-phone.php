<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
      <div class="headerTop_phone">
	  		<?php if (ot_get_option( 'phone_link' )) {?>
	  		     <a href="callto:<?php echo ot_get_option( 'phone_link' ); ?>"> <i class="material-icons">phone</i><?php echo ot_get_option( 'phone_number' ); ?></a>
	  		<?php } ?>	
	  	</div>
	  	
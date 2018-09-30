<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
      <div class="headerTop_message">
	  		<?php if (ot_get_option( 'socialChat_link' )) {?>
	  		     <a  href="<?php echo ot_get_option( 'socialChat_link' ); ?>" target="_blank"> <img src="<?php echo ot_get_option( 'socialChat_upload' ); ?>" alt="">
	  		<?php } ?>	

	  	</div>

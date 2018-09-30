<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
	
          <div class="headerBodyCta">
            <?php if (ot_get_option( 'headerContent_bt__price' )) {?>
                 <a href="<?php echo ot_get_option( 'headerContent_bt__price-link' ); ?>" class="smoothscroll headerBodyCta_btn button button--pipaluk button--inverted button--round-l button--text-thick button--text-upper "><?php echo ot_get_option( 'headerContent_bt__price' ); ?></a>
            <?php } ?>  

            <?php if (ot_get_option( 'headerTop_bt__3dphoto' )) {?>
                 <a href="<?php echo ot_get_option( 'headerTop_bt__3dphoto-link' ); ?>" class="smoothscroll headerBodyCta_btn button button--pipaluk button--inverted button--round-l button--text-thick button--text-upper "><?php echo ot_get_option( 'headerTop_bt__3dphoto' ); ?></a>
            <?php } ?>  
          </div>

          
          <!--  Дополнительная информация  -->
          <?php if (ot_get_option( 'headerContent_text__p')) {?>
              <p><?php echo ot_get_option( 'headerContent_text__p' ); ?></p>  
            <?php } ?>
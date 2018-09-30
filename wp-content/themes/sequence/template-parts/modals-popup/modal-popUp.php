<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
       <!-- Модальное окно заказать съемку -->
       <div id="myModal1" class="modal-overlay" >
         <div class="modal-content modal-content__form modal-content__anim" >
           <div class="modal-header">
             <span class="close close_position" data-modal="myModal1">&times;</span>
           </div>
           <div class="modal-body">
            <h2>3-d фотосъемка</h2>
            <h5>Напишите нам о том что вы хотите снять, мы проконсультируем вас бесплатно </h5>
            <h5> Как выглядит <a  href="#catalog" data-modal="myModal1" class="smoothscroll link-close close">3d фото</a></h5>
	          <?php if ( ot_get_option( 'headerTop_form')){ ?>
	                <?php echo do_shortcode( ot_get_option( 'headerTop_form' )) ; ?>
	          <?php } ?>
           </div>
         </div>
       </div>
      <!--  Конец модального окна  -->
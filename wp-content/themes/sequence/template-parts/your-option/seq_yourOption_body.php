<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
      
	    	<?php
	           $optionCard_list__item = ot_get_option('optionCard_list__item');
	        ?>	

			<div class="explsSequence"><!-- обертка -->


				<!-- ==================
				секвенция покадровая 
				=======================
				доподнительная анимация 
				=================== -->
        	    <?php 
             	    foreach ($optionCard_list__item as $optionCard) :
             	    $optionCard_id__card = $optionCard['optionCard_id__card'] ? $optionCard['optionCard_id__card'] : ''; 
             	    $optionCard_icon = $optionCard['optionCard_icon'] ? $optionCard['optionCard_icon'] : ''; 
             	    $optionCard_icon2 = $optionCard['optionCard_icon2'] ? $optionCard['optionCard_icon2'] : ''; 
             	    $optionCard_title = $optionCard['optionCard_title'] ? $optionCard['optionCard_title'] : ''; 
             	    $optionCard_farme = $optionCard['optionCard_farme'] ? $optionCard['optionCard_farme'] : ''; 
                    $optionCard_img__standby = $optionCard['optionCard_img__standby'] ? $optionCard['optionCard_img__standby'] : ''; 
             	    $optionCard_img__hover = $optionCard['optionCard_img__hover'] ? $optionCard['optionCard_img__hover'] : ''; 
            	    // Модальное окно
            	    $optionCard_modal__title = $optionCard['optionCard_modal__title'] ? $optionCard['optionCard_modal__title'] : ''; 
            	    $optionCard_modal__subtitle = $optionCard['optionCard_modal__subtitle'] ? $optionCard['optionCard_modal__subtitle'] : ''; 
            	    $optionCard_modal_img = $optionCard['optionCard_modal_img'] ? $optionCard['optionCard_modal_img'] : ''; 
             	 ?>



         	 	<div id="explsSequence_item" class="explsSequence_item" >

         	 		<a href="#0" class="myBtn"  data-modal="<?php echo $optionCard_id__card; ?>">
         	     		<div class="explsSequence_item top_title  ">
         	     		    <div class="top_title__360 ">
         	     				 <img src="<?php echo $optionCard_icon; ?>" alt="">
         	     				 <img src="<?php echo $optionCard_icon2; ?>" alt="">
         	     				 <span><?php echo $optionCard_title; ?> </span>
         	     			 </div>
         	     		     <div class="top_title__frames">
         	     			 	 <h3><?php echo $optionCard_farme; ?></h3>
         	     			 </div>
         	     	 	 </div>
         	             <div class="explsSequence__item_delimetr"></div>
         	             <div class="explsSequence__item bottom_pic">
         	             	<div class="bottom_pic__circle">
                                <img class="bottom_pic-img" src="<?php echo $optionCard_img__hover; ?>" alt="">
         	             		<img class="bottom_pic-img" src="<?php echo $optionCard_img__standby; ?>" alt="">

         	             	</div>
         	             </div>
         	         </a>
         	 	</div>

	             <!-- Модальное окно для секвенции  -->
	             <div id="<?php echo $optionCard_id__card; ?>" class="modal-overlay">
	               <div class="modal-content modal-content__anim" >
	                 <div class="modal-header">
	                   <span class="close" data-modal="<?php echo $optionCard_id__card; ?>">&times;</span>
	                 </div>
	                 <div class="modal-body">
	                    <h2 id="modal5Title"> <?php echo $optionCard_modal__title; ?></h2>
	                    <h5> <?php echo $optionCard_modal__subtitle; ?> </h5>
	                     <!-- Картинка  -->
	                     <?php echo $optionCard_modal_img; ?> 
	                 </div>
	               </div>
	             </div>
	             <!--  Конец модального окна  -->
	           	 <?php 
	           	 endforeach;
	           	 ?>

			</div> <!-- конец обертки  -->
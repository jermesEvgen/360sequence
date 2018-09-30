<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>


          <div class="explGoodsContainer">
	 
	 
       <?php
          $explGoods_list__item = ot_get_option('explGoods_list__item');
       ?> 

				<!-- ==================

				карточка товара 3D фотография

				=================== -->
        	    <?php 
             	    foreach ($explGoods_list__item as $explGoods) :
             	    $explGoods_cards__id = $explGoods['explGoods_cards__id'] ? $explGoods['explGoods_cards__id'] : ''; 
             	    $explGoods_cards__class = $explGoods['explGoods_cards__class'] ? $explGoods['explGoods_cards__class'] : ''; 
             	    $explGoods_cards__titile = $explGoods['explGoods_cards__titile'] ? $explGoods['explGoods_cards__titile'] : ''; 
             	    $explGoods_cards__catg = $explGoods['explGoods_cards__catg'] ? $explGoods['explGoods_cards__catg'] : ''; 
             	    $explGoods_cards__icon = $explGoods['explGoods_cards__icon'] ? $explGoods['explGoods_cards__icon'] : ''; 
             	    $explGoods_cards__img = $explGoods['explGoods_cards__img'] ? $explGoods['explGoods_cards__img'] : ''; 
             	    
                   /* Модальное окно*/
             	    $explGoods_modal_img = $explGoods['explGoods_modal_img'] ? $explGoods['explGoods_modal_img'] : ''; 
             	 ?>



            	<!-- 1 товар -->
	        	<div class="explGoodsContainer_item <?php echo $explGoods_cards__class; ?> ">      
              <a href="#0" class="myBtn"  data-modal="<?php echo $explGoods_cards__id; ?>">
		            <div class="explGoodsContainer_item__wrapper " >
  				        		<div class="explGoodsContainer_item__title">
  				        			<h3><?php echo $explGoods_cards__titile; ?></h3>
  				        			<span><?php echo $explGoods_cards__catg; ?></span>
  				        		</div>
				        	    <div class="explGoodsContainer_item__logo">
				        	    	<img src=" <?php echo $explGoods_cards__icon; ?>" alt="">
				        	    </div>
		            </div>
		                <img class="explGoodsContainer_item__goods" src="<?php echo $explGoods_cards__img; ?>" alt="">
		          </a>
	        	</div>

            <!-- Модальное окно для секвенции  -->
            <div id="<?php echo $explGoods_cards__id; ?>" class="modal-overlay">
              <div class="modal-content modal-content__anim" >
                <div class="modal-header">
                  <span class="close" data-modal="<?php echo $explGoods_cards__id; ?>">&times;</span>
                </div>
                <div class="modal-body">
                    <h2 id="modal6Title"><?php echo $explGoods_cards__titile; ?></h2>
                    <h5><?php echo $explGoods_cards__catg; ?> </h5>

                    <!-- Код секвенции  -->
                    <?php echo $explGoods_modal_img; ?>
                </div>
              </div>
            </div>
            <!--  Конец модального окна  -->
        		    	<?php 
        		    	endforeach;
        		    	?>


          <!-- <div class="link-nextPage-photo"  data-aos-easing="ease-in-out-quart"  data-aos="fade-right" data-aos-duration="400">
              Ещё товары            
              <i class="material-icons">keyboard_backspace</i>     
          </div> -->

	        </div>
           
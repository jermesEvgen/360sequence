<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

         
              <div class="explGoodsContainer">
          <?php
            $explGoodsGif_list__item = ot_get_option('explGoodsGif_list__item');
         ?>  

               
               <!-- ==================

               карточка товара GIF

               =================== -->

         <?php 
             foreach ($explGoodsGif_list__item as $explGifGoods) :
             $explGoodsGif_cards__id = $explGifGoods['explGoodsGif_cards__id'] ? $explGifGoods['explGoodsGif_cards__id'] : ''; 
             $explGoodsGif_cards__class = $explGifGoods['explGoodsGif_cards__class'] ? $explGifGoods['explGoodsGif_cards__class'] : ''; 
             $explGoodsGif_cards__titile = $explGifGoods['explGoodsGif_cards__titile'] ? $explGifGoods['explGoodsGif_cards__titile'] : ''; 
             $explGoodsGif_cards__catg = $explGifGoods['explGoodsGif_cards__catg'] ? $explGifGoods['explGoodsGif_cards__catg'] : ''; 
             $explGoodsGif_cards__icon = $explGifGoods['explGoodsGif_cards__icon'] ? $explGifGoods['explGoodsGif_cards__icon'] : ''; 
             $explGoodsGif_cards__img = $explGifGoods['explGoodsGif_cards__img'] ? $explGifGoods['explGoodsGif_cards__img'] : ''; 
             
              /* Модальное окно*/
             $explGoodsGif_modal_img = $explGifGoods['explGoodsGif_modal_img'] ? $explGifGoods['explGoodsGif_modal_img'] : ''; 
          ?>

                 <!-- 1 товар -->
               <div class="explGoodsContainer_item <?php echo $explGoodsGif_cards__class; ?> ">      
                 <a href="#0" class="myBtn"  data-modal="<?php echo $explGoodsGif_cards__id; ?>">
                   <div class="explGoodsContainer_item__wrapper " >
                       <div class="explGoodsContainer_item__title">
                         <h3><?php echo $explGoodsGif_cards__titile; ?></h3>
                         <span><?php echo $explGoodsGif_cards__catg; ?></span>
                       </div>
                       <div class="explGoodsContainer_item__logo">
                          <img src=" <?php echo $explGoodsGif_cards__icon; ?>" alt="">
                       </div>
                   </div>
                   <img class="explGoodsContainer_item__goods" src="<?php echo $explGoodsGif_cards__img; ?>" alt="">
                 </a>
               </div>

               <!-- Модальное окно для секвенции  -->
               <div id="<?php echo $explGoodsGif_cards__id; ?>" class="modal-overlay">
                 <div class="modal-content modal-content__anim" >
                   <div class="modal-header">
                     <span class="close" data-modal="<?php echo $explGoodsGif_cards__id; ?>">&times;</span>
                   </div>
                   <div class="modal-body">
                       <h2 id="modal6Title"><?php echo $explGoodsGif_cards__titile; ?></h2>
                       <h5><?php echo $explGoodsGif_cards__catg; ?> </h5>

                       <!-- Код секвенции  -->
                       <img src="<?php echo $explGoodsGif_modal_img; ?>" alt="">
                       
                   </div>
                 </div>
               </div>
               <!--  Конец модального окна  -->

              <?php 
              endforeach;
              ?>



               <!-- <div class="link-nextPage-photo"  data-aos-easing="ease-in-out-quart"  data-aos="fade-right" data-aos-duration="100">
                   Ещё товары            
                   <i class="material-icons">keyboard_backspace</i>     
               </div> -->
             </div>
             

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

            

                   <div class="explGoodsContainer">
                 <?php
                    $explGoodsVideo_list__item = ot_get_option('explGoodsVideo_list__item');
                 ?>  

                    
                    <!-- ==================

                    карточка товара VIDEO

                    =================== -->


                    <?php 
                        foreach ($explGoodsVideo_list__item as $explVideoGoods) :
                        $explGoodsVideo_cards__id = $explVideoGoods['explGoodsVideo_cards__id'] ? $explVideoGoods['explGoodsVideo_cards__id'] : ''; 
                        // $explGoodsVideo_cards__class = $explVideoGoods['explGoodsVideo_cards__class'] ? $explVideoGoods['explGoodsVideo_cards__class'] : ''; 
                        $explGoodsVideo_cards__titile = $explVideoGoods['explGoodsVideo_cards__titile'] ? $explVideoGoods['explGoodsVideo_cards__titile'] : ''; 
                        $explGoodsVideo_cards__catg = $explVideoGoods['explGoodsVideo_cards__catg'] ? $explVideoGoods['explGoodsVideo_cards__catg'] : ''; 
                        $explGoodsVideo_cards__icon = $explVideoGoods['explGoodsVideo_cards__icon'] ? $explVideoGoods['explGoodsVideo_cards__icon'] : ''; 
                        $explGoodsVideo_cards__img = $explVideoGoods['explGoodsVideo_cards__img'] ? $explVideoGoods['explGoodsVideo_cards__img'] : ''; 
                        
                         /* Модальное окно*/
                        // $explGoodsVideo_modal_link = $explVideoGoods['explGoodsVideo_modal_link'] ? $explVideoGoods['explGoodsVideo_modal_link'] : ''; 
                        /*Локальное видео*/
                        //Заглушка PNG 
                        $explGoodsVideo_modal_blankpng = $explVideoGoods['explGoodsVideo_modal_blankpng'] ? $explVideoGoods['explGoodsVideo_modal_blankpng'] : '';//src video
                        $explGoodsVideo_modal_localvideo = $explVideoGoods['explGoodsVideo_modal_localvideo'] ? $explVideoGoods['explGoodsVideo_modal_localvideo'] : ''; 
                     ?>

                        <!-- 1 товар -->
                      <!-- <div class="explGoodsContainer_item <?php echo $explGoodsVideo_cards__class; ?> ">       -->
                      <div class="explGoodsContainer_item ">      
                        <a href="#0" class="myBtn"  data-modal="<?php echo $explGoodsVideo_cards__id; ?>">
                          <div class="explGoodsContainer_item__wrapper " >
                              <div class="explGoodsContainer_item__title">
                                <h3><?php echo $explGoodsVideo_cards__titile; ?></h3>
                                <span><?php echo $explGoodsVideo_cards__catg; ?></span>
                              </div>
                              <div class="explGoodsContainer_item__logo">
                                 <img src=" <?php echo $explGoodsVideo_cards__icon; ?>" alt="">
                              </div>
                          </div>
                          <!-- <div class="explGoodsContainer_item__goods"> -->
                          <div class="explGoodsContainer_item__image"> 
                            <img  src="<?php echo $explGoodsVideo_cards__img; ?>" alt="">
                         </div>
                        </a>
                      </div>

                      <!-- Модальное окно для секвенции  -->
                      <div id="<?php echo $explGoodsVideo_cards__id; ?>" class="modal-overlay">
                        <div class="modal-content modal-content__anim" >
                          <div class="modal-header">
                            <span class="close" data-modal="<?php echo $explGoodsVideo_cards__id; ?>">&times;</span>
                          </div>
                          <div class="modal-body modal-body__video">
                              <h2 id="modal6Title"><?php echo $explGoodsVideo_cards__titile; ?></h2>
                              <h5><?php echo $explGoodsVideo_cards__catg; ?> </h5>
                              <!-- Код секвенции  -->
                              <!-- <?php echo $explGoodsVideo_modal_link; ?> -->

                              <video loop muted autoplay="true" poster="<?php echo $explGoodsVideo_modal_blankpng; ?>" width = "280" height = "340" controls >
                                  <source src="<?php echo $explGoodsVideo_modal_localvideo; ?>" type="video/mp4">
                              </video>
                              
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

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
   	<div class="ctaBlock_wrapper-position">
         <div class="counter-block">
            <!-- Счетчик  -->
            <?php if (ot_get_option( 'ctaCounter')) {?>
               <span class="counter"><?php echo ot_get_option( 'ctaCounter' ); ?></span>  
            <?php } ?>  
            <span class="counter-sub">товаров</span>  
          </div>
          
          <div class="ctaBlock_wrapper">
            <!-- Иконка 1   -->
                <?php if (ot_get_option( 'ctaIcon_2')) {?>
                 <img src="<?php echo ot_get_option( 'ctaIcon_2' ); ?>" alt=""  data-aos="flip-left" data-aos-duration="600" data-aos-delay="300">  
                <?php } ?>  


                <div class="ctaBlock_content">           


                  <div class="ctaBlock_content__digits emphasize">

                      <!-- Заголовок 1  -->
                    <?php if (ot_get_option( 'ctaText_1')) {?>
                       <h5 class="emphasize-h5"><?php echo ot_get_option( 'ctaText_1' ); ?></h5>  
                    <?php } ?>   
                      <!-- Заголовок 2 -->
                    <?php if (ot_get_option( 'ctaText_2')) {?>
                       <?php echo ot_get_option( 'ctaText_2' ); ?>  
                    <?php } ?>                  
                  </div>

               </div>


                <div class="ctaBlock_call ">  
                      <!-- Заголовок 3-->
                        <?php if (ot_get_option( 'ctaText_3')) {?>
                          <h3><?php echo ot_get_option( 'ctaText_3' ); ?></h3>  
                        <?php } ?>    
                      <!-- Заголовок 4-->
                     <?php if (ot_get_option( 'ctaText_4')) {?>
                       <p><?php echo ot_get_option( 'ctaText_4' ); ?></p>  
                     <?php } ?>  
                    <!--Кнопка -->
                     <?php if (ot_get_option( 'ctaBtn' )) {?>
                         <a href="<?php echo ot_get_option( 'headerTop_bt__link' ); ?>" class="footerCta_btn button button--pipaluk button--inverted button--round-l button--text-thick button--text-upper myBtn" data-modal="myModal1"><i class="material-icons">send</i> <?php echo ot_get_option( 'ctaBtn' ); ?></a>
                    <?php } ?> 
                </div>
           </div>
        </div>
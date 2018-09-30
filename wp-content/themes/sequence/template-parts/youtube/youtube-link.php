<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
            <div class="aboutWork_wrapper">
            <div class="section_wrapper__title">
                <!--  Заголовок для блока  -->
                <?php if (ot_get_option( 'aboutWork_title')) {?>
                  <h2><?php echo ot_get_option( 'aboutWork_title' ); ?></h2>  
                <?php } ?>  
            
                <!-- Подзаголовок для блока  -->
                <div class="delimiter bl-center"> </div>
                <?php if (ot_get_option( 'aboutWork_subtitle')) {?>
                  <p><?php echo ot_get_option( 'aboutWork_subtitle' ); ?></p>  
                <?php } ?>  

              </div>
              <div class="aboutWork_content">    
                <?php
                     $aboutWork_list__item = ot_get_option('aboutWork_list__item');
                  ?>        

                 <div class="video_div">
                    <?php if (ot_get_option( 'aboutWork_video')) {?>                    
                      <div class="embed-video" data-source="youtube" data-video-url="<?php echo ot_get_option( 'aboutWork_video' ); ?>"></div>
                    <?php } ?>  
                     
                </div>   
            </div>  
            </div>
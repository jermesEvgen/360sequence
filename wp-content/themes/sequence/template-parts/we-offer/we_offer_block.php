<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<object   
  class="svg-bg"
  type="image/svg+xml"
  data="<?php bloginfo('template_url'); ?>/assets/img/svg-bg/svg-header-bg.svg"
  img src="<?php bloginfo('template_url'); ?>/assets/img/svg-bg/svg-header-bg.png">
</object>

   	<div class="weofferWrapper wrapper-block">
	 		<div class="weofferWrapper_content">
		      <!--  Заголовок для блока  -->
			    <?php if (ot_get_option( 'weofferIcons_title')) {?>
		  	      <h2><?php echo ot_get_option( 'weofferIcons_title' ); ?></h2>  
		        <?php } ?>	

	 			<!-- <h2>Что мы предлагаем для вас</h2> -->
	 			<div class="delimiter bl-center"> </div>

 				<?php
 			       $weofferIcons_list__item = ot_get_option('weofferIcons_list__item');
 			    ?>	

	 			<div class="weofferBlock">
        	    <?php 
             	    foreach ($weofferIcons_list__item as $weofferIcons) :
             	    $weofferIcons_img = $weofferIcons['weofferIcons_img'] ? $weofferIcons['weofferIcons_img'] : ''; 
             	    $weofferIcons_name = $weofferIcons['weofferIcons_name'] ? $weofferIcons['weofferIcons_name'] : ''; 
             	 ?>
	             	 <div class="weofferBlock_item">
	             	 	<img src="<?php echo $weofferIcons_img; ?>" alt="">
	             	 	<h3><?php echo $weofferIcons_name; ?> </h3>
	             	 </div>

             	 <?php 
             	 endforeach;
             	 ?>
	 			</div>
	 		</div>
	 	</div>	
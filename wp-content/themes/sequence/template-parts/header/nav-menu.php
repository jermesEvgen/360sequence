<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
   			  <div class="headerTop_nav">
                <!-- Десктопное меню & Мобильное меню -->
  			  		<nav class="menu ">
		  				<?php
		  			       $headerTop_list__item = ot_get_option('headerTop_list__item');
		  			    ?>	
			  			<ul class="menu__list">
                    	    <?php 
	                     	    foreach ($headerTop_list__item as $headerTop) :
	                     	    $headerTop_link__name = $headerTop['headerTop_link__name'] ? $headerTop['headerTop_link__name'] : ''; 
	                     	    $headerTop_link = $headerTop['headerTop_link'] ? $headerTop['headerTop_link'] : ''; 
	                     	 ?>

	                     	 <li class="menu__item">		                     
		                     	 	<a class="smoothscroll menu__link" href="#<?php echo $headerTop_link; ?>">
	                     	 		   <?php echo $headerTop_link__name; ?>
		                     	 	</a>		                    	    
	                     	 </li>

	                     	 <?php 
	                     	 endforeach;
	                     	 ?>
			  				<li class="menu_lastchild"></li>
                            <li class="li_headerTop_btn">
                                <?php if (ot_get_option( 'headerTop_bt__link' )) {?>
                                     <a href="<?php echo ot_get_option( 'headerTop_bt__link' ); ?>" class="headerTop_btn button button--moema button--inverted button--text-thick button--size-s myBtn" data-modal="myModal1"><?php echo ot_get_option( 'headerTop_bt__name' ); ?></a>
                                <?php } ?>  
                            </li>
			  			</ul>
    			  	</nav>
			  	</div>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
   		
   		     <!--  Камера на центральном экране -->
   			 	 <div class="headerBody_product__descr">
   		  	 	  	<ul>
   		  	 	  		<li>
   		  	 	  			
   		  	 	  		       <!--  Характеристики товара #1 -->
   		  	 	  				<?php if (ot_get_option( 'headerBody_product__technical-1' )) {?>
   		  	 	  		    	   <b><?php echo ot_get_option( 'headerBody_product__technical-1' ); ?></b>  
   		  	 	  		        <?php } ?>	
   		  	 	  		       <!--  Характеристики товара #1-a -->
   		  	 	  				<?php if (ot_get_option( 'headerBody_product__technical-1-a' )) {?>
   		  	 	  		    	   <span><?php echo ot_get_option( 'headerBody_product__technical-1-a' ); ?></span>  
   		  	 	  		        <?php } ?>	
   		  	 	  		</li>
   		  	 	  		<li>

   		  		               <!--  Характеристики товара #2 -->
   		  		        		<?php if (ot_get_option( 'headerBody_product__technical-2' )) {?>
   		  		            	   <b><?php echo ot_get_option( 'headerBody_product__technical-2' ); ?></b>  
   		  		                <?php } ?>	
   		  		               <!--  Характеристики товара #2-a -->
   		  		        		<?php if (ot_get_option( 'headerBody_product__technical-2-a' )) {?>
   		  		            	   <span><?php echo ot_get_option( 'headerBody_product__technical-2-a' ); ?></span>  
   		  		                <?php } ?>	
   		  		        </li>
   		  		        <li>
   		                       <!--  Характеристики товара #3 -->
   		                		<?php if (ot_get_option( 'headerBody_product__technical-3' )) {?>
   		                    	   <b><?php echo ot_get_option( 'headerBody_product__technical-3' ); ?></b>  
   		                        <?php } ?>	
   		                       <!--  Характеристики товара #3-a -->
   		                		<?php if (ot_get_option( 'headerBody_product__technical-3-a' )) {?>
   		                    	   <span><?php echo ot_get_option( 'headerBody_product__technical-3-a' ); ?></span>  
   		                        <?php } ?>	
   		                </li>
   		                <li>
   		                       <!--  Характеристики товара #4 -->
   		                		<?php if (ot_get_option( 'headerBody_product__technical-4' )) {?>
   		                    	   <b><?php echo ot_get_option( 'headerBody_product__technical-4' ); ?></b>  
   		                        <?php } ?>	
   		                       <!--  Характеристики товара #4-a -->
   		                		<?php if (ot_get_option( 'headerBody_product__technical-4-a' )) {?>
   		                    	   <span><?php echo ot_get_option( 'headerBody_product__technical-4-a' ); ?></span>  
   		                        <?php } ?>	
   		 	  		    </li>
   		 	  		    <li>
   			 	  		       <!--  Характеристики товара #5 -->
   			 	  				<?php if (ot_get_option( 'headerBody_product__technical-5' )) {?>
   			 	  		    	   <b><?php echo ot_get_option( 'headerBody_product__technical-5' ); ?></b>  
   			 	  		        <?php } ?>	
   			 	  		       <!--  Характеристики товара #5-a -->
   			 	  				<?php if (ot_get_option( 'headerBody_product__technical-5-a' )) {?>
   			 	  		    	   <span><?php echo ot_get_option( 'headerBody_product__technical-5-a' ); ?></span>  
   			 	  		        <?php } ?>	
   			 	  		 </li>
   			 	  		 <li>
   			  		 	       <!--  Цена товара -->
   			  		 			<?php if (ot_get_option( 'headerBody_product__price' )) {?>
   			  		 	    	   <?php echo ot_get_option( 'headerBody_product__price' ); ?>  
   			  		 	        <?php } ?>	
   			 	  		 	
   			 	  		 </li>

   		  	 	  	</ul>
   			 	</div>	

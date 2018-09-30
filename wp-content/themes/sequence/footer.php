<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sequence
 */

?>

	</div><!-- #content -->



	<!--  ===========
	section FOOTER
	============= -->
	
	<footer id="contact" >

		<div class="footerWrapp wrapper-block">
			<div class="footerContact" >
                    <div class="footerContact-wrapper" >
						<?php if (ot_get_option( 'footer_title' )) {?>
				    	   <h2><?php echo ot_get_option( 'footer_title' ); ?></h2>  
				        <?php } ?>	
						<?php
					       $footer_list__item = ot_get_option('footer_list__item');
					    ?>	
					    <ul class="footerContact-list">
				    	    <?php 
				         	    foreach ($footer_list__item as $footerInfo) :
				         	    $footer_span__txt = $footerInfo['footer_span__txt'] ? $footerInfo['footer_span__txt'] : ''; 
				         	    $footer_a__link = $footerInfo['footer_a__link'] ? $footerInfo['footer_a__link'] : ''; 
				         	    $footer_a__name = $footerInfo['footer_a__name'] ? $footerInfo['footer_a__name'] : ''; 
				         	 ?>
						    	<li class="footerContact-list__item">
						    		<span class="footerContact-list__item_span">
							    		<?php echo $footer_span__txt; ?>
                                    </span>
                                    <a href="#0" class="footerContact-list__item_link"> 
                                    	<?php echo $footer_a__name; ?>
                                    </a>
						    	</li>
				
				    		<?php 
				    		endforeach;
				    		?>
			    		</ul>
			    		<ul class="footerContact-list">
			    			<li class="footerContact-list__item">
			    				<span class="footerContact-list__item_span" >
	    							<?php if (ot_get_option( 'footer__subway_link' )) {?>
			    					<p class="youtube-link  footerContact-list__item_span" youtubeid="<?php echo ot_get_option( 'footer__subway_link' ); ?> " >
			    						  <!-- Маршрут от метро -->
			    						  <?php echo ot_get_option( 'footer__subway_title' ); ?>
			    						  <br><a href="#0" class="footerContact-list__item_link">  <i class="fab fa-youtube"></i></a>
			    					</p>
			    					<?php } ?>	
			    				</span>
			    			</li>
			    		</ul>
  
	    	        </div>
			</div>
			<div class="footerMap">
				<div class="map" id="map_canvas"></div>	
			</div>
		</div>

	      <div class="wrapper-block">
			<div class="footer-form">
	            <!-- form-footer -->
				<?php if ( ot_get_option( 'footer_form')){ ?>
			        <?php echo do_shortcode( ot_get_option( 'footer_form' )) ; ?>
				<?php } ?>

	            <div class="privacyPolicy">
	    			 <label class="sortByItems-dopservices__item ">
	    			    <input class="checkbox" type="checkbox" name="checkbox-test" checked="checked" required>
	    			    <span class="checkbox-custom"></span>
	    			    <span class="label">Нажимая отправить вы соглашаетесь с <a href="documents/politica_konfidencialnosti.pdf" target="_blank">Политикой конфиденциальности</a> обработки данных.</span>
			     	</label>
				</div>

			</div>
		  </div>

		<div class="footerDescription wrapper-block" >
	       <!--  footer logo  -->
			<span>
				
				<?php if (ot_get_option( 'footer_copy__logo' )) {?>
					<img src="<?php echo ot_get_option( 'footer_copy__logo' ); ?>" alt="">
		        <?php } ?>

        		<?php if (ot_get_option( 'footer_descr' )) {?>
        			<?php echo ot_get_option( 'footer_descr' ); ?>
                <?php } ?>	
					
		   </span>
			<p>Все права защищены  2018 &copy;	ООО "Адаптив" </p>
		</div>

    </footer>


<?php wp_footer(); ?>

Запросов <?php echo get_num_queries(); ?>, за <?php timer_stop(1); ?> секунды.
</body>
</html>

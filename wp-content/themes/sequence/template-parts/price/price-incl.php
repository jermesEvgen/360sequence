<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="priceCentralBlock">			
<div class="priceLeftBlock">       


<div class="priceLeftBlock_slider__img"  data-aos-easing="ease-in-out-quart"  data-aos="fade-up-left" data-aos-duration="400" data-aos-once="true">
<img src="<?php echo get_template_directory_uri() ?>/assets/img/example-goods-img2.png">
</div>     

<div class="priceLeftBlock_wraper">
			<div class="priceLeftBlock_title">
			    <!--  Заголовок для блока  -->
			    <?php if (ot_get_option( 'priceCalculator_title')) {?>
		  	      <h2><?php echo ot_get_option( 'priceCalculator_title' ); ?></h2>  
		        <?php } ?>	
        		<!-- Подзаголовок для блока  -->
        		<!-- <div class="delimiter bl-center"> </div> -->
    		    <?php if (ot_get_option( 'priceCalculator_subtitle')) {?>
    	  	      <h5><?php echo ot_get_option( 'priceCalculator_subtitle' ); ?></h5>  
    	      <?php } ?>				    
			</div>

			<div class="priceLeftBlock_slider"> <!-- Тут слайдер -->   					
				<?php
			       $priceCalculator_list__item = ot_get_option('priceCalculator_list__item');
			    ?>	    
				<div class="owl-carousel owl-theme"> 

			    <?php 
		     	    foreach ($priceCalculator_list__item as $priceCalculator) :
		     	    $priceCalculator_text = $priceCalculator['priceCalculator_text'] ? $priceCalculator['priceCalculator_text'] : ''; 
		     	 ?>
					<div class="priceLeftBlock_slider__item">
						<h5><?php echo $priceCalculator_text; ?></h5>
					</div>
				<?php 
				endforeach;
				?>

		      	</div>
			</div><!-- Тут конец слайдера -->
	</div>

</div>
<!-- 1 колонка с селектами  -->
<div class="priceCentralBlock_select" >

<!-- Тип изделия -->
<div class="sortByItems">
<?php
   $typeProduct_list__item = ot_get_option('typeProduct_list__item');
?>	
<?php if (ot_get_option( 'type_select__name')) {?>
     <label class="sortByItems__select"><?php echo ot_get_option( 'type_select__name' ); ?></label>  
<?php } ?>	

<select name="selected" class="select-items " id="matirial">
	<!-- <option disabled selected>Выберите материал</option> -->

    <?php 
 	    foreach ($typeProduct_list__item as $typeProduct) :
 	    $typeProduct_option__txt = $typeProduct['typeProduct_option__txt'] ? $typeProduct['typeProduct_option__txt'] : ''; 
 	    $typeProduct_option__val = $typeProduct['typeProduct_option__val'] ? $typeProduct['typeProduct_option__val'] : ''; 
 	 ?>
	    <option value="<?php echo $typeProduct_option__val; ?>"><?php echo $typeProduct_option__txt; ?> </option>
	<?php 

	endforeach;
	?>
</select>
</div>



<!-- Формат объекта съёмки -->
<div class="sortByItems">
<?php
   $formatProduct_list__item = ot_get_option('formatProduct_list__item');
?>	
<?php if (ot_get_option( 'format_select__name')) {?>
      <label class="sortByItems__select"><?php echo ot_get_option( 'format_select__name' ); ?></label>  
<?php } ?>

<select name="selected" class="select-items" id="format">
	<!-- <option disabled selected>Выберите цвет </option> -->
    <?php 
 	    foreach ($formatProduct_list__item as $formatProduct) :
 	    $formatProduct_option__txt = $formatProduct['formatProduct_option__txt'] ? $formatProduct['formatProduct_option__txt'] : ''; 
 	    $formatProduct_option__val = $formatProduct['formatProduct_option__val'] ? $formatProduct['formatProduct_option__val'] : ''; 
 	 ?>
	     <option value="<?php echo $formatProduct_option__val; ?>" ><?php echo $formatProduct_option__txt; ?> </option>
	<?php 
	endforeach;
	?>
</select>
</div>



<!-- Цвет изделия -->
<div class="sortByItems">
<?php
   $colorProduct_list__item = ot_get_option('colorProduct_list__item');
?>	
<?php if (ot_get_option( 'color_select__name')) {?>
      <label class="sortByItems__select"><?php echo ot_get_option( 'color_select__name' ); ?></label>  
<?php } ?>

<select name="selected" class="select-items" id="color">
	<!-- <option disabled selected>Выберите цвет </option> -->
    <?php 
 	    foreach ($colorProduct_list__item as $colorProduct) :
 	    $colorProduct_option__txt = $colorProduct['colorProduct_option__txt'] ? $colorProduct['colorProduct_option__txt'] : ''; 
 	    $colorProduct_option__val = $colorProduct['colorProduct_option__val'] ? $colorProduct['colorProduct_option__val'] : ''; 
 	 ?>
	     <option value="<?php echo $colorProduct_option__val; ?>" ><?php echo $colorProduct_option__txt; ?> </option>
	<?php 
	endforeach;
	?>
</select>
</div>

<!-- Колличество изделий -->
<div class="sortByItems" >
	<label class="sortByItems__select">Колличество изделий</label>
	<input  class="select-items" type="number" value="10" min="0" max="10000" step="1" id="number" />
</div>

<!-- Где будет проходить съемка -->
<div class="sortByItems">
<?php
   $radio_list__item = ot_get_option('radio_list__item');
?>	
<?php if (ot_get_option( 'radio_select__name')) {?>
       <label class="sortByItems__select"><?php echo ot_get_option( 'radio_select__name' ); ?></label>  
<?php } ?>
<select name="selected" class="select-items" id="invit">
    <?php 
 	    foreach ($radio_list__item as $radioList) :
 	    $radio_option__txt = $radioList['radio_option__txt'] ? $radioList['radio_option__txt'] : ''; 
 	    $radio_option__val = $radioList['radio_option__val'] ? $radioList['radio_option__val'] : ''; 
 	 ?>   	               		
		   <option value="<?php echo $radio_option__val; ?>"><?php echo $radio_option__txt; ?></option>
	
	<?php 
		endforeach;
	?>
</select>
</div>
</div>

<!-- 2 колонка с селектами  -->
<div class="priceCentralBlock_select">	   

<!-- Частота кадров -->
<div class="sortByItems">
	<?php
	$frameRate_list__item = ot_get_option('frameRate_list__item');
	?>  
	<?php if (ot_get_option( 'frameRate_select__name')) {?>
	<label class="sortByItems__select"><?php echo ot_get_option( 'frameRate_select__name' ); ?></label>  
	<?php } ?>


		<select name="selected" class="select-items" id="frequency">
			<!-- <option disabled selected>Выберети  кол-во</option> -->

			<?php 
			  foreach ($frameRate_list__item as $frameRate) :
			  $frameRate_option__txt = $frameRate['frameRate_option__txt'] ? $frameRate['frameRate_option__txt'] : ''; 
			  $frameRate_option__val = $frameRate['frameRate_option__val'] ? $frameRate['frameRate_option__val'] : ''; 
			?>
			<option value="<?php echo $frameRate_option__val; ?>"><?php echo $frameRate_option__txt; ?></option>

			<?php 
				endforeach;
			?>
		</select>

</div>


<!--  ДОполнительные услугм  -->


<div class="sortByItems sortByItems-dopservices dopservices" style="display: none;">
	<span class="dopservices__title">Опции заказа</span>
	
	<label class="sortByItems-dopservices__item">
	    <input class="checkbox" type="checkbox" name="checkbox-test">
	    <span class="checkbox-custom"></span>
	    <span class="label">Дополнительная анимация</span>
	</label>	     	
	<label class="sortByItems-dopservices__item">
	    <input class="checkbox" type="checkbox" name="checkbox-test">
	    <span class="checkbox-custom"></span>
	    <span class="label">Выездная съемка</span>
	</label>
	<label class="sortByItems-dopservices__item">
	    <input class="checkbox" type="checkbox" name="checkbox-test">
	    <span class="checkbox-custom"></span>
	    <span class="label">И еще что-то</span>
	</label>
</div>

<!-- Рассчитать стоимость -->


<div class="sortByItems priceCentralBlock_select__item ">
	<label style="color: transparent;" class="sortByItems__select"><?php echo ot_get_option( 'type_select__name' ); ?></label>  
	<input  type="submit" value="Рассчитать" id="sendButon" >
</div>



<div class="data-output">
	<div class="notice"></div> <!-- Выводим уведомление если выполнено условие --> 
	<div class="sale-length" id="sale-length"></div>
	<div class="total-cost totalAmount_price" id="total-cost">Итого: 4120 руб </div>	
	<div class="notice-matirial" id="notice-matirial"></div>
	<div class="notice-invit" id="notice-invit"></div>
</div>



<span class="totalAmount_content">
<?php if (ot_get_option( 'totalAmount_text')) {?>
      <!-- <i class="material-icons">format_align_left</i> -->
      <p><?php echo ot_get_option( 'totalAmount_text' ); ?></p>  
<?php } ?>	
</span>
</div>

	<a style="display: none;" class="download-price" href="<?php echo get_template_directory_uri() ?>/doc/FG_media2016.pdf" target="_blank">
	<img src="<?php echo get_template_directory_uri() ?>/img/icon-pdf.png" alt="">
	Cкачть полный прайс
	</a>

</div>
</div>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



/* Начало контейнера */
add_action( 'seq_headerBody_parts', 'seq_secHeaderBody_start', 10 );
function seq_secHeaderBody_start() {
	?>			
		<div class="headerBody_wrapper wrapper-block">
    <?php
}

/* Начало контейнера */
add_action( 'seq_headerBody_parts', 'seq_headerBody_product_start', 20 );
function seq_headerBody_product_start() {
	?>	
		<div class="headerBody_product">
    <?php
}

/* Заголовок  для картинки */
add_action( 'seq_headerBody_parts', 'headerBody_product__name', 30 );
function headerBody_product__name() {
	get_template_part( 'template-parts/header-body/headerBody_product__name' );
}

/* Сама 3d картинка  */
add_action( 'seq_headerBody_parts', 'headerBody_product__3dimg', 40 );
function headerBody_product__3dimg() {
	get_template_part( 'template-parts/header-body/headerBody_product__3dimg' );
}

/* Описание продукта  */
add_action( 'seq_headerBody_parts', 'headerBody_product__descr', 50 );
function headerBody_product__descr() {
	get_template_part( 'template-parts/header-body/headerBody_product__descr' );
}

/* Конец контейнера */
add_action( 'seq_headerBody_parts', 'seq_headerBody_product_end', 55 );
function seq_headerBody_product_end() {
	?>		
		</div>
    <?php
}

/* Начало контейнера (описание продукта) */
add_action( 'seq_headerBody_parts', 'headerBody_descr_start', 60 );
function headerBody_descr_start() {
	?>	
		<div class="headerBody_descr">
    <?php
}

/* Начало контейнера (Текстовые заголовки) */
add_action( 'seq_headerBody_parts', 'headerBody_aside_start', 70 );
function headerBody_aside_start() {
	?>	
   		<aside>
    <?php
}
/*Описание продукта */
add_action( 'seq_headerBody_parts', 'aside_content', 80 );
function aside_content() {
	get_template_part( 'template-parts/header-body/aside_content' );
}

/* Мобильное изображение продукта  и еще один подзаголовок  */
add_action( 'seq_headerBody_parts', 'mobile_product', 90 );
function mobile_product() {
	get_template_part( 'template-parts/header-body/mobile_product' );
}

/* Конец контейнера (Текстовые заголовки) */
add_action( 'seq_headerBody_parts', 'headerBody_aside_end', 100 );
function headerBody_aside_end() {
	?>	
   		</aside>
    <?php
}

/* Список направлений  */
add_action( 'seq_headerBody_parts', 'item_show_directions', 110 );
function item_show_directions() {
	get_template_part( 'template-parts/header-body/item_show_directions' );
}


/* Кнопки вызова событий  плюс описание */
add_action( 'seq_headerBody_parts', 'headerBody_btn_cta', 120 );
function headerBody_btn_cta() {
	get_template_part( 'template-parts/header-body/headerBody_btn_cta' );
}

/* Конец контейнера (описание продукта) */
add_action( 'seq_headerBody_parts', 'headerBody_descr_end', 130 );
function headerBody_descr_end() {
	?>	
		</div>
    <?php
}

/* Конец контейнера */
add_action( 'seq_headerBody_parts', 'seq_secHeaderBody_end', 140 );
function seq_secHeaderBody_end() {
	?>			
		</div>
    <?php
}






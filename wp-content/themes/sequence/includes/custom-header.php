<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



/* Начало контейнера */
add_action( 'seq_header_parts', 'seq_sectionHeader_start', 10 );
function seq_sectionHeader_start() {
	?>			
	    <header id="header" >
	    	<div class="cd-auto-hide-header ">	
				<div class="headerTop wrapper-block">
    <?php
}

/* Тут конектим логотип */
add_action( 'seq_header_parts', 'seq_header_logo', 10 );
function seq_header_logo() {
	get_template_part( 'template-parts/header/logo' );
}

/* Начало контейнера левый блок в header */
add_action( 'seq_header_parts', 'seq_blkLeft_start', 20 );
function seq_blkLeft_start() {
	?>
		<div class="blk_left">
    <?php
}

/* Тут у нас меню  */
add_action( 'seq_header_parts', 'seq_header_nav', 30 );
function seq_header_nav() {
	get_template_part( 'template-parts/header/nav-menu' );
}

/* Тут кнопка вызова формы обратной связи в модальном окне  */
add_action( 'seq_header_parts', 'seq_header_btn', 40 );
function seq_header_btn() {
	get_template_part( 'template-parts/header/btn-header' );
}

/* А тут конец контейнера левый блок в header */
add_action( 'seq_header_parts', 'seq_blkLeft_end', 50 );
function seq_blkLeft_end() {
	?>
		</div>
    <?php
}
/* Начало контейнера правый блок в header */
add_action( 'seq_header_parts', 'seq_blКRight_start', 60 );
function seq_blКRight_start() {
	?>
    	<div class="blk_right">
    <?php
}
/* Тут указан город Москва   */
add_action( 'seq_header_parts', 'seq_header_geoCity', 70 );
function seq_header_geoCity() {
	get_template_part( 'template-parts/header/geo-city' );
}
/* Тут телефон по которому звонить  */
add_action( 'seq_header_parts', 'seq_header_phone', 80 );
function seq_header_phone() {
	get_template_part( 'template-parts/header/header-phone' );
}

/* Иконка телеграмма */
add_action( 'seq_header_parts', 'seq_header_telegram', 90 );
function seq_header_telegram() {
	get_template_part( 'template-parts/header/telegram-plugin' );
}

/* icons hamburger */
add_action( 'seq_header_parts', 'seq_header_hamburger', 100 );
function seq_header_hamburger() {
	get_template_part( 'template-parts/header/hamburger' );
}
/* Конец контейнера правый блок в header */
add_action( 'seq_header_parts', 'seq_blКRight_end', 110 );
function seq_blКRight_end() {
	?>
		</div>
    <?php
}
/* Конец контейнера  */
add_action( 'seq_header_parts', 'seq_sectionHeader_end', 120 );
function seq_sectionHeader_end() {
	?>
	    	  </div>
	    	</div>    	  
	    </header>
    <?php
}
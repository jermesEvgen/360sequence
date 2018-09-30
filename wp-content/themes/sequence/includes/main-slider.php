<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* Начало Слайдера*/
add_action( 'seq_slider_parts', 'seq_slider_start', 10 );
function seq_slider_start() {
	?>			
	  <div class="mainSlider_wrapper ">
    <?php
}

/* Заголовок слайдер */
add_action( 'seq_slider_parts', 'seq_slider_title', 20 );
function seq_slider_title() {
	get_template_part( 'template-parts/slider/slider-title' );
}

/* Тут сам слайдер */
add_action( 'seq_slider_parts', 'seq_slider_body', 30 );
function seq_slider_body() {
	get_template_part( 'template-parts/slider/slider-body' );
}

/* Конец Слайдера */
add_action( 'seq_slider_parts', 'seq_slider_end', 40 );
function seq_slider_end() {
	?>
		</div>
    <?php
}
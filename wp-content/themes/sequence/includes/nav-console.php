<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* Тут заголовок для секции */
add_action( 'seq_navPlayer_parts', 'seq_navPlayer_title', 10 );
function seq_navPlayer_title() {
	get_template_part( 'template-parts/player/seq_navPlayer_title' );
}

/* Начало контейнера */
add_action( 'seq_navPlayer_parts', 'seq_navPlayer_start', 20 );
function seq_navPlayer_start() {
	?>			
	   <div class="navigationConsole_wrapper wrapper-block">
    <?php
}

/* Левый блок  */
add_action( 'seq_navPlayer_parts', 'seq_navPlayer_left', 30 );
function seq_navPlayer_left() {
	get_template_part( 'template-parts/player/seq_navPlayer_left' );
}

/* Правый блок  */
add_action( 'seq_navPlayer_parts', 'seq_navPlayer_right', 40 );
function seq_navPlayer_right() {
	get_template_part( 'template-parts/player/seq_navPlayer_right' );
}

/* Конец контейнера */
add_action( 'seq_navPlayer_parts', 'seq_navPlayer_end', 50 );
function seq_navPlayer_end() {
	?>			
	  </div>
    <?php
}


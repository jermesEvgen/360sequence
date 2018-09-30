<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



/* Начало контейнера */
add_action( 'seq_yourOption_parts', 'seq_yourOption_start', 10 );
function seq_yourOption_start() {
	?>			
		<div class="yourOption_wrapper wrapper-block">
    <?php
}


/* Заголовок для секции */
add_action( 'seq_yourOption_parts', 'seq_yourOption_title', 20 );
function seq_yourOption_title() {
	get_template_part( 'template-parts/your-option/seq_yourOption_title' );
}



/* Сама секция */
add_action( 'seq_yourOption_parts', 'seq_yourOption_body', 30 );
function seq_yourOption_body() {
	get_template_part( 'template-parts/your-option/seq_yourOption_body' );
}


/* Конец контейнера */
add_action( 'seq_yourOption_parts', 'seq_yourOption_end', 70 );
function seq_yourOption_end() {
	?>			
		</div>
    <?php
}

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* Начало секции, обертка для блока */
add_action( 'seq_36Frame_parts', 'seq_36Frame_start', 10 );
function seq_36Frame_start() {
	?>			
	  <div class="sequence36Frame_wrapper wrapper-block">
    <?php
}
/* Это контентная часть блока  */
add_action( 'seq_36Frame_parts', 'seq_36Frame_content', 30 );
function seq_36Frame_content() {
	get_template_part( 'template-parts/sequence-36Frame/seq_36Frame_content' );
}

/* Конец секции, обертка для блока */
add_action( 'seq_36Frame_parts', 'seq_36Frame_end', 40 );
function seq_36Frame_end() {
	?>			
	   </div>
    <?php
}

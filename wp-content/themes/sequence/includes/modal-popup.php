<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* Модальное окно  */
add_action( 'seq_modal_parts', 'seq_modal_content', 10 );
function seq_modal_content() {
	get_template_part( 'template-parts/modals-popup/modal-popUp' );
}

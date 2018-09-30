<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* Тут весь блок */
add_action( 'seq_custumer_parts', 'seq_custumer_content', 10 );
function seq_custumer_content() {
	get_template_part( 'template-parts/custumer/custmer-block' );
}

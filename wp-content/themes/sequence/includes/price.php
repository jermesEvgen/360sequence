<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* Тут заголовки */
add_action( 'seq_price_parts', 'seq_price_content', 10 );
function seq_price_content() {
	get_template_part( 'template-parts/price/price-incl' );
}


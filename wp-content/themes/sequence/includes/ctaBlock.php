<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* Тут вусь контент */
add_action( 'seq_ctaBlock_parts', 'seq_ctaBlock_content', 10 );
function seq_ctaBlock_content() {
	get_template_part( 'template-parts/ctaBlock/ctaBlock-content' );
}

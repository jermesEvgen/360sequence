<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* Тут конектим логотип */
add_action( 'seq_weOffer_parts', 'seq_offer_content', 20 );
function seq_offer_content() {
	get_template_part( 'template-parts/we-offer/we_offer_block' );
}

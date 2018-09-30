<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* Тут заголовки */
add_action( 'seq_catalog_parts', 'seq_catalog_title', 10 );
function seq_catalog_title() {
	get_template_part( 'template-parts/catalog/catalog-title' );
}

/* Тут табы */
add_action( 'seq_catalog_parts', 'seq_catalog_tab', 20 );
function seq_catalog_tab() {
	get_template_part( 'template-parts/catalog/catalog-tab' );
}

/* Тут  фото */
add_action( 'seq_catalog_parts', 'seq_catalog_photo', 30 );
function seq_catalog_photo() {
	get_template_part( 'template-parts/catalog/catalog-photo' );
}


/* Тут  GIF */
add_action( 'seq_catalog_parts', 'seq_catalog_gif', 40 );
function seq_catalog_gif() {
	get_template_part( 'template-parts/catalog/catalog-gif' );
}


/* Тут  VIDEO */
add_action( 'seq_catalog_parts', 'seq_catalog_video', 50 );
function seq_catalog_video() {
	get_template_part( 'template-parts/catalog/catalog-video' );
}

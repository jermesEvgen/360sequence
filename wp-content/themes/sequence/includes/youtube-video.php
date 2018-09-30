<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/* Тут Ютуб контент */
add_action( 'seq_youtube_parts', 'seq_youtube_content', 20 );
function seq_youtube_content() {
	get_template_part( 'template-parts/youtube/youtube-link' );
}


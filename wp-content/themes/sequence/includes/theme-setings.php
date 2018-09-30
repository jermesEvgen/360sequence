<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



add_action( 'after_setup_theme', 'sequence_setup' );

if ( ! function_exists( 'sequence_setup' ) ) :
	function sequence_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	}
endif;



add_action( 'after_setup_theme', 'sequence_setup', 0 );
function sequence_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sequence_content_width', 640 );
}






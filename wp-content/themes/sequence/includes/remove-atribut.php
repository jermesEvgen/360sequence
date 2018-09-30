<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
******* Удаление атрибутов type так как они уже устаревшие
**/

add_filter('style_loader_tag', 'clean_style_tag');
function clean_style_tag($src) {
    return str_replace("type='text/css'", '', $src);
}

add_filter('script_loader_tag', 'clean_script_tag');
function clean_script_tag($src) {
    return str_replace("type='text/javascript'", '', $src);
}
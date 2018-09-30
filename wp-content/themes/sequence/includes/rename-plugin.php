<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
******* Поменять название плагина   
**/

add_filter(  'gettext',  'change_post_name'  );
add_filter(  'ngettext',  'change_post_name'  );
    function change_post_name( $translated ) {
      $translated = str_ireplace(  'All in One SEO',  'СЕО заголовки',  $translated );
      $translated = str_ireplace(  'Contact Form 7',  'Формы обратной связи',  $translated );
      $translated = str_ireplace(  'Записи',  'Социальные сети',  $translated );
      $translated = str_ireplace(  'WP Security',  'Антивирус',  $translated );
      $translated = str_ireplace(  'Contact Forms',  'Формы БД',  $translated );
      return $translated;
    }

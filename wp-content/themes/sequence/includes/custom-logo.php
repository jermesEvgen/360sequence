<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


    /**
    ******* Установка своего логотипа  на входе в админ-панель 
    **/
    function my_custom_login_logo(){
     echo '<style type="text/css">
     h1 a { background-image:url('.get_template_directory_uri('template_directory').'../includes/assets/img/logo.png) !important; }
     </style>';
     }
     add_action('login_head', 'my_custom_login_logo');

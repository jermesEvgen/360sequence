<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
******* Удаление пунктов меню в админ-панели
**/
add_action('admin_menu', 'remove_menus');
   function remove_menus(){
    global $menu;
    $restricted = array(
          __('Dashboard'),
          __('Posts'),
          // __('Media'),
          __('Links'),
          // __('Pages'),
          __('Appearance'),
          __('Tools'),
          __('Users'),
          // __('Settings'),
          __('Comments'),
          // __('Plugins')
    );
    end ($menu);
    while (prev($menu)){
        $value = explode(' ', $menu[key($menu)][0]);
        if( in_array( ($value[0] != NULL ? $value[0] : "") , $restricted ) ){
            unset($menu[key($menu)]);
        }
    }
};

add_action( 'admin_menu', 'xelly_remove_menu_items' ); 
function xelly_remove_menu_items() {
    // тут мы укахываем ярлык пункты который удаляем.
    remove_menu_page('edit.php'); // Удаляем пункт "Записи"
}

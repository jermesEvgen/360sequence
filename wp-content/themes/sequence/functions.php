<?php
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_true' );
/**
 * Required: include OptionTree plugin.
 */
// Этот фильтр меняет расположение настроек Темы 
add_filter( 'ot_theme_options_parent_slug', 'theme_options_parent',20 );
function theme_options_parent($parent ) {
    $parent = '';
    return $parent;
}
require( trailingslashit( get_template_directory() ) . '/includes/option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . '/includes/option-tree-functions/theme-options.php');
require( trailingslashit( get_template_directory() ) . '/includes/option-tree-functions/meta-boxes.php');



/**
 *  Подключение основных настроек темы в файле theme-settings.php
 */
require get_template_directory() . '/includes/theme-setings.php';
/**
 *  Подключение виджетоа в файл widget-area.php
 */
require get_template_directory() . '/includes/widget-area.php';
/**
 *  Подключение  основных стилей и скриптов  в файл enqueue-script-style.php
 */
require get_template_directory() . '/includes/enqueue-script-style.php';

/**
******* Удаление атрибутов type так как они уже устаревшие
**/
require get_template_directory() . '/includes/remove-atribut.php';

/**
******* Удаление пунктов меню в админ-панели
**/
require get_template_directory() . '/includes/remove-menu-admin.php';

/**
******* Поменять название плагина   
**/
require get_template_directory() . '/includes/rename-plugin.php';

/**
******* Установка своего логотипа  на входе в админ-панель 
**/
require get_template_directory() . '/includes/custom-logo.php';

/**
******* Удаляем обертки у  Contact form 7    
**/
require get_template_directory() . '/includes/remove-wrap-wpcf7.php';





/* -----------------------Custom create folders & files--------*/

/**
 * Implement the Custom Header feature. (Header)
 */
require get_template_directory() . '/includes/custom-header.php';
/**
 * Implement the section  (HeaderBody)
 */
require get_template_directory() . '/includes/header-body.php';
/**
 * Implement the section  (WEOFFER)
 */
require get_template_directory() . '/includes/we-offer.php';
/**
 * Implement the section  (MainSlider)
 */
require get_template_directory() . '/includes/main-slider.php';
/**
 * Implement the section  (sequence36Frame)
 */
require get_template_directory() . '/includes/sequence-36Frame.php';
/**
 * Implement the section (navigationConsole )
 */
require get_template_directory() . '/includes/nav-console.php';

/**
 * Implement the section (YOUR OPTION)
 */
require get_template_directory() . '/includes/your-option.php';

/**
 * Implement the section ( catalog)
 */
require get_template_directory() . '/includes/catalog.php';
/**
 * Implement the section (youtube)
 */
require get_template_directory() . '/includes/youtube-video.php';

/**
 * Implement the section (price calculator)
 */
require get_template_directory() . '/includes/price.php';

/**
 * Implement the section (custumer)
 */
require get_template_directory() . '/includes/custumer.php';

/**
 * Implement the section (price ctaBlock)
 */
require get_template_directory() . '/includes/ctaBlock.php';

/**
 * Implement the section (Modal Window)
 */
require get_template_directory() . '/includes/modal-popup.php';




/*------------------------------------------------------------*/



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 *Вспомогательные функции 
 */
require get_template_directory() . '/includes/helpers.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
  require get_template_directory() . '/includes/jetpack.php';
}



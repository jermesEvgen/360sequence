<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'theme-text-domain' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>'
    ),
    'sections'        => array( 




/* ==========
Шапка сайта 
------------
id: headerTop
============*/
    array(
       'id'          => 'headerTop',
       'title'       => 'Шапка сайта'
    ),

/* ==========
Верхний блок 1 
------------
id: headerBody
============*/
    array(
       'id'          => 'headerBody',
       'title'       => 'Верхний блок'
    ),
/* ==========
Главный слайдер 
------------
id: mainSlider
============*/
    array(
       'id'          => 'mainSlider',
       'title'       => 'Главный слайдер'
    ),

/* ==========
Что мы предланаем
для вас  
------------
id: weofferIcons
============*/
    array(
       'id'          => 'weofferIcons',
       'title'       => 'Блок с предложениями'
    ),

/* ==========
Управление 
навигацией 
секвенции  
------------
id: navConsole
============*/
    array(
       'id'          => 'navConsole',
       'title'       => 'Консоль навигации'
    ),


/* ==========
Выберите ваш вариант 
------------
id: yourOption
============*/
    array(
       'id'          => 'yourOption',
       'title'       => 'Примеры секвенций'
    ),


/* ==========
Секвенция из 
36 фотограффий  
------------
id: sequence36Frame
============*/
    array(
       'id'          => 'sequence36Frame',
       'title'       => 'Разобранная секвенция'
    ),


/* ==========
Каталог 3d 
картинок 

------------
id: explGoods
============*/
    array(
       'id'          => 'explGoods',
       'title'       => 'Каталог'
    ),


/* ==========
Как мы работаем 
------------
id: aboutWork
============*/
    array(
       'id'          => 'aboutWork',
       'title'       => 'Как мы работаем'
    ),



/* ==========
Калькулятор, расчета 
стоимости заказа 
------------
id: priceCalculator
============*/
    array(
       'id'          => 'priceCalculator',
       'title'       => 'Калькулятор'
    ),



/* ==========
Наши клиенты 
------------
id: customers
============*/
    array(
       'id'          => 'customers',
       'title'       => 'Клиенты'
    ),


/* ==========
Блок Отсавить заявку 
------------
id: ctaBlock
============*/
    array(
       'id'          => 'ctaBlock',
       'title'       => 'Pack Shot'
    ),

/* ==========
Footer 
------------
id: footer
============*/
    array(
       'id'          => 'footer',
       'title'       => 'Подвал сайта'
    ),




















/* ==========
Примеры 
настроек option themes  
------------
id: sequence36Frame
============*/
    array(
       'id'          => 'option_types',
       'title'       => 'Настройки темы '
    )



    ),
    'settings'        => array( 
/* ==========
Верхнее меню 
------------
id: headerTop
============*/



    /* Меню */
    array(
      'id'          => 'headerTop_menu',
      'label'       => 'Верхнее меню',
      'desc'        => '',
      'type'        => 'tab',
      'section'     => 'headerTop',
    ),

    /* Логотип */
    array(
      'id'          => 'headerTop_logo-main',
      'label'       => 'Логотип основной',
      'desc'        => '',
      'type'        => 'upload',
      'section'     => 'headerTop',
    ),
    array(
      'id'          => 'headerTop_logo-secondary',
      'label'       => 'Логотип основной',
      'desc'        => '',
      'type'        => 'upload',
      'section'     => 'headerTop',
    ),

    array(
      'id'          => 'headerTop_list__item',
      'label'       => 'Меню',
      'desc'        => '',
      'std'         => '',
      'type'        => 'list-item',
      'section'     => 'headerTop',
      'rows'        => '',
      'post_type'   => '',
      'taxonomy'    => '',
      'min_max_step'=> '',
      'class'       => '',
      'condition'   => '',
      'operator'    => 'and',
      'settings'    => array(     
          array(
            'id'          => 'headerTop_link__name',
            'label'       => 'Название меню',
            'desc'        => 'Укажите название для меню ',
            'type'        => 'text',
            'section'     => 'headerTop',
            ),       
           array(
             'id'          => 'headerTop_link',
             'label'       => 'Ссылка меню',
             'desc'        => 'Укажите ссылку для меню ',
             'type'        => 'text',
             'section'     => 'headerTop',
            ),
          )
        ),

    /* Кнопка */
    array(
      'id'          => 'headerTop_bt',
      'label'       => 'Кнопка',
      'desc'        => 'Заказать съемку',
      'type'        => 'tab',
      'section'     => 'headerTop',
    ),
    array(
      'id'          => 'headerTop_bt__name',
      'label'       => 'Название кнопки',
      'desc'        => 'Укажите название которое будет на кнопке',
      'type'        => 'text',
      'section'     => 'headerTop',
    ),
    array(
      'id'          => 'headerTop_bt__link',
      'label'       => 'Ссылка кнопки',
      'desc'        => 'Укажите ссылку на какой раздел будет вести кнопка',
      'type'        => 'text',
      'section'     => 'headerTop',
    ),


   /* Форма обратной связи */
    array(
      'id'          => 'headerTop_form',
      'label'       => 'Форма обратной связи',
      'desc'        => 'Вставьте Шорт Код',
      'type'        => 'text',
      'section'     => 'headerTop',
    ),


    /* Телефоны */
    array(
      'id'          => 'phone_tab',
      'label'       => 'Телефон',
      'desc'        => 'Напишите телефон',
      'type'        => 'tab',
      'section'     => 'headerTop',
    ),
          
    array(
      'id'          => 'phone_link',
      'label'       => 'Ссылка номера',
      'desc'        => 'Например +79001233224 ',
      'type'        => 'text',
      'section'     => 'headerTop',
    ),
    array(
      'id'          => 'phone_number',
      'label'       => 'Формат номера',
      'desc'        => 'Например +7(900)123-32-24 виден на сайте',
      'type'        => 'text',
      'section'     => 'headerTop',
    ),


    /* Tellegramm chat */
    array(
      'id'          => 'socialChat_tab',
      'label'       => 'Телеграм чат',
      'desc'        => 'чат',
      'type'        => 'tab',
      'section'     => 'headerTop',
    ),
          
    array(
      'id'          => 'socialChat_upload',
      'label'       => 'Иконка ',
      'desc'        => 'Загрузите картинку ',
      'type'        => 'upload',
      'section'     => 'headerTop',
    ),
    array(
      'id'          => 'socialChat_link',
      'label'       => 'ссылка на ресурс',
      'desc'        => 'Установите ссылку на ресурс ',
      'type'        => 'text',
      'section'     => 'headerTop',
    ),


/* ==========
Верхний блок 1 
------------
id: headerBody
============*/

    /* блок с карточкой товара  */
    array(
       'id'          => 'headerBody_tab',
       'label'       => 'Секвенция',
       'desc'        => 'Картинка секвенция товара',
       'type'        => 'tab',
       'section'     => 'headerBody',
    ),
     
    /* блок с карточкой товара  */
    array(
       'id'          => 'headerBody_seq',
       'label'       => 'Секвенция',
       'desc'        => 'Загрузить Шорт Код картинки',
       'type'        => 'text',
       'section'     => 'headerBody',
    ),
    /* Название товара */
    array(
       'id'          => 'headerBody_product__name',
       'label'       => 'Название товара ',
       'desc'        => 'Напишите название товара',
       'type'        => 'text',
       'section'     => 'headerBody',
    ),
    /* Характеристики товара #1*/
    array(
        'id'          => 'headerBody_product__technical-1',
        'label'       => 'Характеристики товара ',
        'desc'        => 'Напишите характеристики товара #1',
        'type'        => 'text',
        'section'     => 'headerBody',
    ),
    /* Характеристики товара #1-a*/
    array(
         'id'          => 'headerBody_product__technical-1-a',
         'label'       => 'Характеристики товара ',
         'desc'        => 'Напишите характеристики товара #1-a',
         'type'        => 'text',
         'section'     => 'headerBody',
    ),
    /* Характеристики товара #2*/
    array(
          'id'          => 'headerBody_product__technical-2',
          'label'       => 'Характеристики товара ',
          'desc'        => 'Напишите характеристики товара #2',
          'type'        => 'text',
          'section'     => 'headerBody',
    ),
    /* Характеристики товара #2-a*/
    array(
          'id'          => 'headerBody_product__technical-2-a',
          'label'       => 'Характеристики товара ',
          'desc'        => 'Напишите характеристики товара #2-a',
          'type'        => 'text',
          'section'     => 'headerBody',
    ),
    /* Характеристики товара #3*/
    array(
       'id'          => 'headerBody_product__technical-3',
       'label'       => 'Характеристики товара ',
       'desc'        => 'Напишите характеристики товара #3',
       'type'        => 'text',
       'section'     => 'headerBody',
    ),
     /* Характеристики товара #3-a*/
    array(
        'id'          => 'headerBody_product__technical-3-a',
        'label'       => 'Характеристики товара ',
        'desc'        => 'Напишите характеристики товара #3-a',
        'type'        => 'text',
        'section'     => 'headerBody',
    ),
    /* Характеристики товара #4*/
    array(
        'id'          => 'headerBody_product__technical-4',
        'label'       => 'Характеристики товара ',
        'desc'        => 'Напишите характеристики товара #4',
        'type'        => 'text',
        'section'     => 'headerBody',
    ),

    /* Характеристики товара #4-a*/
    array(
         'id'          => 'headerBody_product__technical-4-a',
         'label'       => 'Характеристики товара ',
         'desc'        => 'Напишите характеристики товара #4-a',
         'type'        => 'text',
         'section'     => 'headerBody',
    ),

    /* Характеристики товара #5*/
    array(
          'id'          => 'headerBody_product__technical-5',
          'label'       => 'Характеристики товара ',
          'desc'        => 'Напишите характеристики товара #5',
          'type'        => 'text',
          'section'     => 'headerBody',
    ),
    /* Характеристики товара #5-a*/
    array(
       'id'          => 'headerBody_product__technical-5-a',
       'label'       => 'Характеристики товара ',
       'desc'        => 'Напишите характеристики товара #5-a',
       'type'        => 'text',
       'section'     => 'headerBody',
    ),

    /* Цена товара */
    array(
       'id'          => 'headerBody_product__price',
       'label'       => 'Цена товара',
       'desc'        => 'Укажите итоговую цену',
       'type'        => 'text',
       'section'     => 'headerBody',
    ),
    
    /* блок с описаниями */
    
    array(
       'id'          => 'headerContent_tab',
       'label'       => 'Тексты',
       'desc'        => 'Укажите заголовок ',
       'type'        => 'tab',
       'section'     => 'headerBody',
    ),
    array(
       'id'          => 'headerContent_text__h5',
       'label'       => 'Заголовок 1',
       'desc'        => 'Укажите заголовок H5',
       'type'        => 'text',
       'section'     => 'headerBody',
    ),
    array(
       'id'          => 'headerContent_text__h1',
       'label'       => 'Заголовок 2',
       'desc'        => 'Укажите заголовок H1',
       'type'        => 'text',
       'section'     => 'headerBody',
    ),
    array(
       'id'          => 'headerContent_text__h4',
       'label'       => 'Заголовок 3',
       'desc'        => 'Укажите заголовок H4',
       'type'        => 'textarea',
       'section'     => 'headerBody',
    ),


   /* Блок с клиентами */
   array(
     'id'          => 'headerCustomer_list__item',
     'label'       => 'Клиенты',
     'desc'        => '',
     'std'         => '',
     'type'        => 'list-item',
     'section'     => 'headerBody',
     'rows'        => '',
     'post_type'   => '',
     'taxonomy'    => '',
     'min_max_step'=> '',
     'class'       => '',
     'condition'   => '',
     'operator'    => 'and',
     'settings'    => array(     
         array(
           'id'          => 'headerCustomer_img',
           'label'       => 'Иконка клиента',
           'desc'        => 'Загрузите иконку, картинку ',
           'type'        => 'upload',
           'section'     => 'headerBody',
           ),       
          array(
            'id'          => 'headeCustomer_name',
            'label'       => 'Название клиента',
            'desc'        => 'Напишите название ',
            'type'        => 'text',
            'section'     => 'headerBody',
           ),
         )
       ),

    /* Кнопки Стоимость и 3D фото*/
    array(
      'id'          => 'headerContent_bt',
      'label'       => 'Кнопки ',
      'desc'        => '',
      'type'        => 'tab',
      'section'     => 'headerBody',
    ),
    array(
      'id'          => 'headerContent_bt__price',
      'label'       => 'Кнопка стоимость',
      'desc'        => 'Укажите название которое будет на кнопке',
      'type'        => 'text',
      'section'     => 'headerBody',
    ),
    array(
      'id'          => 'headerContent_bt__price-link',
      'label'       => 'Ссылка',
      'desc'        => 'Укажите ссылку на какой раздел будет вести кнопка',
      'type'        => 'text',
      'section'     => 'headerBody',
    ),


    array(
      'id'          => 'headerTop_bt__3dphoto',
      'label'       => 'Кнопка 3d фотографии',
      'desc'        => 'Укажите ссылку на какой раздел будет вести кнопка',
      'type'        => 'text',
      'section'     => 'headerBody',
    ),

    array(
      'id'          => 'headerTop_bt__3dphoto-link',
      'label'       => 'Ссылка ',
      'desc'        => 'Укажите ссылку на какой раздел будет вести кнопка',
      'type'        => 'text',
      'section'     => 'headerBody',
    ),
    /* поле м дополнительной информацией */

    array(
       'id'          => 'headerContent_text__p',
       'label'       => 'Дополнительная информация',
       'desc'        => 'Отредакируйте текст ',
       'type'        => 'text',
       'section'     => 'headerBody',
    ),

/* ==========
2. Что мы предланаем
для вас  
------------
id: weofferIcons
============*/


 /* Заголовок для блока */
  array(
       'id'          => 'weofferIcons_title',
       'label'       => 'Заголовок h2',
       'desc'        => 'Укажите заголовок H2',
       'type'        => 'text',
       'section'     => 'weofferIcons',
    ),


   /* Блок с клиентами */
   array(
     'id'          => 'weofferIcons_list__item',
     'label'       => 'Блок с иконками',
     'desc'        => '',
     'std'         => '',
     'type'        => 'list-item',
     'section'     => 'weofferIcons',
     'rows'        => '',
     'post_type'   => '',
     'taxonomy'    => '',
     'min_max_step'=> '',
     'class'       => '',
     'condition'   => '',
     'operator'    => 'and',
     'settings'    => array(     
         array(
           'id'          => 'weofferIcons_img',
           'label'       => 'Иконка',
           'desc'        => 'Загрузите иконку, картинку ',
           'type'        => 'upload',
           'section'     => 'weofferIcons',
           ),       
          array(
            'id'          => 'weofferIcons_name',
            'label'       => 'Заголовок',
            'desc'        => 'Написшите заголовок ',
            'type'        => 'text',
            'section'     => 'weofferIcons',
           ),
         )
       ),



/* ==========
Главный слайдер 
------------
id: mainSlider
============*/

    /* Заголовок для блока */
     array(
          'id'          => 'mainSlider_title',
          'label'       => 'Заголовок h2',
          'desc'        => 'Укажите заголовок H2',
          'type'        => 'text',
          'section'     => 'mainSlider',
       ),

     /* Подзаголовок для блока */
      array(
           'id'          => 'mainSlider_subtitle',
           'label'       => 'Подзаголовок',
           'desc'        => 'Напишите подзаголовок',
           'type'        => 'text',
           'section'     => 'mainSlider',
        ),
      /* Слайдер */
      array(
        'id'          => 'mainSlider_list__item',
        'label'       => 'Слайдер ',
        'desc'        => 'Редактирование блоков слайдера',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'mainSlider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array(     
            array(
              'id'          => 'slider_item__title',
              'label'       => 'Заголовок для блока слайдера',
              'desc'        => 'Редактируйте заголовок',
              'type'        => 'text',
              'section'     => 'mainSlider',
             ),
              array(
                'id'          => 'slider_item__descr',
                'label'       => 'Описание ',
                'desc'        => 'Редактируйте описание',
                'type'        => 'text',
                'section'     => 'mainSlider',
             ),    

             /* Картинки в левой части слайдера */   
              array(
                'id'          => 'slider_item__icon',
                'label'       => 'Картинки',
                'desc'        => 'Картинки в контентной части',
                'type'        => 'upload',
                'section'     => 'mainSlider',
              ), 
              array(
                'id'          => 'slider_item__icon1',
                'label'       => 'Картинки',
                'desc'        => 'Картинки в контентной части',
                'type'        => 'upload',
                'section'     => 'mainSlider',
              ), 
              array(
                'id'          => 'slider_item__icon2',
                'label'       => 'Картинки',
                'desc'        => 'Картинки в контентной части',
                'type'        => 'upload',
                'section'     => 'mainSlider',
              ), 
              array(
                'id'          => 'slider_item__icon3',
                'label'       => 'Картинки',
                'desc'        => 'Картинки в контентной части',
                'type'        => 'upload',
                'section'     => 'mainSlider',
              ), 
              array(
                'id'          => 'slider_item__icon4',
                'label'       => 'Картинки',
                'desc'        => 'Картинки в контентной части',
                'type'        => 'upload',
                'section'     => 'mainSlider',
              ), 
              array(
                'id'          => 'slider_item__img',
                'label'       => 'Изображение',
                'desc'        => 'Отредактируйте главное изображение в правой части слайдера',
                'type'        => 'upload',
                'section'     => 'mainSlider',
              ), 
            )
          ),



/* ==========
Управление 
навигацией 
секвенции  
------------
id: navConsole
============*/

/* Заголовок для блока */
 array(
      'id'          => 'navConsole_title',
      'label'       => 'Заголовок h2',
      'desc'        => 'Укажите заголовок H2',
      'type'        => 'text',
      'section'     => 'navConsole',
   ),

 /* Подзаголовок для блока */
  array(
       'id'          => 'navConsole_subtitle',
       'label'       => 'Подзаголовок',
       'desc'        => 'Напишите подзаголовок',
       'type'        => 'text',
       'section'     => 'navConsole',
    ),


  /* Расположение фотографии с секвенцией  */
 array(
      'id'          => 'navConsole_img',
      'label'       => 'Картинка секвенцией',
      'desc'        => 'Запишите код секвенцией',
      'type'        => 'textarea',
      'section'     => 'navConsole',
   ),


  /* Кнопки консоли */
 
  array(
    'id'          => 'navConsole_list__item',
    'label'       => 'Блок с аннотацией',
    'desc'        => '',
    'std'         => '',
    'type'        => 'list-item',
    'section'     => 'navConsole',
    'rows'        => '',
    'post_type'   => '',
    'taxonomy'    => '',
    'min_max_step'=> '',
    'class'       => '',
    'condition'   => '',
    'operator'    => 'and',
    'settings'    => array(     
        array(
          'id'          => 'navConsole_title',
          'label'       => 'Заголовок',
          'desc'        => 'Напишите заголовок ',
          'type'        => 'text',
          'section'     => 'navConsole',
          ),       
         array(
           'id'          => 'navConsole_title__img',
           'label'       => 'Картинка для кнопки',
           'desc'        => 'Загрузите картинку  ',
           'type'        => 'upload',
           'section'     => 'navConsole',
          ),
         array(
           'id'          => 'navConsole_title__btn',
           'label'       => 'Заголовок для кнопки',
           'desc'        => 'Напишите заголовок ',
           'type'        => 'text',
           'section'     => 'navConsole',
          ),
         array(
           'id'          => 'navConsole_decr',
           'label'       => 'Краткое описание ',
           'desc'        => 'Тут можно редактировать текст ',
           'type'        => 'text',
           'section'     => 'navConsole',
          ),
        )
      ),


/* ==========
Разные варианты 
секвенций  
------------
id: yourOption
============*/


    /* Заголовок для блока */
     array(
          'id'          => 'yourOption_title',
          'label'       => 'Заголовок h2',
          'desc'        => 'Укажите заголовок H2',
          'type'        => 'text',
          'section'     => 'yourOption',
       ),

     /* Подзаголовок для блока */
      array(
           'id'          => 'yourOption_subtitle',
           'label'       => 'Подзаголовок',
           'desc'        => 'Напишите подзаголовок',
           'type'        => 'textarea-simple',
           'section'     => 'yourOption',
        ),

    /* карточки секвенций */
      
      array(
        'id'          => 'optionCard_list__item',
        'label'       => 'Карточка с секвенцией',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'yourOption',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array(     
            array(
              'id'          => 'optionCard_id__card',
              'label'       => 'id-для модального окна',
              'desc'        => 'Необходимо установить уникальный id для ссылки открытия модального окна',
              'type'        => 'textarea',
              'section'     => 'yourOption',
              ), 
            array(
              'id'          => 'optionCard_icon',
              'label'       => 'Картинка 1',
              'desc'        => 'Загрузите картинку ',
              'type'        => 'upload',
              'section'     => 'yourOption',
              ), 
            array(
               'id'          => 'optionCard_icon2',
               'label'       => 'Картинка 2',
               'desc'        => 'Загрузите еще одну картинку (опцонально) ',
               'type'        => 'upload',
               'section'     => 'yourOption',
              ),       
             array(
               'id'          => 'optionCard_title',
               'label'       => 'Заголовок ',
               'desc'        => 'Напишите заголовок для секвенции (опцонально)',
               'type'        => 'text',
               'section'     => 'yourOption',
              ),
             array(
               'id'          => 'optionCard_farme',
               'label'       => 'Колличество кадров',
               'desc'        => 'Напишите колличество кадров',
               'type'        => 'text',
               'section'     => 'yourOption',
              ),
             array(
               'id'          => 'optionCard_img__standby',
               'label'       => 'Картинка для блока (в режиме ожидания)',
               'desc'        => 'Загрузите картинку для блока секвенции',
               'type'        => 'upload',
               'section'     => 'yourOption',
              ),
             array(
               'id'          => 'optionCard_img__hover',
               'label'       => 'Картинка для блока (наведение мышки)',
               'desc'        => 'Загрузите картинку для блока секвенции',
               'type'        => 'upload',
               'section'     => 'yourOption',
              ),
            /* Модальное окно */
             array(
               'id'          => 'optionCard_modal__title',
               'label'       => 'Заголовок в модальном окне',
               'desc'        => 'Напишите заголовок для секвенции',
               'type'        => 'text',
               'section'     => 'yourOption',
              ),
             array(
               'id'          => 'optionCard_modal__subtitle',
               'label'       => 'Доп заголовок',
               'desc'        => 'Дополнительные заголовки для  секвенции (опционально)',
               'type'        => 'text',
               'section'     => 'yourOption',
              ),
              /* Установите картинку с секвенцией  */
            array(
               'id'          => 'optionCard_modal_img',
               'label'       => 'Картинка секвенции',
               'desc'        => 'Запишите код для этого блока с секвенцией',
               'type'        => 'textarea',
               'section'     => 'yourOption',
               ),

            )
          ),



/* ==========
Секвенция из 
36 фотограффий  
------------
id: sequence36Frame
============*/

    /* Заголовок для блока */
     array(
          'id'          => 'sequence36Frame_title',
          'label'       => 'Заголовок h2',
          'desc'        => 'Укажите заголовок H2',
          'type'        => 'text',
          'section'     => 'sequence36Frame',
       ),

     /* Подзаголовок для блока */
      array(
           'id'          => 'sequence36Frame_subtitle',
           'label'       => 'Подзаголовок',
           'desc'        => 'Напишите подзаголовок',
           'type'        => 'textarea-simple',
           'section'     => 'sequence36Frame',
        ),  


      /* Картинка большая */
       array(
            'id'          => 'sequence36Frame_img',
            'label'       => 'Картинка',
            'desc'        => 'Загрузите картинку для блока ',
            'type'        => 'upload',
            'section'     => 'sequence36Frame',
         ),  

       /* Ротатор картинок  */
       
       array(
         'id'          => 'sequenceRotator_list__item',
         'label'       => 'Разобранная секвенция',
         'desc'        => '',
         'std'         => '',
         'type'        => 'list-item',
         'section'     => 'sequence36Frame',
         'rows'        => '',
         'post_type'   => '',
         'taxonomy'    => '',
         'min_max_step'=> '',
         'class'       => '',
         'condition'   => '',
         'operator'    => 'and',
         'settings'    => array(     
             array(
               'id'          => 'sequenceRotator_img__color',
               'label'       => 'Цветная картинка',
               'desc'        => 'Загрузите цветную картинку ',
               'type'        => 'upload',
               'section'     => 'sequence36Frame',
               ), 
               array(
                 'id'          => 'sequenceRotator_img__blackwhite',
                 'label'       => 'Чернобелая картинка ',
                 'desc'        => 'Загрузите ч/б картинку ',
                 'type'        => 'upload',
                 'section'     => 'sequence36Frame',
                 ),       
             )
           ),



/* ==========
Каиалог 3d 
картинок 

------------
id: explGoods
============*/


    /* Разделитель таб */
     array(
          'id'          => 'explGoods_tub',
          'label'       => 'Заголовоки',
          'desc'        => '',
          'type'        => 'tab',
          'section'     => 'explGoods',
       ),

    /* Заголовок для блока */
     array(
          'id'          => 'explGoods_title',
          'label'       => 'Заголовок h2',
          'desc'        => 'Укажите заголовок H2',
          'type'        => 'text',
          'section'     => 'explGoods',
       ),

     /* Подзаголовок для блока */
      array(
           'id'          => 'explGoods_subtitle',
           'label'       => 'Подзаголовок',
           'desc'        => 'Напишите подзаголовок',
           'type'        => 'textarea-simple',
           'section'     => 'explGoods',
        ),  



      /* Разделитель таб2 3d фото формат */
       array(
            'id'          => 'explGoods_tub2',
            'label'       => '3d фото',
            'desc'        => '',
            'type'        => 'tab',
            'section'     => 'explGoods',
         ),


       /* Карточка товара  */
       
       array(
         'id'          => 'explGoods_list__item',
         'label'       => 'Карточка товара',
         'desc'        => '',
         'std'         => '',
         'type'        => 'list-item',
         'section'     => 'explGoods',
         'rows'        => '',
         'post_type'   => '',
         'taxonomy'    => '',
         'min_max_step'=> '',
         'class'       => '',
         'condition'   => '',
         'operator'    => 'and',
         'settings'    => array(     
            array(
              'id'          => 'explGoods_cards__id',
              'label'       => 'ID карточки',
              'desc'        => 'Укажите id для карточки товара <b>modal_goods..</b> ',
              'type'        => 'textarea',
              'section'     => 'explGoods',
              ), 
            array(
              'id'          => 'explGoods_cards__class',
              'label'       => 'ClASS карточки',
              'desc'        => 'Укажите class для карточки товара (опционально) <b>explGoodsContainer_item__horz </b> ',
              'type'        => 'textarea',
              'section'     => 'explGoods',
              ), 

             array(
               'id'          => 'explGoods_cards__titile',
               'label'       => 'Заголовок карточки',
               'desc'        => 'Укажите название товара  ',
               'type'        => 'text',
               'section'     => 'explGoods',
               ), 
             array(
               'id'          => 'explGoods_cards__catg',
               'label'       => 'Категория товара',
               'desc'        => 'Укажите категорию товара  ',
               'type'        => 'text',
               'section'     => 'explGoods',
               ), 
             array(
               'id'          => 'explGoods_cards__icon',
               'label'       => 'Иконка 360',
               'desc'        => 'Загрузите иконку для карточки товара ',
               'type'        => 'upload',
               'section'     => 'explGoods',
               ), 
             array(
               'id'          => 'explGoods_cards__img',
               'label'       => 'Картинка',
               'desc'        => 'Загрузите изображение товара ',
               'type'        => 'upload',
               'section'     => 'explGoods',
               ), 


             /* Модальное окно */

            /* Установите картинку с секвенцией  */
             array(
                'id'          => 'explGoods_modal_img',
                'label'       => 'Картинка секвенции',
                'desc'        => 'Запишите код для этого блока с секвенцией',
                'type'        => 'textarea',
                'section'     => 'explGoods',
              ),
             )
           ),
    
           /* Разделитель таб2 Gif формат */
            array(
                 'id'          => 'explGoods_tub3',
                 'label'       => 'Gif',
                 'desc'        => '',
                 'type'        => 'tab',
                 'section'     => 'explGoods',
              ),
            /* Карточка товара  */
            
            array(
              'id'          => 'explGoodsGif_list__item',
              'label'       => 'Карточка товара',
              'desc'        => 'Фотографии в формате gif',
              'std'         => '',
              'type'        => 'list-item',
              'section'     => 'explGoods',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'min_max_step'=> '',
              'class'       => '',
              'condition'   => '',
              'operator'    => 'and',
              'settings'    => array(     
                 array(
                   'id'          => 'explGoodsGif_cards__id',
                   'label'       => 'ID карточки',
                   'desc'        => 'Укажите id для карточки товара <b>modal_goods..</b> ',
                   'type'        => 'textarea',
                   'section'     => 'explGoods',
                   ), 
                 array(
                   'id'          => 'explGoodsGif_cards__class',
                   'label'       => 'ClASS карточки',
                   'desc'        => 'Укажите class для карточки товара (опционально) <b>explGoodsContainer_item__horz </b> ',
                   'type'        => 'textarea',
                   'section'     => 'explGoods',
                   ), 

                  array(
                    'id'          => 'explGoodsGif_cards__titile',
                    'label'       => 'Заголовок карточки',
                    'desc'        => 'Укажите название товара  ',
                    'type'        => 'text',
                    'section'     => 'explGoods',
                    ), 
                  array(
                    'id'          => 'explGoodsGif_cards__catg',
                    'label'       => 'Категория товара',
                    'desc'        => 'Укажите категорию товара  ',
                    'type'        => 'text',
                    'section'     => 'explGoods',
                    ), 
                  array(
                    'id'          => 'explGoodsGif_cards__icon',
                    'label'       => 'Иконка 360',
                    'desc'        => 'Загрузите иконку для карточки товара ',
                    'type'        => 'upload',
                    'section'     => 'explGoods',
                    ), 
                  array(
                    'id'          => 'explGoodsGif_cards__img',
                    'label'       => 'Картинка',
                    'desc'        => 'Загрузите изображение товара ',
                    'type'        => 'upload',
                    'section'     => 'explGoods',
                    ), 


                  /* Модальное окно */

                 /* Установите картинку с секвенцией  */
                  array(
                     'id'          => 'explGoodsGif_modal_img',
                     'label'       => 'Картинка секвенции',
                     'desc'        => 'Запишите код для этого блока с секвенцией',
                     'type'        => 'upload',
                     'section'     => 'explGoods',
                   ),
                  )
                ),

            /* Разделитель таб2 video формат */
             array(
                  'id'          => 'explGoods_tub4',
                  'label'       => 'Video',
                  'desc'        => '',
                  'type'        => 'tab',
                  'section'     => 'explGoods',
               ),
             /* Карточка товара  */
             
             array(
               'id'          => 'explGoodsVideo_list__item',
               'label'       => 'Карточка товара',
               'desc'        => 'Фотографии в формате Видео',
               'std'         => '',
               'type'        => 'list-item',
               'section'     => 'explGoods',
               'rows'        => '',
               'post_type'   => '',
               'taxonomy'    => '',
               'min_max_step'=> '',
               'class'       => '',
               'condition'   => '',
               'operator'    => 'and',
               'settings'    => array(     
                  array(
                    'id'          => 'explGoodsVideo_cards__id',
                    'label'       => 'ID карточки',
                    'desc'        => 'Укажите id для карточки товара <b>modal_goods_video.</b> ',
                    'type'        => 'textarea',
                    'section'     => 'explGoods',
                    ), 
                  // array(
                  //   'id'          => 'explGoodsVideo_cards__class',
                  //   'label'       => 'ClASS карточки',
                  //   'desc'        => 'Укажите class для карточки товара (опционально) <b>explGoodsContainer_item__horz </b> ',
                  //   'type'        => 'textarea',
                  //   'section'     => 'explGoods',
                  //   ), 

                   array(
                     'id'          => 'explGoodsVideo_cards__titile',
                     'label'       => 'Заголовок карточки',
                     'desc'        => 'Укажите название товара  ',
                     'type'        => 'text',
                     'section'     => 'explGoods',
                     ), 
                   array(
                     'id'          => 'explGoodsVideo_cards__catg',
                     'label'       => 'Категория товара',
                     'desc'        => 'Укажите категорию товара  ',
                     'type'        => 'text',
                     'section'     => 'explGoods',
                     ), 
                   array(
                     'id'          => 'explGoodsVideo_cards__icon',
                     'label'       => 'Иконка 360',
                     'desc'        => 'Загрузите иконку для карточки товара ',
                     'type'        => 'upload',
                     'section'     => 'explGoods',
                     ), 
                   array(
                     'id'          => 'explGoodsVideo_cards__img',
                     'label'       => 'Картинка',
                     'desc'        => 'Загрузите изображение товара ',
                     'type'        => 'upload',
                     'section'     => 'explGoods',
                     ), 


                   /* Модальное окно */

                  /* Установите картинку с секвенцией  */
                   // array(
                   //    'id'          => 'explGoodsVideo_modal_link',
                   //    'label'       => 'Картинка секвенции',
                   //    'desc'        => 'Вставьте ссылку на ресурс',
                   //    'type'        => 'textarea',
                   //    'section'     => 'explGoods',
                   //  ),
                  /* Размещение локального видео на сайте */
                   array(
                      'id'          => 'explGoodsVideo_modal_blankpng',
                      'label'       => 'Картинка заглушка',
                      'desc'        => 'Вставьте картинку-заглушку',
                      'type'        => 'upload',
                      'section'     => 'explGoods',
                    ),
                   array(
                      'id'          => 'explGoodsVideo_modal_localvideo',
                      'label'       => 'Видео',
                      'desc'        => 'Вставьте ссылку на видеофайл',
                      'type'        => 'text',
                      'section'     => 'explGoods',
                    )
                   )
                 ),



/* ==========
Как мы работаем 
------------
id: aboutWork
============*/
    /* Заголовок для блока */
     array(
          'id'          => 'aboutWork_title',
          'label'       => 'Заголовок h2',
          'desc'        => 'Укажите заголовок H2',
          'type'        => 'text',
          'section'     => 'aboutWork',
       ),

     /* Подзаголовок для блока */
      array(
           'id'          => 'aboutWork_subtitle',
           'label'       => 'Подзаголовок',
           'desc'        => 'Напишите подзаголовок',
           'type'        => 'textarea-simple',
           'section'     => 'aboutWork',
        ),  

      /* Видосик */
       array(
            'id'          => 'aboutWork_video',
            'label'       => 'Загрузите видос',
            'desc'        => 'Вставьте ссылку на ресурс',
            'type'        => 'text',
            'section'     => 'aboutWork',
         ),  


      /* Иконки с преимуществами  */
      
      array(
        'id'          => 'aboutWork_list__item',
        'label'       => 'Блок с преимуществами',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'aboutWork',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array(     
           array(
             'id'          => 'aboutWork_block__img',
             'label'       => 'Иконка блока ',
             'desc'        => 'Загрузите иконку для блока',
             'type'        => 'upload',
             'section'     => 'aboutWork',
             ), 
           array(
             'id'          => 'aboutWork_block__descr',
             'label'       => 'Описание для карточки',
             'desc'        => 'Отредактируйте писание для карточки ',
             'type'        => 'textarea',
             'section'     => 'aboutWork',
             ), 
     
            )
          ),



/* ==========
Калькулятор, расчета 
стоимости заказа 
------------
id: priceCalculator
============*/
/* Первый блок*/
 array(
      'id'          => 'priceCalculator_tab',
      'label'       => 'Заголовок',
      'desc'        => '',
      'type'        => 'tab',
      'section'     => 'priceCalculator',
   ),

/* Слайдер в блоке прайс */

    array(
      'id'          => 'priceCalculator_list__item',
      'label'       => 'Слайдер с текстом',
      'desc'        => '',
      'std'         => '',
      'type'        => 'list-item',
      'section'     => 'priceCalculator',
      'rows'        => '',
      'post_type'   => '',
      'taxonomy'    => '',
      'min_max_step'=> '',
      'class'       => '',
      'condition'   => '',
      'operator'    => 'and',
      'settings'    => array(     
         array(
           'id'          => 'priceCalculator_text',
           'label'       => 'Текст для блока',
           'desc'        => 'Отредактируйте текст для слайдера',
           'type'        => 'textarea',
           'section'     => 'priceCalculator',
           ), 
          )
        ),
    /* Подзаголовок для блока */
     array(
          'id'          => 'priceCalculator_subtitle',
          'label'       => 'Подзаголовок',
          'desc'        => 'Напишите подзаголовок',
          'type'        => 'text',
          'section'     => 'priceCalculator',
       ),  

    /* Заголовок для блока */
     array(
          'id'          => 'priceCalculator_title',
          'label'       => 'Заголовок h2',
          'desc'        => 'Укажите заголовок H2',
          'type'        => 'text',
          'section'     => 'priceCalculator',
       ),

 
     /* Второй  блок */
      array(
           'id'          => 'priceCalculator_option__tab',
           'label'       => 'Калькулятор',
           'desc'        => '',
           'type'        => 'tab',
           'section'     => 'priceCalculator',
        ),    
     /* Название label*/
      array(
           'id'          => 'type_select__name',
           'label'       => 'Заголовок для селекта',
           'desc'        => '',
           'type'        => 'text',
           'section'     => 'priceCalculator',
        ),   
    /* селект тип изделия*/
        array(
          'id'          => 'typeProduct_list__item',
          'label'       => 'Тип изделия ',
          'desc'        => 'Укажите параметры для выбора типов ',
          'std'         => '',
          'type'        => 'list-item',
          'section'     => 'priceCalculator',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => '',
          'operator'    => 'and',
          'settings'    => array(     
             array(
               'id'          => 'typeProduct_option__txt',
               'label'       => 'Вариант выбора',
               'desc'        => 'Отредактируйте текст для варианта выбора',
               'type'        => 'text',
               'section'     => 'priceCalculator',
               ), 
             array(
               'id'          => 'typeProduct_option__val',
               'label'       => 'Коэффициент',
               'desc'        => 'Укажите коэффициент для параметров',
               'type'        => 'text',
               'section'     => 'priceCalculator',
               ), 
              )
            ),
  /* Название label*/
   array(
        'id'          => 'format_select__name',
        'label'       => 'Заголовок для селекта',
        'desc'        => '',
        'type'        => 'text',
        'section'     => 'priceCalculator',
     ), 

  /* селект цвет изделия*/
      array(
        'id'          => 'formatProduct_list__item',
        'label'       => 'Формат объекта съемки ',
        'desc'        => 'Укажите формат',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'priceCalculator',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array(     
           array(
             'id'          => 'formatProduct_option__txt',
             'label'       => 'Вариант выбора',
             'desc'        => 'Отредактируйте текст для варианта выбора',
             'type'        => 'text',
             'section'     => 'priceCalculator',
             ),
             array(
               'id'          => 'formatProduct_option__val',
               'label'       => 'Коэффициент',
               'desc'        => 'Укажите коэффициент для параметров',
               'type'        => 'text',
               'section'     => 'priceCalculator',
               ), 
            )
          ),

    /* Название label*/
     array(
          'id'          => 'color_select__name',
          'label'       => 'Заголовок для селекта',
          'desc'        => '',
          'type'        => 'text',
          'section'     => 'priceCalculator',
       ), 

    /* селект цвет изделия*/
        array(
          'id'          => 'colorProduct_list__item',
          'label'       => 'Цвет изделия ',
          'desc'        => 'Укажите варианты выбора цвета изделия',
          'std'         => '',
          'type'        => 'list-item',
          'section'     => 'priceCalculator',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => '',
          'operator'    => 'and',
          'settings'    => array(     
             array(
               'id'          => 'colorProduct_option__txt',
               'label'       => 'Вариант выбора',
               'desc'        => 'Отредактируйте текст для варианта выбора',
               'type'        => 'text',
               'section'     => 'priceCalculator',
               ),
               array(
                 'id'          => 'colorProduct_option__val',
                 'label'       => 'Коэффициент',
                 'desc'        => 'Укажите коэффициент для параметров',
                 'type'        => 'text',
                 'section'     => 'priceCalculator',
                 ), 
              )
            ),
     
     /* Название label*/
      array(
           'id'          => 'radio_select__name',
           'label'       => 'Заголовок для селекта',
           'desc'        => '',
           'type'        => 'text',
           'section'     => 'priceCalculator',
        ),  
    /* селект место съемки*/
        array(
          'id'          => 'radio_list__item',
          'label'       => 'место  съемки',
          'desc'        => 'Укажите место съемки ',
          'std'         => '',
          'type'        => 'list-item',
          'section'     => 'priceCalculator',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => '',
          'operator'    => 'and',
          'settings'    => array(     
             array(
               'id'          => 'radio_option__txt',
               'label'       => 'Вариант выбора',
               'desc'        => 'Отредактируйте текст для варианта выбора',
               'type'        => 'text',
               'section'     => 'priceCalculator',
               ), 
             array(
               'id'          => 'radio_option__val',
               'label'       => 'Коэффициент',
               'desc'        => 'Укажите коэффициент для параметров',
               'type'        => 'text',
               'section'     => 'priceCalculator',
               ), 
              )
            ),
   /* Название label*/
    array(
         'id'          => 'frameRate_select__name',
         'label'       => 'Заголовок для селекта',
         'desc'        => '',
         'type'        => 'text',
         'section'     => 'priceCalculator',
      ), 

   /* селект частота кадров*/
       array(
         'id'          => 'frameRate_list__item',
         'label'       => 'Частота кадров ',
         'desc'        => 'Укажите варианты выбора частоты кадров',
         'std'         => '',
         'type'        => 'list-item',
         'section'     => 'priceCalculator',
         'rows'        => '',
         'post_type'   => '',
         'taxonomy'    => '',
         'min_max_step'=> '',
         'class'       => '',
         'condition'   => '',
         'operator'    => 'and',
         'settings'    => array(     
            array(
              'id'          => 'frameRate_option__txt',
              'label'       => 'Вариант выбора',
              'desc'        => 'Отредактируйте текст для варианта выбора',
              'type'        => 'text',
              'section'     => 'priceCalculator',
              ), 
            array(
              'id'          => 'frameRate_option__val',
              'label'       => 'Коэффициент',
              'desc'        => 'Укажите коэффициент для параметров',
              'type'        => 'text',
              'section'     => 'priceCalculator',
              ), 
             )
           ),   

   /* Итоговые цифры*/
   array(
        'id'          => 'totalAmount_tab',
        'label'       => 'В заключении',
        'desc'        => '',
        'type'        => 'tab',
        'section'     => 'priceCalculator',
     ), 
    array(
         'id'          => 'totalAmount_text',
         'label'       => 'Дополнительный текст',
         'desc'        => '',
         'type'        => 'textarea',
         'section'     => 'priceCalculator',
      ), 


/* ==========
Наши клиенты 
------------
id: customers
============*/
    /* Заголовок для блока */
     array(
          'id'          => 'customers_title',
          'label'       => 'Заголовок h2',
          'desc'        => 'Укажите заголовок H2',
          'type'        => 'text',
          'section'     => 'customers',
       ),

     /* Подзаголовок для блока */
      array(
           'id'          => 'customers_subtitle',
           'label'       => 'Подзаголовок',
           'desc'        => 'Напишите подзаголовок',
           'type'        => 'text',
           'section'     => 'customers',
        ),

      /* Интернет магазины */
          // array(
          //   'id'          => 'customers_list__item',
          //   'label'       => 'Интернет магазины ',
          //   'desc'        => 'Укажите интернет магазины информацию по размещению 3d фотографий на сайте',
          //   'std'         => '',
          //   'type'        => 'list-item',
          //   'section'     => 'customers',
          //   'rows'        => '',
          //   'post_type'   => '',
          //   'taxonomy'    => '',
          //   'min_max_step'=> '',
          //   'class'       => '',
          //   'condition'   => '',
          //   'operator'    => 'and',
          //   'settings'    => array(     
          //      array(
          //        'id'          => 'customersShop_title',
          //        'label'       => 'Заголовок',
          //        'desc'        => 'Напишите заголовок магазина ',
          //        'type'        => 'text',
          //        'section'     => 'customers',
          //        ), 
          //      array(
          //        'id'          => 'customersShop_descr',
          //        'label'       => 'Описание',
          //        'desc'        => 'Подробное описание для магазина ',
          //        'type'        => 'textarea',
          //        'section'     => 'customers',
          //        ), 
          //      array(
          //        'id'          => 'customersShop_title__card',
          //        'label'       => 'Заголовок в карточке товара ',
          //        'desc'        => 'Отредактируйте заголовок ',
          //        'type'        => 'text',
          //        'section'     => 'customers',
          //        ), 
          //      array(
          //        'id'          => 'customersShop_subtitle__card',
          //        'label'       => 'Подзаголовок в карточке товара ',
          //        'desc'        => 'Отредактируйте подзаголовок ',
          //        'type'        => 'text',
          //        'section'     => 'customers',
          //        ), 
          //      array(
          //        'id'          => 'customersShop_img',
          //        'label'       => 'Картинка ',
          //        'desc'        => 'Загрузите картинку для блока  ',
          //        'type'        => 'upload',
          //        'section'     => 'customers',
          //        ), 
              
          //     /* Консоль навигации табами */
          //      array(
          //        'id'          => 'customersShop_attention',
          //        'label'       => 'Внимание ',
          //        'desc'        => 'Обязательно укажите название для интернет магазина который находится в консоли управления ',
          //        'type'        => 'textblock',
          //        'section'     => 'customers',
          //        ), 
          //       )
          //     ),  


            /* Консоль навигации табами */
              // array(
              //   'id'          => 'console_list__item',
              //   'label'       => 'Консоль для блоков ',
              //   'desc'        => 'Обязательно укажите название инфтернет магазина',
              //   'std'         => '',
              //   'type'        => 'list-item',
              //   'section'     => 'customers',
              //   'rows'        => '',
              //   'post_type'   => '',
              //   'taxonomy'    => '',
              //   'min_max_step'=> '',
              //   'class'       => '',
              //   'condition'   => '',
              //   'operator'    => 'and',
              //   'settings'    => array(     
              //      array(
              //        'id'          => 'console_nav__tab',
              //        'label'       => 'Панель навигации',
              //        'desc'        => 'Заголовок панели навигаци',
              //        'type'        => 'text',
              //        'section'     => 'customers',
              //        ), 
              //       )
              //     ),  


/* ==========
Блок Отсавить заявку 
------------
id: ctaBlock
============*/

         /* Счетчик*/
         array(
              'id'          => 'ctaCounter',
              'label'       => 'Счетчик',
              'desc'        => 'Установите цифры',
              'type'        => 'text',
              'section'     => 'ctaBlock',
           ),
         /* Иконка 1 */
         array(
              'id'          => 'ctaIcon_1',
              'label'       => 'Иконка1',
              'desc'        => 'Установите иконку',
              'type'        => 'upload',
              'section'     => 'ctaBlock',
           ),
         /* Иконка 2 */
         array(
              'id'          => 'ctaIcon_2',
              'label'       => 'Иконка2',
              'desc'        => 'Установите иконку',
              'type'        => 'upload',
              'section'     => 'ctaBlock',
           ),
         /* Заголовок 1*/
          array(
               'id'          => 'ctaText_1',
               'label'       => 'Заголовок 1',
               'desc'        => 'Редактировать заголовок',
               'type'        => 'text',
               'section'     => 'ctaBlock',
            ),

          /* Заголовок 2*/
           array(
                'id'          => 'ctaText_2',
                'label'       => 'Заголовок 2',
                'desc'        => 'Редактировать заголовок',
                'type'        => 'textarea',
                'section'     => 'ctaBlock',
             ),

           /* Заголовок 3*/
            array(
                 'id'          => 'ctaText_3',
                 'label'       => 'Заголовок 3',
                 'desc'        => 'Редактировать заголовок',
                 'type'        => 'text',
                 'section'     => 'ctaBlock',
              ),

            /* Заголовок 4*/
             array(
                  'id'          => 'ctaText_4',
                  'label'       => 'Заголовок 4',
                  'desc'        => 'Редактировать заголовок',
                  'type'        => 'text',
                  'section'     => 'ctaBlock',
               ),




            /* Кнопка */
             array(
                  'id'          => 'ctaBtn',
                  'label'       => 'Кнопка',
                  'desc'        => 'Напишите заголовок',
                  'type'        => 'text',
                  'section'     => 'ctaBlock',
               ),
             /* Кнопка ссылка */
              array(
                   'id'          => 'ctaBtn_link',
                   'label'       => 'Ссылка на какой блок ведет кнопка',
                   'desc'        => 'Укажите ссылку',
                   'type'        => 'text',
                   'section'     => 'ctaBlock',
                ),

/* ==========
Footer 
------------
id: footer
============*/
    /* Контакты*/
    array(
         'id'          => 'footer_title',
         'label'       => 'Заголовок',
         'desc'        => 'Напишите заголовок',
         'type'        => 'text',
         'section'     => 'footer',
      ),


    /* Консоль навигации табами */
      array(
        'id'          => 'footer_list__item',
        'label'       => 'Контакты',
        'desc'        => 'Редактировать телефон, почту, адрес',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array(     
           array(
             'id'          => 'footer_span__txt',
             'label'       => 'Название',
             'desc'        => '',
             'type'        => 'text',
             'section'     => 'footer',
             ), 
           array(
             'id'          => 'footer_a__link',
             'label'       => 'ссылка',
             'desc'        => '',
             'type'        => 'text',
             'section'     => 'footer',
             ), 
           array(
             'id'          => 'footer_a__name',
             'label'       => 'название',
             'desc'        => '',
             'type'        => 'text',
             'section'     => 'footer',
             ), 
            )
          ),  

      array(
           'id'          => 'footer__subway_title',
           'label'       => 'Заголовок метро',
           'desc'        => 'Напишите тут что нить',
           'type'        => 'text',
           'section'     => 'footer',
        ),
      array(
           'id'          => 'footer__subway_link',
           'label'       => 'Метро',
           'desc'        => 'Вставьте ссылку на видео',
           'type'        => 'text',
           'section'     => 'footer',
        ),

      /* Copyright*/
      array(
           'id'          => 'footer_copy__logo',
           'label'       => 'Копирайт лого',
           'desc'        => 'Загрузите лого для копирайта',
           'type'        => 'upload',
           'section'     => 'footer',
        ),
      array(
           'id'          => 'footer_descr',
           'label'       => 'Описание',
           'desc'        => 'Отредактируйте информацию',
           'type'        => 'text',
           'section'     => 'footer',
        ),
      array(
           'id'          => 'footer_copy',
           'label'       => 'Копирайт',
           'desc'        => 'Отредактируйте информацию',
           'type'        => 'text',
           'section'     => 'footer',
        ),


      /* footer form*/
      array(
           'id'          => 'footer_form',
           'label'       => 'Форма обратной связи ',
           'desc'        => 'Вставьте шорткод формы обратной связи ',
           'type'        => 'text',
           'section'     => 'footer',
        ),





/* ==========
Примеры theme-option 
------------
============*/





      array(
        'id'          => 'demo_background',
        'label'       => __( 'Background', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Background option type is for adding background styles to your theme either dynamically via the CSS option type below or manually with %s. The Background option type has filters that allow you to remove fields or change the defaults. For example, you can filter %s to remove unwanted fields from all Background options or an individual one. You can also filter %s. These filters allow you to fine tune the select lists for your specific needs.', 'theme-text-domain' ), '<code>ot_get_option()</code>', '<code>ot_recognized_background_fields</code>', '<code>ot_recognized_background_repeat</code>, <code>ot_recognized_background_attachment</code>, <code>ot_recognized_background_position</code>, ' . __( 'and', 'theme-text-domain' ) . ' <code>ot_type_background_size_choices</code>' ),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_border',
        'label'       => __( 'Border', 'theme-text-domain' ),
        'desc'        => __( 'The Border option type is used to set width, unit, style, and color values.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'border',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_box_shadow',
        'label'       => __( 'Box Shadow', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Box Shadow option type is used to set %s, %s, %s, %s, %s, and %s values.', 'theme-text-domain' ), '<code>inset</code>', '<code>offset-x</code>', '<code>offset-y</code>', '<code>blur-radius</code>', '<code>spread-radius</code>', '<code>color</code>' ),
        'std'         => '',
        'type'        => 'box-shadow',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_category_checkbox',
        'label'       => __( 'Category Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Category Checkbox option type displays a list of category IDs. It allows the user to check multiple category IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'category-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_category_select',
        'label'       => __( 'Category Select', 'theme-text-domain' ),
        'desc'        => __( 'The Category Select option type displays a list of category IDs. It allows the user to select only one category ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'category-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_checkbox',
        'label'       => __( 'Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Checkbox option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'Yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'demo_colorpicker',
        'label'       => __( 'Colorpicker', 'theme-text-domain' ),
        'desc'        => __( 'The Colorpicker option type saves a hexadecimal color code for use in CSS. Use it to modify the color of something in your theme.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_colorpicker_opacity',
        'label'       => __( 'Colorpicker Opacity', 'theme-text-domain' ),
        'desc'        => __( 'Colorpicker Opacity', 'option-tree-theme' ),
        'desc'        => sprintf( __( 'The Colorpicker Opacity option type saves an rgba color value for use in CSS. To add opacity to other colorpickers add the %s class to the %s array.', 'option-tree' ), '<code>ot-colorpicker-opacity</code>', '<code>$args</code>' ),
        'std'         => '',
        'type'        => 'colorpicker-opacity',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_css',
        'label'       => __( 'CSS', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf( __( 'The CSS option type is a textarea that when used properly can add dynamic CSS to your theme from within OptionTree. Unfortunately, due server limitations you will need to create a file named %s at the root level of your theme and change permissions using %s so the server can write to the file. I have had the most success setting this single file to %s but feel free to play around with permissions until everything is working. A good starting point is %s. When the server can save to the file, CSS will automatically be updated when you save your Theme Options.', 'theme-text-domain' ), '<code>dynamic.css</code>', '<code>chmod</code>', '<code>0777</code>', '<code>0666</code>' ) . '</p><p>' . sprintf( __( 'This example assumes you have an option with the ID of %1$s. Which means this option will automatically insert the value of %1$s into the %2$s when the Theme Options are saved.', 'theme-text-domain' ), '<code>demo_background</code>', '<code>dynamic.css</code>' ) . '</p>',
        'std'         => '#custom {
  {{demo_background}}
}',
        'type'        => 'css',
        'section'     => 'option_types',
        'rows'        => '20',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_custom_post_type_checkbox',
        'label'       => __( 'Custom Post Type Checkbox', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Custom Post Type Select option type displays a list of IDs from any available WordPress post type or custom post type. It allows the user to check multiple post IDs for use in a custom function or loop. Requires at least one valid %1$s in the %1$s field.', 'theme-text-domain' ), '<code>post_type</code>' ),
        'std'         => '',
        'type'        => 'custom-post-type-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => 'post',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_custom_post_type_select',
        'label'       => __( 'Custom Post Type Select', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Custom Post Type Select option type displays a list of IDs from any available WordPress post type or custom post type. It will return a single post ID for use in a custom function or loop. Requires at least one valid %1$s in the %1$s field.', 'theme-text-domain' ), '<code>post_type</code>' ),
        'std'         => '',
        'type'        => 'custom-post-type-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => 'post',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_date_picker',
        'label'       => __( 'Date Picker', 'theme-text-domain' ),
        'desc'        => __( 'The Date Picker option type is tied to a standard form input field which displays a calendar pop-up that allow the user to pick any date when focus is given to the input field. The returned value is a date formatted string.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'date-picker',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_date_time_picker',
        'label'       => __( 'Date Time Picker', 'theme-text-domain' ),
        'desc'        => __( 'The Date Time Picker option type is tied to a standard form input field which displays a calendar pop-up that allow the user to pick any date and time when focus is given to the input field. The returned value is a date and time formatted string.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'date-time-picker',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_dimension',
        'label'       => __( 'Dimension', 'theme-text-domain' ),
        'desc'        => __( 'The Dimension option type is used to set width and height values.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'dimension',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_gallery',
        'label'       => __( 'Gallery', 'theme-text-domain' ),
        'desc'        => __( 'The Gallery option type saves a comma separated list of image attachment IDs. You will need to create a front-end function to display the images in your theme.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'gallery',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_gallery_shortcode',
        'label'       => __( 'Gallery Shortcode', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Gallery option type can also be saved as a shortcode by adding %s to the class attribute. Using the Gallery option type in this manner will result in a better user experience as you\'re able to save the link, column, and order settings.', 'theme-text-domain' ), '<code>ot-gallery-shortcode</code>' ),
        'std'         => '',
        'type'        => 'gallery',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => 'ot-gallery-shortcode',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_google_fonts',
        'label'       => __( 'Google Fonts', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Google Fonts option type will dynamically enqueue any number of Google Web Fonts into the document %1$s. As well, once the option has been saved each font family will automatically be inserted into the %2$s array for the Typography option type. You can further modify the font stack by using the %3$s filter, which is passed the %4$s, %5$s, and %6$s parameters. The %6$s parameter is being passed from %7$s, so it will be the ID of a Typography option type. This will allow you to add additional web safe fonts to individual font families on an as-need basis.', 'theme-text-domain' ), '<code>HEAD</code>', '<code>font-family</code>', '<code>ot_google_font_stack</code>', '<code>$font_stack</code>', '<code>$family</code>', '<code>$field_id</code>', '<code>ot_recognized_font_families</code>' ),
        'std'         => array( 
          array(
            'family'    => 'opensans',
            'variants'  => array( '300', '300italic', 'regular', 'italic', '600', '600italic' ),
            'subsets'   => array( 'latin' )
          )
        ),
        'type'        => 'google-fonts',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_javascript',
        'label'       => __( 'JavaScript', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf( __( 'The JavaScript option type is a textarea that uses the %s code editor to highlight your JavaScript and display errors as you type.', 'theme-text-domain' ), '<code>ace.js</code>' ) . '</p>',
        'std'         => '',
        'type'        => 'javascript',
        'section'     => 'option_types',
        'rows'        => '20',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_link_color',
        'label'       => __( 'Link Color', 'theme-text-domain' ),
        'desc'        => __( 'The Link Color option type is used to set all link color states.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'link-color',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_list_item',
        'label'       => __( 'List Item', 'theme-text-domain' ),
        'desc'        => __( 'The List Item option type allows for a great deal of customization. You can add settings to the List Item and those settings will be displayed to the user when they add a new List Item. Typical use is for creating sliding content or blocks of code for custom layouts.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'demo_list_item_content',
            'label'       => __( 'Content', 'theme-text-domain' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '10',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'demo_measurement',
        'label'       => __( 'Measurement', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Measurement option type is a mix of input and select fields. The text input excepts a value and the select lets you choose the unit of measurement to add to that value. Currently the default units are %s, %s, %s, and %s. However, you can change them with the %s filter.', 'theme-text-domain' ), '<code>px</code>', '<code>%</code>', '<code>em</code>', '<code>pt</code>', '<code>ot_measurement_unit_types</code>' ),
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_numeric_slider',
        'label'       => __( 'Numeric Slider', 'theme-text-domain' ),
        'desc'        => __( 'The Numeric Slider option type displays a jQuery UI slider. It will return a single numerical value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'numeric-slider',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '-500,5000,100',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_on_off',
        'label'       => __( 'On/Off', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The On/Off option type displays a simple switch that can be used to turn things on or off. The saved return value is either %s or %s.', 'theme-text-domain' ), '<code>on</code>', '<code>off</code>' ),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_page_checkbox',
        'label'       => __( 'Page Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Page Checkbox option type displays a list of page IDs. It allows the user to check multiple page IDs for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'page-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_page_select',
        'label'       => __( 'Page Select', 'theme-text-domain' ),
        'desc'        => __( 'The Page Select option type displays a list of page IDs. It will return a single page ID for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_post_checkbox',
        'label'       => __( 'Post Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Post Checkbox option type displays a list of post IDs. It allows the user to check multiple post IDs for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'post-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_post_select',
        'label'       => __( 'Post Select', 'theme-text-domain' ),
        'desc'        => __( 'The Post Select option type displays a list of post IDs. It will return a single post ID for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'post-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_radio',
        'label'       => __( 'Radio', 'theme-text-domain' ),
        'desc'        => __( 'The Radio option type displays a group of choices. It allows the user to choose one and will return that value as a string for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'radio',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'maybe',
            'label'       => __( 'Maybe', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'demo_radio_image',
        'label'       => __( 'Radio Image', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'the Radio Images option type is primarily used for layouts. However, you can filter the image list using %s. As well, you can add your own custom images using the choices array.', 'theme-text-domain' ), '<code>ot_radio_images</code>' ),
        'std'         => 'right-sidebar',
        'type'        => 'radio-image',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_select',
        'label'       => __( 'Select', 'theme-text-domain' ),
        'desc'        => __( 'The Select option type is used to list anything you want that would be chosen from a select list.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '',
            'label'       => __( '-- Choose One --', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'maybe',
            'label'       => __( 'Maybe', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'demo_sidebar_select',
        'label'       => __( 'Sidebar Select', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf(  __( 'This option type makes it possible for users to select a WordPress registered sidebar to use on a specific area. By using the two provided filters, %s, and %s we can be selective about which sidebars are available on a specific content area.', 'theme-text-domain' ), '<code>ot_recognized_sidebars</code>', '<code>ot_recognized_sidebars_{$field_id}</code>' ) . '</p><p>' . sprintf( __( 'For example, if we create a WordPress theme that provides the ability to change the Blog Sidebar and we don\'t want to have the footer sidebars available on this area, we can unset those sidebars either manually or by using a regular expression if we have a common name like %s.', 'theme-text-domain' ), '<code>footer-sidebar-$i</code>' ) . '</p>',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_social_links',
        'label'       => __( 'Social Links', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf( __( 'The Social Links option type utilizes a drag & drop interface to create a list of social links. There are a few filters that make extending this option type easy. You can set the %s filter to %s and turn off loading default values. Use the %s filter to change the default values that are loaded. To filter the settings array use the %s filter.', 'theme-text-domain' ), '<code>ot_type_social_links_load_defaults</code>', '<code>false</code>', '<code>ot_type_social_links_defaults</code>', '<code>ot_social_links_settings</code>' ) . '</p>',
        'std'         => '',
        'type'        => 'social-links',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_spacing',
        'label'       => __( 'Spacing', 'theme-text-domain' ),
        'desc'        => __( 'The Spacing option type is used to set spacing values such as padding or margin in the form of top, right, bottom, and left.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'spacing',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_tag_checkbox',
        'label'       => __( 'Tag Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Tag Checkbox option type displays a list of tag IDs. It allows the user to check multiple tag IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'tag-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_tag_select',
        'label'       => __( 'Tag Select', 'theme-text-domain' ),
        'desc'        => __( 'The Tag Select option type displays a list of tag IDs. It allows the user to select only one tag ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'tag-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_taxonomy_checkbox',
        'label'       => __( 'Taxonomy Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Taxonomy Checkbox option type displays a list of taxonomy IDs. It allows the user to check multiple taxonomy IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'taxonomy-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => 'category,post_tag',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_taxonomy_select',
        'label'       => __( 'Taxonomy Select', 'theme-text-domain' ),
        'desc'        => __( 'The Taxonomy Select option type displays a list of taxonomy IDs. It allows the user to select only one taxonomy ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'taxonomy-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => 'category,post_tag',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_text',
        'label'       => __( 'Text', 'theme-text-domain' ),
        'desc'        => __( 'The Text option type is used to save string values. For example, any optional or required text that is of reasonably short character length.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_textarea',
        'label'       => __( 'Textarea', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'theme-text-domain' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'option_types',
        'rows'        => '15',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_textarea_simple',
        'label'       => __( 'Textarea Simple', 'theme-text-domain' ),
        'desc'        => __( 'The Textarea Simple option type is a large string value used for custom code or text in the theme. The Textarea Simple does not have a WYSIWYG editor.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'option_types',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_textblock',
        'label'       => __( 'Textblock', 'theme-text-domain' ),
        'desc'        => __( 'The Textblock option type is used only on the Theme Option page. It will allow you to create & display HTML, but has no title above the text block. You can then use the Textblock to add a more detailed set of instruction on how the options are used in your theme. You would never use this in your themes template files as it does not save a value.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_textblock_titled',
        'label'       => __( 'Textblock Titled', 'theme-text-domain' ),
        'desc'        => __( 'The Textblock Titled option type is used only on the Theme Option page. It will allow you to create & display HTML, and has a title above the text block. You can then use the Textblock Titled to add a more detailed set of instruction on how the options are used in your theme. You would never use this in your themes template files as it does not save a value.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_typography',
        'label'       => __( 'Typography', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Typography option type is for adding typography styles to your theme either dynamically via the CSS option type above or manually with %s. The Typography option type has filters that allow you to remove fields or change the defaults. For example, you can filter %s to remove unwanted fields from all Background options or an individual one. You can also filter %s. These filters allow you to fine tune the select lists for your specific needs.', 'theme-text-domain' ), '<code>ot_get_option()</code>', '<code>ot_recognized_typography_fields</code>', '<code>ot_recognized_font_families</code>, <code>ot_recognized_font_sizes</code>, <code>ot_recognized_font_styles</code>, <code>ot_recognized_font_variants</code>, <code>ot_recognized_font_weights</code>, <code>ot_recognized_letter_spacing</code>, <code>ot_recognized_line_heights</code>, <code>ot_recognized_text_decorations</code> ' . __( 'and', 'theme-text-domain' ) . ' <code>ot_recognized_text_transformations</code>' ),
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_upload',
        'label'       => __( 'Upload', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Upload option type is used to upload any WordPress supported media. After uploading, users are required to press the "%s" button in order to populate the input with the URI of that media. There is one caveat of this feature. If you import the theme options and have uploaded media on one site the old URI will not reflect the URI of your new site. You will have to re-upload or %s any media to your new server and change the URIs if necessary.', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_upload_attachment_id',
        'label'       => __( 'Upload Attachment ID', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Upload option type can also be saved as an attachment ID by adding %s to the class attribute.', 'theme-text-domain' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => 'ot-upload-attachment-id',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}
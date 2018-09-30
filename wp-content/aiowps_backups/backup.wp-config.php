<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', '360seq');

/** Имя пользователя MySQL */
define('DB_USER', '360seq');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'cw6dHdhb6XIUpw1k');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_%wVaC,(<t].924i##(DIY.&oV|jd58*[VwK{`&X.8Yw/oWr[QoV!qK+$*4!zQ;&');
define('SECURE_AUTH_KEY',  'M-/c~_5E?Wa43io;IIsh9VG<qO6(>1saO^Y!kdGGrv::>0?Gw{k|s|_ho9gp1xjH');
define('LOGGED_IN_KEY',    '$G765R!k3t%u>VqqGYbwB*&;?w,TJikdF2RZu7Pt-[K_#Q~-O(V2.Brt?-0KPH*D');
define('NONCE_KEY',        'wH|o0lCp[kAM)%df{NxY1GNLT%:L9!77vHtg fxpt* /P%n6t_:%}$fTfeArqxc.');
define('AUTH_SALT',        'st=I<Sd[C30+{mb4L]N%9+0VEe$^QcQ*H43IAmIOQUQ3gAaLD`tBp32.a*EE)rju');
define('SECURE_AUTH_SALT', '=|%6VrMr]NTX6WPF=7N_ F$qMjuXbR%wYxX5wXq`-,pvk&>^s9qr@P<%;J;MAB5E');
define('LOGGED_IN_SALT',   'mJEvl_k&G0|Qh9p-,O Lu_x26k|a$sZPU8Fk_Q[>9Z+]kw5<LwzTPw17=>0.#?ES');
define('NONCE_SALT',       '&O`JM>A$UO]B$H7O}GwYU2 OP;C~g>fLo{HrnZ-AR.dY!ek+L@{~3z)3i[.+@2H?');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

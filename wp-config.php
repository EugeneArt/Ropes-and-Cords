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
define('DB_NAME', 'whisps&ropes');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Yl--T m`GjpcNO@rOiX-;b5-Ii;t@{riw+P%^VOum0)K+{Y=>{Qjr*<.>~eX;G/&');
define('SECURE_AUTH_KEY',  '5%pJIv;=X5LT5Xxg/w$2T|9zh|o`FSuS_Bp>x|JQmEVb@FLeISE9^=S5}}Dz-V` ');
define('LOGGED_IN_KEY',    '+jKm*Uszaao@B3Arr`HI{OB.:JN8ELzw;/O9agB9l_-/`Z=PmQ5:++39iq/Ov[58');
define('NONCE_KEY',        'u:4hB1t~|03vt 1$&}Efx9>3$-x(r-D_Bp,Wi&sA&_--(Yugn$r[Z+|TohEOROA@');
define('AUTH_SALT',        '2Gk[QAv.BTrUtRW@{NHwTm<uQ?v<;%ZiJVsmO+-EJ+FlsX{KqZ] yo+2Q9@I25T+');
define('SECURE_AUTH_SALT', '+(IRqLP__*Hr,%gLN)%d~p,ULPH4-Bjh}B]<<x]@6;~>M#^WJ-J3eH@J,)c:<f/9');
define('LOGGED_IN_SALT',   '7_uht7@|Vu!aJ8<M`j9,]yi-]|cvMeS_X+]?P+~V/6RC)Q:Gx#uh$bKk7BI;|v4:');
define('NONCE_SALT',       ' &a=4B2fC!>yt:WpZm.a-suYjEK!bw8!%vWP|vSx|.)Xba/A/U ?|)FEiFe`r([%');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

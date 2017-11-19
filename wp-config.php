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
define('DB_NAME', 'wd');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '7FIgRBQ+[=`*vq};-r7$@w&_-o/JQ&j#W-DY1p ` GNHN>vChakOfUNX)-@)M<1(');
define('SECURE_AUTH_KEY',  '|>@m@~n#T{k`4)X[lS8q_mqRCcadju!<y@}+]79q/@QEsc[ktW%4.O-T&ovr]X,1');
define('LOGGED_IN_KEY',    '-glKaq#C-oTpl&ox%#2 %]q)t-%hM%6aCndTq^19&Bc%Dp|Y#(LFnJ^v:~IYTM9 ');
define('NONCE_KEY',        'k$>rQTFNYj3NVrtK|Fg/uShv`5Wa>tAD60o! C]$(@fj`qWzwjsEXL%-W6X5pZy[');
define('AUTH_SALT',        'hY!p u-h0h~jF<N`;d44}UHOgp]v$!H*V#G<hmU=[Uw9Wps7N(G{ Z; l.u}~]Kw');
define('SECURE_AUTH_SALT', 'GY6w7p#FSV3Gw]<o}[.|5B.  pK+^;H7~BDpXXV72%=(.%atZW)+vKnVeh5NLM*[');
define('LOGGED_IN_SALT',   '~4lD.( +$h`?:&b^N,|bM6z19hli>E2%O)nEh*nSQ2celdw(v;-)+:s:h@j_UB}*');
define('NONCE_SALT',       'vD6de@,Lbx<YHQVhCgip8roQEjGG2#4$>(km2IEDK<tVbwKgb^@x$8A}7SNWh2f}');

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

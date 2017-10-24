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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/evgenij/www/seo-brain.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'seobrain');

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
define('AUTH_KEY',         '}{:2q<xF@Nwi#B@JMa#Q88mOB|>V5ufB[_6Tya`#}x,H8:#x:~3rD;&?4F+OdS;B');
define('SECURE_AUTH_KEY',  '~Y++p(}-iQJKsvkV{NSq[@h6kZxGX~d-?:gaZ6<s3kd/zYx}-?)~8LIW,F|s[}4C');
define('LOGGED_IN_KEY',    '$,r5)N)bqX[``0;M,U(xA&zw,&h/OS;>zI~@V$/FzN*n$^T|M0Xkh8o!_.=L2+v_');
define('NONCE_KEY',        's?z2Oxly,=5]H$gHfouD{`sq)$cu#sVJ(+z2HcP67ay*1F1<nW_#cLi44[Iv{=;S');
define('AUTH_SALT',        ')zzT/GI=?$/#MX;vEHi><FHo;:eFs1{eZ~{`}LL2tnlV`dh.>k;wyG3p^ABt7jL5');
define('SECURE_AUTH_SALT', 'SsL/ilw2NSO/el`jt_K|=}4=r+7qAw&2 zv]WjB`r{?0I(!sRQ5Lp|*^#P</RW86');
define('LOGGED_IN_SALT',   ':ttBW)ZtnY}_W;V9bjW3iHP.F9gyULPo`H~0#J(3jv-;fYyE~*b&3tU8~TRrXd~&');
define('NONCE_SALT',       'Yo{wa=B6i4czLH^Xpondf_,_72,ivkwe1i%c)l:r>_I2=iD&&Ei$sn*15da;S|sM');

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

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
define( 'DB_NAME', 'WP' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3O{!L*,#T-H$g.<<(&Z6esY[ jHk&,!N9.{q$]PX }:W_=.tLCY|2%2rSQ5qhsMn' );
define( 'SECURE_AUTH_KEY',  '|DtZ9;tLD apXZq`$/[%Lg :mWW0AZG915)q@1P@N~=F<s-0BCmm:I:K,Ev)sI94' );
define( 'LOGGED_IN_KEY',    'p%i(zN^1*vGS(~5>6N.De4I^ln4a:86/d$ZTtKw_LT)n6vfg,mNZoW$ONgV Urjl' );
define( 'NONCE_KEY',        'WPb>b6&xW<<T`.9SkiVNa+@UD%*H~PhRg8r(b[ %ZW=I<*7dG=b7mf]GS >VD=_4' );
define( 'AUTH_SALT',        '}*OO$k5Rb8<}CDB3p6[(~*hD[+Dj~2&vpZ.nPlR.U,* #wAdsA#+j;t]3t4lkyUi' );
define( 'SECURE_AUTH_SALT', 'Hu=N!eUl~jRZ8OUhHq_Z{c8*3)yxq$|p=9tw[w/O6!y-BuG+5qQONfYVuZcl-t_ ' );
define( 'LOGGED_IN_SALT',   'GIoI>82O&@EHk23J?* :d*TH@0hm.^<Jf4Zz$X@,e3lt/If9CtBU9Ig7;HfM87LM' );
define( 'NONCE_SALT',       '])>m}FEyz-p+W7]:]hKoV1~uwh><qaoA(!R=K+$#)lJLgQFP^$86nG#gd~V:m6iD' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

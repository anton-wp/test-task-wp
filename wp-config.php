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
define( 'DB_NAME', 'test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'iZ?1kGxs:o*L?3&DmZ#Rn _gmZR^4qd%. g?N(kQ$15}WR,^|z1Apzx_TS-j|Xf.' );
define( 'SECURE_AUTH_KEY',  'NU%+)SQ[aOt:)4WYRf{X47D<#^&-*jqvhQDwp}SB?|lXUuJ IqY9!HOaZm^:{t>6' );
define( 'LOGGED_IN_KEY',    'N)uFEvH$G!iVZT^un{Jb052e.{~^z2NjN^gl-4jiu0<Q{,Nr[~/+IXoj]CB6/4eI' );
define( 'NONCE_KEY',        '`-ymkux|sw%+0=]/aK.NFa!IZyOgc>*_ia8f4M=$|+4U6 ]+.&7FO<;F)au@%[Vj' );
define( 'AUTH_SALT',        '@9Q]Vzdq]LJM0)_Skk4LdHBHc:n9|(8t<2NAxc%p8aRb{dhb@Cvt&yg##`7qg-Zx' );
define( 'SECURE_AUTH_SALT', 'QRh[?6.3&rs2rRLyk#lgFu/p|>Y%d7w#.&rYWEP%GU;{5-9T%A`(+N,;4T.-qjyz' );
define( 'LOGGED_IN_SALT',   'J,^.6pdD}jHc=N|<1F)s]1[GYBw[bHVk6U%8fci [*Q`OHT){Aax8h[F40c&L2Lh' );
define( 'NONCE_SALT',       '{Zm9KR!,Kvg0HYdopJ!}5y|5,l~;KlP[z3Y2XG;FsM)`RYB*v,XUwx|C6r!$A&p%' );

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

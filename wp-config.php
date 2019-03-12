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
define('DB_NAME', 'profi_dev');

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
define('AUTH_KEY',         ' 7bp|XRS{?=IsCVrEAMl|F,L;?EZvGT7/`PBt~-sd#/KWbe(ae$2wgILf VuT~c{');
define('SECURE_AUTH_KEY',  '/St+n)RK7ky^e=hRarv%1Bq0Txm3[YAmV4pUgm,Y^lNWR+n[#HKGEGAHUw3yz=eE');
define('LOGGED_IN_KEY',    '5jRs0!I+k@#6- *Ytluu*EMTl]j.FmIo]v`R^Tg(Jharf[?e*oYLAyfF`l^d~9)>');
define('NONCE_KEY',        'JWDndBE-O{K!eEsz~`crd=4K##+UOGODY^FWxF_}%$ku~t]P2uze?mpN;dhcFMN$');
define('AUTH_SALT',        'R3y,/v,aF~-(#mW9e<1$[Y=#P?WfXmnsN5{i8Wj.DbC{(#?*e`)xjW{jh w)? <o');
define('SECURE_AUTH_SALT', '`UMQT=%v..CsaA_<2ZT;{VoqAUWk-F$u@8?;-S}$X_BedjL/EosFf!~R7[0l;!#A');
define('LOGGED_IN_SALT',   'p.ez$Y}#OR_/mdduUsG:aj4zF* aB9sw2E^IZq]ee]=Cus&OBH[H7!!QEj8t2d@W');
define('NONCE_SALT',       'j@SE<7*;qA%yjJtCx4;ckT([Fjw,vTB|4(65$q&}WdAoxh[6IW#|tvQ&lT9UAzZs');

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

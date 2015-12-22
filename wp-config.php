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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'H@xx5WCsDkwz|l]s/%eZK+G*EJ&t-iQswmNU`k>)WP$qnR2PyGr=v]m-K~W#}au?');
define('SECURE_AUTH_KEY',  'EV{vOdi{|}Fp-T0Hf,%N+0Di+,kF$w &ZlG;S?WaW/^iDa*b~-xH9+>H+T=t1.2-');
define('LOGGED_IN_KEY',    ':*:h~5-YPU#i7;!dLE(qjVX;w17k1$xX3^h;(H@2yZn^iL]F4V@sjoKR]k5xd2w6');
define('NONCE_KEY',        '_9Ir:iF$wV:+c((Rj=Zc4T+;5w@GU.j4h>W3uH84X6yj_/e+5=8piY^t/KoL#}+n');
define('AUTH_SALT',        '{=?k_^=jRWPU|<8!@2|:#G[8QvMfBhtl_fatNK#RZ1&+-{tIRzNitrzV++B1V7Q}');
define('SECURE_AUTH_SALT', '8|IAAa%X0N<jYPi}|W[wB%5mF4b-gCH@VV-_og ;gc25+{UgOgL~j3s-wvtEJ~o+');
define('LOGGED_IN_SALT',   '7MqfSoVC(q4@xf5*bf23[u4I+C VRIxD2*u@io2_B(yKRJE!%F+9fol1{;kFsO^5');
define('NONCE_SALT',       '%lfO+GiFO[S!u8&9OElh#zq7k8sFzZ[u+[BFYI2A?jglXW`g+dybC IcZf:W4 ut');

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

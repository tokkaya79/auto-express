<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'auto_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=q-bYyx-gl<+=0drbvKI3htajg-V2;3FiLLr3,XOT7#I-X]kmF;UYOaX{rYZ-[p@' );
define( 'SECURE_AUTH_KEY',  'G*mhnv4IAIvcG-U&Iu9z6V]rM^(bc8-A3Mm;)c-.bD.z3(XtMO.6!7;>)7Ik`SNq' );
define( 'LOGGED_IN_KEY',    '4FOA+e>+I9p{lgFrkq I{{Bjj-14Z+[w:Q ^-r;F*z0nqpf?S]wC|Mq5Q4O9Wg&|' );
define( 'NONCE_KEY',        'RMO$h%SJqH`686%l8?I};sI3,f1=).uoM{vfX_r2]&JDDiwxn3VOo2jzS!x0ajOj' );
define( 'AUTH_SALT',        '0g~lZUt6Sl-noxcEByJmz|.8TUnpTPms5>VbKzJ1sID?u)OYZZ!UiNR16%U~~QZ@' );
define( 'SECURE_AUTH_SALT', '5//uj{NPo$LHecaGD.aW$%UZr7/4VdfjNLdon/Dpi`of 2[||WB|J=c4V@[OUT3R' );
define( 'LOGGED_IN_SALT',   '>43yG!u;(*L9*w|p21&s&V.xIPPf;VQoe9.Uz5k~3Lu8bV>_G9>>O7@y//?AgzEi' );
define( 'NONCE_SALT',       'xylAZP<rl~z$)md^qL{<*` 3cDQf^p=0)AD$TGQB/I4}Mk+;~=j(zJ9G*l~vzs6,' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

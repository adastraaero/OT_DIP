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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'wordpass123' );

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
define( 'AUTH_KEY',         'A:v4@h>wBd[IoCL`Fe`yNs@V3LfL! *7]%y>P/iQkR:fD-5Nr}OI}dbfQ]/{Top|' );
define( 'SECURE_AUTH_KEY',  '*?l0/4*;{1R9a=|^!goyhi(c6:*5BZbU%w@Tb]izZK2zdhEY0,zvqyT&L04LO|SE' );
define( 'LOGGED_IN_KEY',    'w)1>kc/WK|@9o)e%)M)Ezk`6~DMTyd2,47,@(Y`O/Y:<#t4bKx5q=y@>Go]D5KKw' );
define( 'NONCE_KEY',        'Feb)D}J7_[nrjY(Vy,:B1lC!kdgu&[L|9i4U)9jrqsfeb;jiAjj1c_@8jK*o9Ht!' );
define( 'AUTH_SALT',        'jb8bShh)/Y-N(Fp_wi*YhT&KR,y@F8IVpw*aJkO+e|a&&d115(I/pP-uPlUct<%V' );
define( 'SECURE_AUTH_SALT', 'j.:M:<7YLGk#T33dp.];fuc}(j9]q;}w>tdW6`sgl4/$?DVeD,Dg9FFiZ3&,Q9c8' );
define( 'LOGGED_IN_SALT',   'cUo#@t0{/oJW+aKe(6iX{tL<;y%jaciO.m{z-jUs|9j0B]gnDzdpf *-^Xu,#Z,z' );
define( 'NONCE_SALT',       'O)[}/9b+. LeWM$WbY#~C#!.v0y}Y*Of7*Vy>6uJk),<|04~o@ud58u%*5A~3 Bn' );

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

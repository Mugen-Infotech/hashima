<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hashima' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#|PccHoOnD2m#y,PK>h[uAye2Qg<EDTOHmdxFrhm?h7:W|$W-|SdXyB%x@]6r!0t' );
define( 'SECURE_AUTH_KEY',  'z<q!SLjZSsH4Qd]{Bjg-d]>RxLt19}Ip-&^ZXE}+E/xYue/?+8~Xh2->92ENO^@X' );
define( 'LOGGED_IN_KEY',    'mIgT[W/xrB@)?/bnuj2JU(Bq8gXI:~h-|^IXN>,4qxCSjL7mi9X{6h`2xBOZ!qv!' );
define( 'NONCE_KEY',        'bnkU.|t%~:cwZcV/:s~&K3|fqz-O5$t]q~I_ Q:<N> xYN=K~1~yTkCg16>xWqY>' );
define( 'AUTH_SALT',        'nNam Q^G*&:[F-^SIpe;DyN* U*gcJv{P6EZj~S!Qt|>-1VWeGtPbhUw?NWm[3%.' );
define( 'SECURE_AUTH_SALT', '5RfHACih&BJn).Jw|aA/jRNz2~1W4}-Z4Cn?yC6lK|&ijC;ajV8G:Ug1U}k(>LBD' );
define( 'LOGGED_IN_SALT',   'l:+}Mq@`v^qul:1?/<=c`1e!geokZ:G8*4Au%^g%~@PM%|7z:{EF|i$otN}*hwwI' );
define( 'NONCE_SALT',       '%u~c,Pv`Myy7z!r]x7U98mJs1a{*@,F>U*PV_J~b1^L6HDP81u7gM6$I.%de5+m}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
define('WP_HOME', 'http://localhost/hashima');
define('WP_SITEURL', 'http://localhost/hashima');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

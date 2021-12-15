<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sbs_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'T0:Y^WzJsDGu{7ygfs!IB%DHsfL?B-}|Sk}Tbz%:2OKn !ci}A-_}e]U,3DE7Y*b' );
define( 'SECURE_AUTH_KEY',  'Xs=>uO}r-R1w~afiMQJ`mlu 6`*:r-Pa)L!3XQ|{1K$7.n^P9)5_hvsob$J#IAjB' );
define( 'LOGGED_IN_KEY',    'm5i>?/jWzGk~6&0n+]kVGZN$ 3KdX7W`ufq3Mp2S!39=Tiz%>=8(fSc/ooRtjyKB' );
define( 'NONCE_KEY',        '>NgDI9Y<*RCF7vSMMAccRYs{.~t<Eb~q%{?WJ7dgy;n[)b|<PlN6WAEovDVp9?(U' );
define( 'AUTH_SALT',        '_#^m U]02.{Hd}?!%his$B&?|*; C= L Y?k}5[9DDJ?GC3ZXW!{[f[[m8Q)Iu: ' );
define( 'SECURE_AUTH_SALT', ';CW=;eQem/xkPNb|u(o:>7eU_|d8a(8dU  4}&rt}lY(81#eE).aYfuNU%sdSi;F' );
define( 'LOGGED_IN_SALT',   'y E91Nd,nuI75J1e|?@p3v!7yxg:=`H1RW`%LLtd;w8(!evX3o.nfo}!3h^[=FIm' );
define( 'NONCE_SALT',       'K^l}u4*73#9>L-~QI83n{;Mwr?dLP!If(wY;MVLtL,O+aqO+y?,|@[?B!!>D;Or{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

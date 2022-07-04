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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_shop' );

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
define( 'AUTH_KEY',         '}W]pd[(#5iht9@Ud1!+PT!$DC$X?PX!Eo9WGI0lsubw<C6F?s(^]]wEQK!-0.=o7' );
define( 'SECURE_AUTH_KEY',  '2w)PkIA>;(yc`)Tj>&^HQBLR;aMGRjt^r-Of*TA&.@=q%?F|3_+]tPPKEs%B]rqS' );
define( 'LOGGED_IN_KEY',    'C7&.9T;8RJtF?Mp@:tuHu>zGCZ%!jU@n!@U#7Zq[&P=6(pEx7Lb0iiPp7?{ydl-V' );
define( 'NONCE_KEY',        'bpJ_|E+h#c(aeL%I|t!*4pT~d*=d*|y43-c;ix5#4&l>}(xru:2^WcyUvT5 49>/' );
define( 'AUTH_SALT',        'H/kavmZsgp$:Fuh}A5*/Gkmcgnv~+(vN][B?Tf=t2#u5R>hxrH!!2|8}I{]imqcX' );
define( 'SECURE_AUTH_SALT', 'Pm!(AQebtXVAqV.cis!lDJ,WiA(peqQ({sbvY^7l[}+30UrkwBX:Yd%oxwOg? 7y' );
define( 'LOGGED_IN_SALT',   '=r=7@`E9m&N`zs~;?6ABtI!p?!g_diK0g ?^)>/+,;NQ|*,5G|<hGaimz}9{SLHk' );
define( 'NONCE_SALT',       'z9=rS)j2SGwB~x9JY]]%kLUoOV-dFLM=:p?x0!26M (.wWP(O:z$kUiN1=Iw94.Y' );

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

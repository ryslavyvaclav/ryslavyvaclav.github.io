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
define( 'DB_NAME', 'ryslavyvaclav.github.io_db' );

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
define( 'AUTH_KEY',         '.rtIc-O6b%2.X%w[oCmeUFJoVn+lAQaRJcyVsy1)Lx|oxz/ HJ5b?]BJ)J8iiO!^' );
define( 'SECURE_AUTH_KEY',  '073)],//Gfe+3710~KT0$WG?9X0U*fYKCHL=bQ-sN!~s?F90S`-sn<1x2_eeS#5R' );
define( 'LOGGED_IN_KEY',    '/s9eu3<e2=Hp}fA&0&Mm(m[/LuzyGMF%2=90lHSUc)H4BCBF~[w|}A<m_^R+3>A%' );
define( 'NONCE_KEY',        'o4<UMRU!SDU;py`V2+ }zN XQqt&*`93Y+kM38oqP[1Jqt`p6TyMy0C.7&j_x]Hm' );
define( 'AUTH_SALT',        '-y!#:o7m5C~SD/X&&*zvZA37A])fM+AK?Z<<u#9hX_[=.9Kl(j.i1,8?~iXXou(m' );
define( 'SECURE_AUTH_SALT', 'G:%.ash0)BZdVha):6frr**f)h5,+iCHU|`5;AB}znp0`Gu^dh5Y!t1S<c{^FNP.' );
define( 'LOGGED_IN_SALT',   'y]qY9 +-RJ`z%Y1v^[pDPJ20dTtUpt/~{WTuinEmu5.v+*`=(rb,i,!QokswXFC#' );
define( 'NONCE_SALT',       ')e)-AW.t Q>uMY/%@]Xnyx|<*f/4QFyDcOVl`~+~:^J1}e*1E&a-c%4S_N2scdZr' );

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

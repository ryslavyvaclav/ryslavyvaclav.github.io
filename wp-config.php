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
define( 'DB_NAME', 'RyslavyVaclav_db' );

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
define( 'AUTH_KEY',         '8}bJ(a.$>8w(RoX|3z#I,sdfFxO5J~Mz}/##zZ;re;1y_`-(@^R;!>$7^fA8Sg8Z' );
define( 'SECURE_AUTH_KEY',  'g4rs`W<o -/*ZdJa+|iQP!@%:#gJCQAg1/<J??[Z0^4XPu-Or *F_nTRP3|+*43D' );
define( 'LOGGED_IN_KEY',    '9`@Fx[@vzMlP%Z?no>rzVViqXKw8,R6sj-uj00>=UA-0q+i|r<9$ghsGb$MfTRiV' );
define( 'NONCE_KEY',        'wPb_S,|N<?N<(H;wgJJ>+TJ|~dejVT3{fY7kE>X+Do[|))dq>8<Riflj~=Kt9wNB' );
define( 'AUTH_SALT',        'LVg<7jd`tZp[:kK=U&/D!9R*h9anG55@f1gR-V.uXWS>`6x])_L&)vu`LY~0 Ljs' );
define( 'SECURE_AUTH_SALT', '5o;n;h:[H)w8`C#=ADbun`bBk4+nt1KVJ?CG4?.m{V0L.^Ze~8{#Xk4$.)+z8+Gx' );
define( 'LOGGED_IN_SALT',   '`>_svY}d]M(gd8LYFMs0^ngMM|J@ihDGq(Z:;R$lg:MPN0s8j![8gO=SRFXy~.^>' );
define( 'NONCE_SALT',       '{A,|VX~~Nn)/9Hs~U4y+5:LcA;xrlVG:p/.C*eXD2A5=&+4iOxXwcc@sqil(}$dW' );

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

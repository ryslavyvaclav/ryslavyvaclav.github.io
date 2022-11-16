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
define( 'DB_NAME', 'i_db' );

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
define( 'AUTH_KEY',         'HKKdsXy;/>$FT#{@4st)/l:<]*#r8m|8%8-w+}X0;h|}tgj^>5>HxIGt E=$ 96w' );
define( 'SECURE_AUTH_KEY',  '*!>b6cf_&Y}mM63nALs8iI*+]EJgirJ57%#@ #)9?Y~zCCpvQdO5qcTGn/eWYF:O' );
define( 'LOGGED_IN_KEY',    '9yVd=r-*s7@js0m=`eQ(VGJU ,V:$V13Lql1TE9%lUrwS{dABE]/{4Q$~{k6BnhK' );
define( 'NONCE_KEY',        '@m|faK?O1lhXbc]UZ8Z2gp>d;OWH!FG/CQJ4f_Y^+Q6@kA(2$ nOG`Mc+yA{ >@K' );
define( 'AUTH_SALT',        's.F>Ic3A+c?!p1$^^yMVE2!rf7Xwx}0;K>]/l3_4Oeb{:eoL;n%(ta$tDSIls#8e' );
define( 'SECURE_AUTH_SALT', 'fE8A+)?])tOIo}_b@K>E7VP6+~55-5q$=Xtz/]I@BUtSN5|yepW_;^7/g,ifwd:4' );
define( 'LOGGED_IN_SALT',   'q*Qm2T(x1L0 mvp`mlIo?NE9RajSzAZvXKlJAO^D|qud7~i9#kaq%waxywj6-GpC' );
define( 'NONCE_SALT',       'riC*e]M[s!}Z>MxshU385P)skLO[u4XOTla~RK}}Q[C:<jZTCW`<qNBspF/X nea' );

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

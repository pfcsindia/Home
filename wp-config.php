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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'home_db' );

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
define( 'AUTH_KEY',         'N;4crQeTC3K9t.zE150~e_I3# %+!9^%T#:=e~-9_|Vqm)&!jfu2dy!K+ei5MMdJ' );
define( 'SECURE_AUTH_KEY',  ' QDy7NX0?+U>5zu:`h%L!f=B9%3M`t@V0w!$(G-Wg$}`a6J(GDMhMyCn/9`$^=2&' );
define( 'LOGGED_IN_KEY',    'X t>kcZQ`L:~1XshU6Cn#kFjTif5u&9$R&IV<!b@Ut7i DSz6S,yf.Hb[e2LB[R`' );
define( 'NONCE_KEY',        '$9? prOE=PxR#<]*}xNc {5Ws%Cnu*-|,4g[/nNMCQvFfGnWt|t@q|LF}I)q<v9A' );
define( 'AUTH_SALT',        'm8#{?;5vAn@~`:]6[0QLd2g>Zw.t3W5?d#Qc~<_oj:]FN#28HKq.csYS8WKnT:<X' );
define( 'SECURE_AUTH_SALT', '> j<8qwD#PLI1BvTi>T=JMWH)`9YMDh1K{ij*t7E^%M~K*rqv&g.,bxLx^;cM&Io' );
define( 'LOGGED_IN_SALT',   'vD#1F@}wXDeakTbp>K3qo9:;(;=P&(W?9#o|2;oy?f.ierZ$`&ukP)Es<<~MAHDJ' );
define( 'NONCE_SALT',       'Hn0; B$Q!>x-WO:(/+=<m~|s9e)X c3xNf?9Bs+>ttK)OE^<XE=n0XEJf.d-I>x$' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site_pp' );

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
define( 'AUTH_KEY',         'Va.pIJ#|Td_xRMO?{/<rRf.s$2K>JHj:Lyx%]-6%3e)R6}NypFT--Fyfc?V9>SQF' );
define( 'SECURE_AUTH_KEY',  '%pg/.$^fJ!1%{P X[h.;aY%%RTQGN)0LV/x,Rd%N5@#l%T>pr?]q[02bK-CkMR#H' );
define( 'LOGGED_IN_KEY',    'w!mIL-c1t/ou5:7z$p|)4e,cC=u23-hvevOd`f;h/yX8T:6/(Hw^65WrB+ER3BW{' );
define( 'NONCE_KEY',        'gmgW%76S9W`fNb,6,mgVald)#+0.7mT+AL`4j`OL<NhP(!T0<s;Z+.&&9vZLq?T{' );
define( 'AUTH_SALT',        'e@y[:2N^TjE_EJPIW{8.2Qx` ,(7zD|gxi5PF@%+$::K#lx4J~^xSRF3%}`PkW;~' );
define( 'SECURE_AUTH_SALT', 'M,haJ9%n3-O*:VN4$%OVVebDR._!#1hK;g%!?1xZ/RYD1a}2I .zC[!HNHZd=}e*' );
define( 'LOGGED_IN_SALT',   'HWn8~T0XQ)$vz^A_bX92Vd<HI1eVlqYk@WQ<3J{4dtTW4.07,%&RdFA<6=^hKJeM' );
define( 'NONCE_SALT',       '&> iC,U0B[S.gForq;7ml/4E}h;clU)sqqY#-]+5S0v)fPpF_bH@2W[JN?pvhXtu' );

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

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' 03sPrXt?ubkn+*wO`!aZ*lz6b+5yrPXsk@Tk-,`<9+aG#VQ~cT^S60<Ptf0FwD7' );
define( 'SECURE_AUTH_KEY',  'R_?i(?(f=A-(<bN+=llxKw)2,op|TMGRbE$w]u4*Nd{6h{|DlXA*Y7&)t,n>^}0!' );
define( 'LOGGED_IN_KEY',    'm*.>48tz)O30{L(8t9e;D-=aA/> YX ky`6&|t-SHz(]rr[|y296Rw[nf3+=Q#Up' );
define( 'NONCE_KEY',        'VT |F<z3LkxtVG~QD]@gK{9n$&CfKI-D+SU%J^t,e{Q0 zdA4n2K1sE^V_;c&3}P' );
define( 'AUTH_SALT',        '-Pu*<Gtk^r0jQpHN65iqR_-8@fT;.[Du{G5>KoN{{U_8$BV3YNM_uJBoSC?2{*ll' );
define( 'SECURE_AUTH_SALT', 'm#3=7u!Q o+A *Hth.z{hz8g|~G*b#C}%&:D6cp1 ksqlF65`ArHiR@Fd.t2Zk,>' );
define( 'LOGGED_IN_SALT',   '+:s]V}n`JbY1q&k*}|Nx{d?QI)%c#o-eDV1T9l4vf~ea)^`J}TIe_z9jGQx/RZq#' );
define( 'NONCE_SALT',       '[~~,Oa7[9Gs~4 }gn:PMawH~e-)n%Gi|JJPUZZ:W7LuKMUcF~SeJO>C,M$|8wyQo' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

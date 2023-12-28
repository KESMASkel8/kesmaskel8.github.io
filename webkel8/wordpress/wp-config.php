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
define( 'DB_NAME', 'Kesehatan Lingkungan' );

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
define( 'AUTH_KEY',         '<![h*AB/hvqyEo.W{OsyFtD|8b 8!ix|sf@s6=}Ga>2?s>Yv%(<O8OVLs36CgXj~' );
define( 'SECURE_AUTH_KEY',  'Oi|2ck=G55qhQN{sAs0|<q)E{-FV?]C5 Wvh>Gz+,fgKy:PBM3hp,t9+]8+4*~AX' );
define( 'LOGGED_IN_KEY',    '#dd3amFqm2piPmxhK6m&b<K.g j%mx,z%P*4ob6rX;=?xo$|GWbmVZ#;UmG!Eu<b' );
define( 'NONCE_KEY',        '-{BqN9)p4!jN>RWN:AE<5mejZvpTe9)L].RO2_LgaFJJf^>a,$FgNOv90C%Uy[ms' );
define( 'AUTH_SALT',        'Ei(^uptyN!z&3tM3FM.U(S`pi4 03hPV~eq)UO}~Rq+=jZwg{{1@DAX}|Nk%hs(N' );
define( 'SECURE_AUTH_SALT', 'DO5NW=^|~Y.K7:f<D)$vdFu$N7mapu@M~S?>0zi4,6_?WJk>X$]^9qD-`9uJb)!x' );
define( 'LOGGED_IN_SALT',   'fw40Od?!qi<C|1l.8{3-PdC]kWFnLmTb y#(vK0[>kh4NM%J1?PiuU$-p;p@xQ(e' );
define( 'NONCE_SALT',       'KASs8(|lT% w(>=s{BhPt Bs|1tlmn7&>IpD-|Fl0*&orW|cE)da}&21*czBMJ8s' );

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

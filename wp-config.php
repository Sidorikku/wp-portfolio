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
define( 'DB_NAME', 'shiedo-wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'u5k&OdgJ:6y p]Is8yT>da-|O-7E7^J03A }UL9cR<i&mwm[MHvUj0:6hjCtUp=,' );
define( 'SECURE_AUTH_KEY',  'E`)Qv%H!~6[]430BXU4Xm.e>/g4L7ZN7s}|nggpIw}$~uj%cj)DnEHWaqb=G7&9-' );
define( 'LOGGED_IN_KEY',    'JDs`_}:p4:H3D0`eZL~TY<i98oQ5peYfE_M^eSy2T0&*C!C5UFZoX.Hq}%LGg0cJ' );
define( 'NONCE_KEY',        '.H`L;@aU?BCOB%6wb.;=mzEYFh(9*%;y3fv *wS$rrYk2Z5MdU8D.msY u{rcUIk' );
define( 'AUTH_SALT',        'X)dWPv}CF[#eXhf5x]^[syC)a[;eA,Z|-{+2Hk)_rrGkdn,9)c$8C79TYn!@*3wu' );
define( 'SECURE_AUTH_SALT', 'emKrVtdLD>9V-S;(mc1dok}I3+nN*Ik0mZe&!VNAxCtGU|AoSX~v,L*-I2kgG}L)' );
define( 'LOGGED_IN_SALT',   'Pb.#I){iC[7PF;ee=0<MB(nm1O{8_ocr3w UXVsd,hB(bY: gh;xXhA]7y$%`b8m' );
define( 'NONCE_SALT',       '&X}fZ`wAfX0LwZY[im2YoM;1(zQ:DKcYRQ*@AVhi[CGY1-TMe>m~@.U2L(~VQ1&~' );

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

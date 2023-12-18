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
define( 'DB_NAME', 'portfolio_bd' );

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
define( 'AUTH_KEY',         'kfqV!lV,jHU.=m4x#+Cb`_<ku}_zU;}7Be{WSCaGP$d5$^l[w+}3`=FU0[MBh1so' );
define( 'SECURE_AUTH_KEY',  'Vvv8+%O:WKeErus)?I{~5+5&4~f p9>o_z>saIJPfFze2d/6rNQse)YH]!L#aE?#' );
define( 'LOGGED_IN_KEY',    '#VPB/xdw;Xw(P<CH1`qUC53v{Gm&Ws,CaQ*R*e.~|?x~IH(<Y@h/%|H93-AV_(S,' );
define( 'NONCE_KEY',        '*~^6G&ptsxFi+1[ G7meR`~l?c] zKvU$;y%ru}^se8DKf0Q;l}]G3g;AVVPsZW(' );
define( 'AUTH_SALT',        'RV6T]tiyH,oB&mT?jt0`cB2lkFm]qnXD+s29U4.P,W &ugRz/T=L47/jWbMk8j]9' );
define( 'SECURE_AUTH_SALT', 'SL/PdZ8U6Igo9ow-z/=g2La)!pnejS#9aA[0 S82s5F}_mf%:srkRaBzo&!PY,8R' );
define( 'LOGGED_IN_SALT',   '4E-n)%$bm ,y^eY=LhZ:A{)W)w_M>X*q{5@gK/rm oD1PY>J^Y$ym]NXKvG3s3Ks' );
define( 'NONCE_SALT',       'xxC*QVs==^$ .kphA~f.Zf^k(4gg4A^n]T^&5>gBHS?sb?y?g^vA:EwsJw5| ``g' );

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

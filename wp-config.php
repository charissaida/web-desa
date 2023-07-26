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
define( 'DB_NAME', 'web-kkn' );

/** Database username */
define( 'DB_USER', 'mendalanwangi' );

/** Database password */
define( 'DB_PASSWORD', 'mendalanwangi' );

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
define( 'AUTH_KEY',         '&j4QB2d/!vUC5A,@}a*L>:IK/zC6^R@y<xR>j7uQD:OSMYjWBJ=]uev(F}p]Z|D(' );
define( 'SECURE_AUTH_KEY',  '@kLo<7dkiE;bv<ge(h5c;Z&[Qk1Ke%SO`A D)/GPZX ^XYZmOi-dP xsH8(qz@>/' );
define( 'LOGGED_IN_KEY',    '@XR:}><.TKJXw^!3+S|uuTd(RZK X/ibmcQG9*|0J.op{Tr**Gt6JZl%V.J#aG<V' );
define( 'NONCE_KEY',        'XJZ1`+M+:,n#tO,9]nq@$;U>N., dEV2uGU]&y$^#.[C*+hE;,.W@X!;B{X`pxF4' );
define( 'AUTH_SALT',        'MJ.F}J}WZJC{r8?QUgnuhN?rj|l.~(I$RlT:jo~cf;>!!&$!|t=lu0eyqEqR>|^t' );
define( 'SECURE_AUTH_SALT', '((UG@CHU,u#7?YFIdxvS!@a#O!Zo:PWK;u{k8&UxI>k(^!O-@Q/va!)?l(GXE}IF' );
define( 'LOGGED_IN_SALT',   'dRW^8NG9.SX3sipcvmtl~+mtYKmct%{c[,DGJ+6A`V5 poe:A.D:~d]rvk}>5Y;e' );
define( 'NONCE_SALT',       'IE O+%&6##!Zc~,#,n2>TjV2_ZU)8d?=aA3jEf8[9?&#<lh9lonYTxe.OpGDv,k7' );

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

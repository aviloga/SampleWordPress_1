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
define( 'DB_NAME', 'businessweb_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'AJL@12345Love' );

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
define( 'AUTH_KEY',         '.%^mZe?n]C(k)6j} c2<?IfA UD#^J@qb{*)/3; EekMU_RZ#)Dv([j|<SityQRD' );
define( 'SECURE_AUTH_KEY',  '(4|h>b0t{0e~Th^q5@5|HGKdxGij$40#Rp6SOQ)v~l#iw^vLnWm]LyjzlEP0828g' );
define( 'LOGGED_IN_KEY',    '$0!H]XMy@v*9En`Of0hhGe?%9V=,o-VNS] >1Q1fRXM>^Jil)2hkf8zyGdyT--k&' );
define( 'NONCE_KEY',        'Bz%S6U;M?V%twI$93e~Cit[8_/KZ3v:K T?Z6j4{M};XG]&`xa!ZG,{]b>0HQuk{' );
define( 'AUTH_SALT',        'jXm~7tx#$Nt1EVpM &lYxI^yU8.t5fU+`MGgMi2?T0;]%L@Iwn&UMCr:BcTiF%Ma' );
define( 'SECURE_AUTH_SALT', 'qa*#Z8kV&*Eyh>9o#c[;lr2Zwf29,T|6sPOAl8k65kYO<&Oy>rGlL$Jq@F%T~:eL' );
define( 'LOGGED_IN_SALT',   'Bc(,`-y+;buoyS?]y+s$X~*JxS}AG!-yfEVxn,f_7Z,zt`_yWN7n|=n4J3uh)AzN' );
define( 'NONCE_SALT',       '>GpjRxpxYWhg.Yh2dSD mOzQ:z66fXAA=4` /P_p_98U=dm{6cuu.U/t#+r}Ll:b' );

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

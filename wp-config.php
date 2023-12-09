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
define( 'DB_NAME', 'movi3_db' );

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
define( 'AUTH_KEY',         '`D7O-|h~^dIOsHS {B_&IK7 VYa_o1W?)PEF6vG`RAf#DuYp ah%X_g;CzfuO#IC' );
define( 'SECURE_AUTH_KEY',  'KedC~Q4Djg`!Hgzg>:f6DMIa:`6qgl7a0=$t&odtv9#R(9j,!U1JtSBTd,k@}^I5' );
define( 'LOGGED_IN_KEY',    'BEv#T]v_7mn[{K!Ub#qRNX^gDBclB4m9Qw+s&Rz_^iKT-n;HP!L@.`I?dWa[8JO~' );
define( 'NONCE_KEY',        'TnN_wl3MT+#B]S?k*P}}ZYYhne&VLJ&hCG-2) ].c:J{51!1tgMx|{h<QoG6wNqi' );
define( 'AUTH_SALT',        'H&U:dlG;T=:=eVc^1KOh%@k)dv+`xT9(O^z@re%b/%CJmt3l>STfN@{J:>PI60(f' );
define( 'SECURE_AUTH_SALT', 'HB2>07-WLEyDsy$QhjqHl7D!!Zu,:20PM1n/]yLT=1s1pQs]i7afGJ(WRcN}m}%J' );
define( 'LOGGED_IN_SALT',   '&qd=yE/YXUbpIilB^TIcm0h2O2.gF[=lN>^gPe^_~{n%qL4BZW5cE>zt*5-)#$xX' );
define( 'NONCE_SALT',       '=#15WWZe.8-c~1KU?9`=q$CuXvnF>`mfV9$ mY *Qu8AYJ&5w#&5&|0-+&=xMw1N' );

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

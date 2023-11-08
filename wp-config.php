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
define( 'DB_NAME', 'nature_db' );

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
define( 'AUTH_KEY',         'OzZb9V}|uGesC*T)NY*.DE;)hab%}K<Hq;ZJdt6NAdHFM>nMDtcX uUi(1~O~,,&' );
define( 'SECURE_AUTH_KEY',  '^qPy0CV502vs!w,0<uK[>AFxD3}EBe^.CU39[MDL*;M%p+G/!Cx }tg_s1GBszQN' );
define( 'LOGGED_IN_KEY',    'L8{Ro(<_W, ufKKF)3qHU$8ngpb{QhqO+@`_Q1y[{2fWpR%VWXk#`}Y UHO{QD82' );
define( 'NONCE_KEY',        '&sRG[{H,:EH4T<AI].H/t%>7K$?uYQ+ba&fb[#:8!A0VG}[R0CnPO!6zr$_nX(:.' );
define( 'AUTH_SALT',        'OJx9V-@Uz,l.z(Q+jW^@gdy244t-7+>itxAhca<6VSP#3r}} bVHL)v0|>34OV#@' );
define( 'SECURE_AUTH_SALT', 'P4C:yE~@mc7,=vv754[6K}706OscV]P,{cjYWIt ;?OgV`Ew~pf1?l0 1p0SHUu+' );
define( 'LOGGED_IN_SALT',   '.(YzaJr +;?-qi w#).kB5Os&!`&FW+m^oz$9fRmHlK;jYOY.adWimM[|&PxuQeu' );
define( 'NONCE_SALT',       't|2.EdK`i|7[L4Jic&#%,1&B+eeXb#,TR(aU*[P5i!|`|7sr)>t&!a,((94,B8b_' );

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

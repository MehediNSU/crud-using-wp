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
define( 'DB_NAME', 'wptest2024' );

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
define( 'AUTH_KEY',         'UptpQq^zsYB9jLh|(L)%36g?.iClglOWBr*b^^BKPCw9n8Er<#E,NT)$9qgx`(x)' );
define( 'SECURE_AUTH_KEY',  'P0`*{`*PS/SAiD^5bZzDk:b9.Xf3qdV=CReyyNsrh4z*D`AJNzpjCj<4y%BR]JR[' );
define( 'LOGGED_IN_KEY',    'N6 _e.WGo&KE08#),PEtV~zb_4ZGQ*h2f8zT2r~{;:.G!= s^02EBUw%uVsJ~jE<' );
define( 'NONCE_KEY',        'a{IzoKPu Zw.y~b3-OkBTgeM+tS6&Br<*5K8PP$9v)j2F@e8`BUwU8TwTG@yxGKC' );
define( 'AUTH_SALT',        'z:_>:?hd)F97!ew3`MCRlpwv>.hLKK18~eR:=8g+0X+.;mDdHEs(JNiLFyz:38I.' );
define( 'SECURE_AUTH_SALT', '<~7x|ch|yqcvfrjFbxH,EQm7@Z=z*AJQ+=*|e<{MB!cuAy#$$,rdZgN:TwyOZcQ[' );
define( 'LOGGED_IN_SALT',   '[l8S=&)W*4>6/Kr83K6vVUM$~A=P)QMLEGVL5_): HS>D%*wog~%GZnxW2//yPF*' );
define( 'NONCE_SALT',       'Bk~um-%Z2.D 04g8VOfK%0#na}sZ3=xiRD9^.gdPS^/Wy,l`162lC3x^<Y1<)y[Y' );

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

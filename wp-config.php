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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'niken_moter_rewinding' );

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
define( 'AUTH_KEY',         '*5;}j+B+[v2hkX4uOaGr`@0,P4.Uc!IWZM])ea&{i/tdw};`7RWE8W:joVDPaAvZ' );
define( 'SECURE_AUTH_KEY',  'V+OPmf]WYyltTT.!,i o3t`W8KIzfg%7CXo-w>HGzFn(er4<E@P0+.f@{MN~9)r!' );
define( 'LOGGED_IN_KEY',    'H.>6bp-PGvsb>m(i!XqKug)51`OF~M`!A]I8EbG -i[t?>H0EJ*JrEN2u+1|smHv' );
define( 'NONCE_KEY',        ';Tg14+zFS,A{%fzS&_?}{e|3P;Y4[%6vng?p5e~Xs^v_L?Yfc/#h^|{3q.~ [33[' );
define( 'AUTH_SALT',        'Q&A4;s0d%Rc?D4n&F~mVta(8?Oy#vacXND-{SsI9bKLA>7*O*nr A8BH>)ZwH ;M' );
define( 'SECURE_AUTH_SALT', 'y(SQ sS0NDm*h94$;Hxyv;|u5%Mr{*)awZ5dCS>D,OXZ6s/X&8zg$}a/o>^XlV?X' );
define( 'LOGGED_IN_SALT',   'ls4{A:=iZnTmh<>lul5`:W !W219fha#4])3p_^|o[sgbl#H;OIHno>_^8u~d`8l' );
define( 'NONCE_SALT',       'zk$c2nxW9-7x2UGw1vkI@-;kA;nC|f{d8iJLYH;B+v?; ygai;&F6=h-n?fcaU77' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

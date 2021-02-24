<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'twell_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P]P<-$pkKH>lXWI?Pi]eJD{KD5Y-PM#i.2jf}.A7k/?glJCJ9*[rz?XS,e;lBTs0' );
define( 'SECURE_AUTH_KEY',  '0 NQl -|^~nT^V+mL=9D7gVRzH~e$j)$U@*]$ m[>gO<.kM}`s`$E8paEgWG`G$#' );
define( 'LOGGED_IN_KEY',    '/k*eyso4.Af9Tz^m h,!DT4t(YuU`zwZ|0ILiuE;AIM:{+CFW9eVh>&[?61hNw3!' );
define( 'NONCE_KEY',        'Lj%boN<Hy.4{Q9Y&=Q*hf],2B}UScG}$We^3>.g8=)if=W2=<,odk|Mg_%;]<vOD' );
define( 'AUTH_SALT',        '|oq g^4G0mwn9hn!Mj[* J5<wR>1nqL30[jhZ5L[)l7Xro1>Y}gLhQ2] Wi[=TrK' );
define( 'SECURE_AUTH_SALT', '_B{Ao#YkD4Tl H?ml|HTZg0AQMAaL>.3,Dl,CZhEn,~BrzK68Bf1snaOBt;A]xPL' );
define( 'LOGGED_IN_SALT',   'p=o??ai5yr=CtxMM1 ;Qb*iXAyXhKkMm33|o=&M9PxZ%/=l%l>ZxM/{~l-pf1qNL' );
define( 'NONCE_SALT',       'A#pa+5h9^(ZzVm1ZOm9I]|JlwG=1HgB$>YR<(+,us]>BT6,YhOC[8JF)W[{xl+#d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

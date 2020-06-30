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
define( 'DB_NAME', 'embrazados' );

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
define( 'AUTH_KEY',         'c6``vJVwtX}c >YlBXB(YM%Z3/y*;N^D;nAh&2Cd=EWx8og^&z%a^Yu(9xoQS<Ye' );
define( 'SECURE_AUTH_KEY',  'UDQ:}2Xf4zLSz-gO/2_,nq}2NsGp<x0wT<LyQ%(J7T)T<5E8[%V-V#$I*)`0?>J7' );
define( 'LOGGED_IN_KEY',    'I&.TFBGh/c(f9JqKxn1(0T2)<c{-Q![&*~z#-[MWImdUh-Wf=(On*S,.1eX9@l+h' );
define( 'NONCE_KEY',        'lNQ,SckF=6/_}?LU3Wfa`K&gMp5.,/^m~UqfcjY_*wgRWj{:TZE{Wu2uGS_&PYeZ' );
define( 'AUTH_SALT',        's~uGxw:(Q5C8%}`@z#EdXrf16!,BRr)B}+WYtTpcyFd;%s11S*&`lma@GnyS cW2' );
define( 'SECURE_AUTH_SALT', 'VNaC{Ddj1>U`)0Ut6mcDw-J2X1IC8 :06g;1IM7~;h=}+1B{M=dw0<NL<?VLS[AU' );
define( 'LOGGED_IN_SALT',   '?th@m@@Wbz+`V!0} +CZZ0`lw`NTCD&eI*&UT4EFPfxST{;j2$q?~NqzP=h$p-Y ' );
define( 'NONCE_SALT',       '!1Yl#*.TDE<s8I_/>tZv&@rQ{I&~`)_t72J#F31$-|$}7v<K@7vx8u|XM/8X%OT6' );

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

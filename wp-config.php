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
define( 'DB_NAME', 'qa-mrpixel' );

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
define( 'AUTH_KEY',         ')?1 ~ X@Z/,FwFYXLX]ZeTYY*4BMhbsLA9:trXK@oNn)znF 5&q=XX23Xw%O$q6$' );
define( 'SECURE_AUTH_KEY',  'C_yrXyY%ff}T]RkgT18w/a{!O+DHu(|?y=B?xlixM:@S?2E/1%c9gg`O^qo?XpJf' );
define( 'LOGGED_IN_KEY',    'z%{W4VIG$gUoM~;Z5GvqOG{eTms$oZ>r9uz2UZN+@BnlC[46@9zY]=>F3~S;s%Bx' );
define( 'NONCE_KEY',        '3QfvDtXd0vKd(IBI@SiR^B{FNeTtx?[j.~CN)[tT7!7_E_4B{k(:W<s(Ud)}lY=1' );
define( 'AUTH_SALT',        '*e68*:R<DY=)3yMhX%(SlRH_H}2|/-T;;vUdrlQSo>|LlUO31Y=%$Wyyw$_y-uRm' );
define( 'SECURE_AUTH_SALT', '*vw!Pe*X0A T5oithR7z`a4zd[e-*y3jVU.D2(5SG$7IDNN [/4TRG|I7Z,.lUvU' );
define( 'LOGGED_IN_SALT',   '};Bhn=Xv];;XL6=50LtkEDc_+}-VS*s/]}l*E$[,`0`:Z;ppI{(_{kL(JjTFcPQ#' );
define( 'NONCE_SALT',       ',L7y2^-dFx,b]-<Pz<G9I0>$u2_uap7^61e. ^7#Vbp4sl,{gjOu:^nWH$DNuU@_' );

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

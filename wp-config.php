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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_riskified' );

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
define( 'AUTH_KEY',         '2rDaX7l{Syb.!cDLqn1SvEJY1+o:mHIi90Vsz8]`oUDv[CZTc0gaWgWDqFou|tST' );
define( 'SECURE_AUTH_KEY',  '!=?;F J;wjE{qg<y2=vn_+;a-gW7qMucB*UL-=1MP;yfl0wXqoH|pl<dViAbJ,8?' );
define( 'LOGGED_IN_KEY',    '&1QRMPAp-&{a/YIIuGtK)|>e%^7zc85l]bncRm2A Y~O-g6_Cx&n^zhF~y4;XB<=' );
define( 'NONCE_KEY',        '4pU9Wq%WP34ZeDVfw!eE(/<JW?qzy# 8WbjwEUdQa%oI:)K!kph?T!k+**;!!ip=' );
define( 'AUTH_SALT',        'SUj]<Oz4d[b8Itt[5iU<RTHfJUdC]F [w .n`6lD_+V{G, n(V9B:`x,TDSGiR#r' );
define( 'SECURE_AUTH_SALT', '=kwFmvk ~LvK5?`vi;CT@b9|8{?M_pdnd|tneSsUEKA#HV8|N =%{a+Vc5~f*<dZ' );
define( 'LOGGED_IN_SALT',   '/pSeyDwj#]AaPIVe_ocb;U=8+A@~tMT?}3+AYc*iur0}X~|99,HU-hkXrCj|b{Z;' );
define( 'NONCE_SALT',       '+YK~HII;muZ|P.MsUi9}y|>ni)/pLXtLd#de&`?Q8_D83& df5;`q8 b ZE/:=08' );

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

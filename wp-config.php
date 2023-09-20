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
define( 'DB_NAME', 'konnect-dev' );

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
define( 'AUTH_KEY',         'Hw>k*:M+WfelS-vt:?O`yl+XZ0~C| ,Jv{T.@)M:_FA)TK`@_?H/-&O4OSdIW$9C' );
define( 'SECURE_AUTH_KEY',  '?({ d{o,d` C5.k+a%7?eCiV!Hb- SoVF^|c 5,{E9q[[9?mIysG@u,nh]E@5<Sc' );
define( 'LOGGED_IN_KEY',    '%y_b3/2Pw cT!frRS1;b7FLNT$C@n4^t0$c[zpm`g+qBuBZTB=]WTM@Cp(NEb}L-' );
define( 'NONCE_KEY',        ' nWWS=A&i.+<_VC0yr_yGN~W,Qk.R*{!:o9hF]4XWzmkz|KtmWl|s#A,xrtP WOE' );
define( 'AUTH_SALT',        'GO)M^t^D$gXmt:_0_p~MV!6yreTt:,32Nhx6:|FN7 Tsdh)>7 9L%DIivdo@cb@p' );
define( 'SECURE_AUTH_SALT', 'Tce(=JKN0&EUX6p gVvT.9(pL9PM^u|e?tjZ G$}ryGXU4{Q=u1@88B]sWC6lx-q' );
define( 'LOGGED_IN_SALT',   's9p9dbwh9LTqemIdIxrNSw.h4#V}MyT&DJ6)o2t!O&aaLtkO.79E}WSn}@v!f!/p' );
define( 'NONCE_SALT',       '*~:c~cvd#GqtugxJ7c*[l_]5ZrfMGS:c]?vQ!(^0/+8GqiVB@duT-D^f0yB!fiUa' );

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

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
define( 'DB_NAME', "khachhang_wp_pshome97s" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "d@t@base" );

/** Database hostname */
define( 'DB_HOST', "localhost:3316" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Update Memory Limit */
define( 'WP_MEMORY_LIMIT', '256M' );

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
define( 'AUTH_KEY',         'C~cW|</%9ugl?DD!=f)y1P/Wt#2aR>+Dki6)M?|Q1 _Yk?gKU3B_QHNL_ZSyE%N|' );
define( 'SECURE_AUTH_KEY',  'lXiopg@s )Dd}[7|r!e{Bd9b&0`l{/V7JU=nI0C]%kPDU+%ZQeooRO59&XFA`TQ%' );
define( 'LOGGED_IN_KEY',    '9n(@:,OnnzO%p$hfyphdr0n=i#b{z<&I$m)[F`8Tr5v;0mh3@C7?G[rB`wA){nNL' );
define( 'NONCE_KEY',        'y&+0xP4XeGEnlB<w7KW<Ni>|j3q&}=?[UN{v/k}$Nr3>(I%}C82C:pj|5E>imcW9' );
define( 'AUTH_SALT',        'AyE*km|vQu$gLe=GW09rUPin.@Y@H)dD03#Mg_ %{UuWKo:5*6#j U(kx].,]TQf' );
define( 'SECURE_AUTH_SALT', '$.TgDX>0tP7P<}|,: _~V*]>3@|5CZUky7o_0rKY|bBWGEKQZJZO+>gQn&,Tevi_' );
define( 'LOGGED_IN_SALT',   'VDzOi68`MnCZVgi^Xz=_SUE*o8zdF}PL+`fu9a%g~Hq:P1xqO|7F3B8_bT0-{T)S' );
define( 'NONCE_SALT',       '?DN.[us,z=x+2`)nk -%praPj+*7fAG&cypL/gkbn/7fo[]=IXh<*TX@Yu>P>@%C' );

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



define( 'WP_SITEURL', 'https://pshome97s.local.com:444/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

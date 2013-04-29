<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'punpun2');

/** MySQL database username */
define('DB_USER', 'arming');

/** MySQL database password */
define('DB_PASSWORD', 'ArMing###');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

/*
define('AUTH_KEY',         'Of.Nc@v886-7+ObYBZn`W!v_etq%egE>%Oxck xnl!]A?C9U~N{/WIaYQ2y;tXB.');
define('SECURE_AUTH_KEY',  '}G>Q&|sv|m<,]%!!Eda1xo.t=j6C+Lj S,nh3?B1_2}[A}5]k[Qt{D^`P9}Q8/Z_');
define('LOGGED_IN_KEY',    '/:k12%#xkz-L|w8g;t0.mN{?h|CP={8WB=cP]C/J<r!ESJo*mn`s-Gy5w{T:QKb=');
define('NONCE_KEY',        '0iF;&@sT~2 #,^3=u8f#Ekn^xWF&HeP7CRU-2R(v:=BN{+/vbVv>@w)$~ND4QDI_');
define('AUTH_SALT',        '+7{uxul}:G-pkt^.k7S|R]$vhvDtv&_So&oH+N2du .<FURwynXi:OQT>v*K)p9@');
define('SECURE_AUTH_SALT', '{g=p8#s`jD1=k1MUV|E9>i2>Z-rM<yFOS(<v%fFymcoOA37aj?>&9l-o1h0`.s~ ');
define('LOGGED_IN_SALT',   ')0jHL)(0}M_k)e^xl{89JC.gAC;Uy`f$F=e_,XIWI9JG] 9lZWBtF|^_VdN#*H*k');
define('NONCE_SALT',       'Xt!A OEM0KbRbrO@puqi2YlQ0k#nuofqpbp[Y0|N{mBB$OHn`E-~8/LsdunKa[T&');
*/



/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_punpun_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_HOME','http://www.punpunbikeshare.com');
define('WP_SITEURL','http://www.punpunbikeshare.com');
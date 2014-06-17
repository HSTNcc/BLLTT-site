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
define('DB_NAME', 'bullettwordpress');

/** MySQL database username */
define('DB_USER', 'Michael');

/** MySQL database password */
define('DB_PASSWORD', 'INFOadmin1!');

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
define('AUTH_KEY',         'R<FEp=FAipo|+;%]6kN2P{4e+|:-|6#Zn:YN}+W.xYf](b:;l+_:sHqQy.!u8(E+');
define('SECURE_AUTH_KEY',  ':!=3SNhm?4Ao(--|RRDC$JSYde0iyv+N#4db:Qg.J=+,/:k*o;!Iyd,PXNT y5Ca');
define('LOGGED_IN_KEY',    'y5+ksX68-P-^R C||6|9D6|*)Jf_U]M;p{B@$MSJ>P*Kkll<9AeSw-thVPT(@3.W');
define('NONCE_KEY',        '+eCRo+wrk@~CN%U7kYZ*Ds5L6wk,q36+]1yjCWYDBiG+OhIn1qlX=FHh>2(#?OiC');
define('AUTH_SALT',        'k4o+Dh0a/%$e[:~YvxHEeR.upT&$?I&~^e^57Qg}GvwL(h92c%M/cl+Eb]5#`4ws');
define('SECURE_AUTH_SALT', 'tY3kCD1DEwJ?& dW~ToTA5(!MB%+qD/1S[0+`[T&q98DDuc.65{Za&-x;c^FOC%:');
define('LOGGED_IN_SALT',   'Vcu_MumAp7$7EHRBgF;jVsFb)F)_X6N([d4r<C8HBj`}JJW,cCkugwX1K+@z|%q%');
define('NONCE_SALT',       '%X1=0nsCNw)B2k=/VO2qmM>#B&A {4`-asgo?/%*O08t_M]+7suq-h-J,W]:52=T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

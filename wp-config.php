<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '*MJ7S)=|x+B~k]dw_s|Z|kFv<v%1vEp-I~tK:KVOf7gILp1UtU]N+;2mt<_Oc$;}');
define('SECURE_AUTH_KEY',  '15i2raiu9Mw>3J-!6JfuT,$LEkMoTRa1ps,ve!jS<0/mW2MX`?h**I~QeyjlS)NX');
define('LOGGED_IN_KEY',    'cP8rnh^BUp>qyc.YI#MEFR=#$RW),|t/5VHJ8|8#NS7y!+I&6AG?MFHYN-%iK Y<');
define('NONCE_KEY',        '+_YV[ii/`(ll{Hd_7Yh^^D l6OqN>|&J}lABAhm*2x8uQI%Y|44!2p1G{~S+|*`U');
define('AUTH_SALT',        '>`(0&#u%lm!N3N}2QA,u+$Pi|,$+ $9=3U|!p61pbuy2s$jxtk{h|-JH}!e#q6E_');
define('SECURE_AUTH_SALT', '#ezi} <l&!dI^GL|VE5ML4W[vaD&`;.VO9j!+.*$[r)`ZY|Q!OW[7pjaXw<|y[V3');
define('LOGGED_IN_SALT',   'Et7pr?aI:)_iWEit1 +E;UN|U4g%3([D&*DfQ*UBTH{oy3kTJaVE/?^|5J2q#c_*');
define('NONCE_SALT',       '1k8rK_m=v|MKY9k$qO ]>#CE}A~iz^QwB!pF)mA3Pyd+4 Nl@cM1D`oI,d,F^:wR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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


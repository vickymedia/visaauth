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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'visaauth');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'mBqTg?]`i*s$Jv<r@}8wFB~cs|n)[5AjBK9TdpS5_i&F&+j s^[D8[Pm0 v,KGY{');
define('SECURE_AUTH_KEY',  'o[t{pnkpp0AMZn#g,3ba;ljVma?gqo!Bu)w|E^TqSG <ZI!C@g4%+@j@0vS# s,V');
define('LOGGED_IN_KEY',    'Zt;;|]8(A~K-Gx=Yk6`IlST0{.kc7u$lLW,^Vz-<uq]bSgDOX.b,1wO^y9sBhMU7');
define('NONCE_KEY',        'n<7,+K}<Jsh6U%Z>u]MQW? :W{EiUShg,,U<CLMX<4tYet4VFS?Xn:jxMFkKnpDK');
define('AUTH_SALT',        'g;*/vUAG5mVS^se-WA4>)j?[LUYC hijCYJ3];9[ky%{c_q<#81+iI?EHQ[ J#LC');
define('SECURE_AUTH_SALT', '3QWTH-#Bc!}Wp)YfCJhI,Z1;:p_o72Uw,-+*AyEG <FmVs%l-5aU7I>h%&tS30b9');
define('LOGGED_IN_SALT',   '.m01E_yTm|G(j3u{U9+F3CUrc;rRPz^N*b<g7u=BGoa$1B=^%0PCJ):-rDZlF6)p');
define('NONCE_SALT',       '%;fzC+:7cC,Gyk@m{cE)Z<:ND3~%B zUd>cQdN1/ou,]7zfhxw_ASXH*IAKk%xjy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp6_git';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

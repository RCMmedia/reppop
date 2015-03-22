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
define('DB_NAME', 'reppop');

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
define('AUTH_KEY',         'X.$&{f&y>AUOB:+q_YsHk:MIQtI`D6+F?-2}7XfUfK{^en_MX89iMq6Exk4i4nHg');
define('SECURE_AUTH_KEY',  'tA?rN|!y$OH%Uaz((sYl#I#,feL<-oi*.?M$L.xZ$BEW::OIgs-P;t2AT}p:vamj');
define('LOGGED_IN_KEY',    '+YD$O;&pCaY|ND/9@]$Xy+pJI0G+k.#~Oc@(0$n-*y;EwY}pA+!p)s-40Tpp/pbs');
define('NONCE_KEY',        'L~X3Mn#@~4{}(3u%w?~1|~Q-UdKuWtZ:d3k4n5fm+m}Sq7)S}Y:YT])*U<<>m,KE');
define('AUTH_SALT',        'U2]J3hbdxNtsYcHTdw]xC9= r+sX??=$;W_JLo9o0}mm/+3;u]|~[vi<Ob$7>+q-');
define('SECURE_AUTH_SALT', '$b2`gqRzq~y7RC:6^}DiTfRLT4]9y0.+2IflKguU)2R$AB3BSZ#f_P-mO6&uJSHL');
define('LOGGED_IN_SALT',   'o1$Lo)M_!a,VbtX>?QjPCc4hE3[@OpIN0!/C=F 7V3hd5?fgjQ~?g#FVye(:Dji>');
define('NONCE_SALT',       '<g}4=%+GOH-I#B[1oe+Ei9|F=iY?`:NSvx|j((i6-aD{ek`|^p.{k`*E*|BjacMZ');

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

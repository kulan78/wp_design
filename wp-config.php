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
define('DB_NAME', 'design');

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
define('AUTH_KEY',         '-t?%T=|J9E5,QJ98z:1 %:C7%cf+JGGB%WY^%gg:Mm N/vx0r%Qfe?,GI/^c ~wA');
define('SECURE_AUTH_KEY',  'x9JS[#r57R|*w5gy<x>)bs>ZM3)JHIC`$H-1_a9YFK0mI2CPHJ%@1;u7);`t-*,Q');
define('LOGGED_IN_KEY',    '}w4g<46(y7EAxU8BUI( U`aUz[rbRH%-RvK-%gWp*^ (%#1l$At4i.Hc/U:++46;');
define('NONCE_KEY',        '7:}q=GQ=-7|1[I@^p@ E$&-g37Pm:l9L[*%8%[[Mp.=+dgS{}|OY+Hh3d~MiK2W`');
define('AUTH_SALT',        'x}Lyro0OZhO9,D;ER6[cyBD/y<un[b(1H@iI%||rCJWtFb;|+fUMtm:#yPk}q({5');
define('SECURE_AUTH_SALT', '~xw*2`(SHfS7k{RRtG1#mQq,6[!=wKCTN9_x?kCWInB2Ng=<eAA>y:jLU(2>(4cz');
define('LOGGED_IN_SALT',   'YKn U|GW<{DP&TW%`u{gXm~cl%GM^8,e:_Ls&/P_cv_E$Bu%*G#~0^9K;d3le5KQ');
define('NONCE_SALT',       '_>d~td)TuVEZX|SIzPPKN-YmbE{|xL]^8&p:V!1|c/LElT-[LKtOg.$RP]i6,cQG');

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


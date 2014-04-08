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
define('DB_NAME', 'shram');

/** MySQL database username */
define('DB_USER', 'shram');

/** MySQL database password */
define('DB_PASSWORD', '5_1982');

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
define('AUTH_KEY',         '|9P=;^w<-,Dl%:Rza6ZH|`GFwd$~[hz[ggu1mWws8(^W6tW_!xNYBo`m.`ZhT^Ht');
define('SECURE_AUTH_KEY',  '%PrE,U+-Xnzz&B3fB]m-<=%ksnZHoxmwqJY@Sdm?yp.CQY[@Ssa@GOfr,]fqk9z^');
define('LOGGED_IN_KEY',    ')uCt)RC-!3cLEk|~i:J3`<^djAR&SOmt8ehAu2v*Dh/T1x`uZsw~`CVsXf|huq@p');
define('NONCE_KEY',        '|6*q#HMb|v^v?c}+n]_l3BB4!zPZiZa5x~G25gr?b<=6%.ZyN+aXs1&{0.1}l.]]');
define('AUTH_SALT',        'J;Y=bx]&%d7s;4CtYJ~W^&)B2diCo?5IN.*VS;c[J]msK3NkxA+-2]%pK5x<lNp5');
define('SECURE_AUTH_SALT', '4Q46@${[V+F]Hj?_5O[}v@g)9<q.+@7rC!?oM0ru;:u-b)@V#ao(bOA1<V9UuL64');
define('LOGGED_IN_SALT',   ']pw4PNgQBb$_j[v?W&[ uVlmCxgm+Os1taVcP83 n+.H`|VpdF6Vrhfo+84;Rbc@');
define('NONCE_SALT',       'PniDMB)q!RTlzWU+o4}b[1oQ Jq0-G#:u~KXHhNxxp:BTX+rL8$p]>Fvl-ea6v+v');

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
define('WPLANG', 'ru_RU');

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

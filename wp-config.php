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
define('DB_NAME', 'wpacademy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[?c8P/bIptR5GS#dYMhT^}],W4RI3U?v3<WJ.PtKR`{qn[h{R*%9tvA>1U[5aOjs');
define('SECURE_AUTH_KEY',  '`KlJQ$yHI<g9(?3a7Z~-lq|$3lx[OGorj1i+_Z}-G5r3 _C(nW!Fs vi2CH9}N?b');
define('LOGGED_IN_KEY',    'Mu(pnwxFZ!CnNd4FlV#dxdiyjA:=oZf/ Sa`c-tJEq;$*B/Yt/f=o`+p27P5*@jg');
define('NONCE_KEY',        '6+nrKY=F&x;W~~8(P-9;Zx,f|qvG {F $Og|Nt~Pe%k7^8?*-`fdcq6yY5W_DR-e');
define('AUTH_SALT',        'ct7V~TUT;ha8w8oZsdUQWB~::naMfvfCN|IyYU/Nl^h]kU,?3hMicTb{cSUgIxE+');
define('SECURE_AUTH_SALT', 'kU3Y{Z $Tc,!#%!X?+U{mz6?E8=>c tszB|+81bS:_ygsSd>|!wPjRF@;db>e`d$');
define('LOGGED_IN_SALT',   ',6$f2|6P:?zApbI!1l-NIXNi +W.FHrc`e5jJ]azxEwXQi!#3kcnl?DhZZz>f0FA');
define('NONCE_SALT',       '+3;sAU5Ues7VMe#b[z>nK/=f9!?Qsy~&Oy7<+iUZcmxus_XT[gRH)_gdh q.>}jO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

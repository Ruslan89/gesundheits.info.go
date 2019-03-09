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

// ** MySQL settings ** //
if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	// Live database settings
	define( 'DB_NAME', 'ruslanh5_universityData' );
	define( 'DB_USER', 'ruslanh5_userOne' );
	define( 'DB_PASSWORD', '.w=wc8=+-wa?' );
	define( 'DB_HOST', 'localhost' );
}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#2K|[&a1-Wx$q[jm`A&QF7e6Y0i:=T8{p3/`|{=+by^OZn|E^y_P:*^/fSV-$]f6');
define('SECURE_AUTH_KEY',  'i8gO4_AwhLx&0!W]g5{![s.Mu!K;[m{f.a6_69~Z$7U*1`.Jf3B=oUtKBy4tU+S^');
define('LOGGED_IN_KEY',    'Mb+~8we-P[iuupotBJB+`EUD/UZ<sBeC8#zqd-]p-U<t.R!|;Y_xUIB/XU5Yk+t:');
define('NONCE_KEY',        '2H_;3UbUlIW)cUKPs$]O_>a[+|5!-L#PZOWyIV!.UK: P}DUW4.6Ne{~<=N(^Nb-');
define('AUTH_SALT',        '9{!^^TSM(ZqVDm`?R,rOt+,J!nX~c.SC;}*.->~ E7C@;zL9u}rK-0h~0WBUV&#[');
define('SECURE_AUTH_SALT', 'JKOIf<iz8ljiJOvKn||lO+x 6t|L;`V./ZRtxB#pv`-`y+!g4/!d1t+H5Gu|.%EN');
define('LOGGED_IN_SALT',   'DX=9xc1i:6XfNG/-Ns&Nk+!/Dr2{-iBY]]9t~+WhS1ijnNntX&pP7DUFFXr>L+a1');
define('NONCE_SALT',       'e5mf<]jm*38F`An1=/OAHa;ufVXr^I$|Ro9p~M+Q^b(zwKQ;%|Z05UWBM|9Ujf1U');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

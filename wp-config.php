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
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '5Yl0UFDU+7SB7e7tn4KrbKNaMVkwpGctPTPqQQyV7Ypp//eQi1sHk5gFeoTotWKZujzDbxOft9AYbUtiDnqr9A==');
define('SECURE_AUTH_KEY',  'XcKX4mv6AdzmpJ6TTXMHbE4qjdZvNqYrpzdjSJPIj0NiyZ5u9Wy+X3tg8g5/s0uvoODO0pAA6sGkVTv+HtdyXw==');
define('LOGGED_IN_KEY',    'HHWhHmgXYQ8VKjhk/aKacNMYlG/vbPp/yWnYCnWz34IzDCWn4cTBaGnLvLKRRfM5eHbdBORHnKp436yIHEh8aQ==');
define('NONCE_KEY',        '7s7jPNCSN0PLJgM4zLRW4ERM0UcrrcpZS2zCPhgRuAbqtGe9ObLvG+GE5arBG8NpcIcAR+dVSXSR7d8c2XZjGQ==');
define('AUTH_SALT',        'RBvsbvSm6HYGHn3PJIOgtSV7IsL1Ifp8nAby3t8fzjZsAeId+CRnvxMa9BS3XDpHGVanHNB6668WMJPcYK0xtw==');
define('SECURE_AUTH_SALT', 'Q4nznLm9AhlAZtJB3wz603fdFRDNcPTc8PNqxHLrdsrKOKZltoWsOCrjk4Qe+Aeg1Gxn/QkRi+ww1s5vuQQYAw==');
define('LOGGED_IN_SALT',   'IAGVs5WQObJ03wviDtsaSJO+iNlzGYJp7U1Jw2RllZSG63MgqkQmq2LLo668lNbHkJvEpemrjCwr57us5BFWEw==');
define('NONCE_SALT',       'UOxL9+ZBm/pVfYZyjeiK55kqEi10Q+3PxA6wBJ8XwfixY5zBjYPw4M079LhQjIvSysVzhZbdK1Ge4wsJK/1UJA==');

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

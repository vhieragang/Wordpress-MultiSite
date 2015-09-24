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
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'y_*z:o`Th%*Zi`W;:gN#C}`CFs@EL-6*2Ck~B(I4Nyr>)k?-S%>xJs9PJGDb$&0S');
define('SECURE_AUTH_KEY',  'i}}:bVCGLL?!kI]YEMVO!5WVL8%uA&UVb;r_kW]nrwZ:o_+06>8jYn?<To!jyc^{');
define('LOGGED_IN_KEY',    'V/4>atgUmONsd)Am0U}v@e=yVptC@M~(h^g9L166%sV!zSfBiBQ0|vYf!:RWwko,');
define('NONCE_KEY',        '?EGZOSs~J3?{9,CGDuI8mC#89Ple?NY9[0&My}<M}Hk>kGXHl6`H$jz%*Xdu@2TR');
define('AUTH_SALT',        '[x!7p)B_IoGI-Qr9W?i3-H@LP|?*Spzdk18rHDf.Sk.Ukw:Hc-:&h0Zpt,:-bdMz');
define('SECURE_AUTH_SALT', 'gh6mSbI70jOM[[F:-u`h/|X37[u?k~u4kSs/:7#gi!29^YB6[] FA@5W$ p~WYxW');
define('LOGGED_IN_SALT',   '@/C<fU!@$Y<N,_25~po8bcx A*Q|PDp(6b^-T5|M#5%zHtx>m06w}pdwvY*fT*He');
define('NONCE_SALT',       '5!h<l_D^^7wd+RPzDSTd,@T!@hRAr#l.S!.gPwV*52;ZN|0tXj{ar8$ZJdI)`/mn');

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

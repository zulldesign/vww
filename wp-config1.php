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
define('DB_NAME', 'db19b35f4fa66a41e499cea33800ab28eb');

/** MySQL database username */
define('DB_USER', 'nvpwmmqlzqunumft');

/** MySQL database password */
define('DB_PASSWORD', 'XtD3PMCn76VEmX2r2J24YqW5r8WcPu4mq6dobw22uy5EQgpfUEMmKr4GDGKQXAFK');

/** MySQL hostname */
define('DB_HOST', '19b35f4f-a66a-41e4-99ce-a33800ab28eb.mysql.sequelizer.com');

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
define('AUTH_KEY',         'qGF8Z/Y~3 sl=`-eMh]4_[}McB`+pC][7!F6h)azze(^|])ag.8FpZRCTjOWto[6');
define('SECURE_AUTH_KEY',  'KUdS;5zw<PZQ+0p-/3%3]@uk*q3H#<C-/D/Q,|}`ARFNga)pHt&|3v!~|-JzB69G');
define('LOGGED_IN_KEY',    '/Akhv!.-$o/~`f@M{S%&7p]GamaH~mR5*,;Vbi5(trS-y@<Z/;|}cqfYd(;<-ZQ ');
define('NONCE_KEY',        '2K_[7F|I<1?V2zB/L+&WzK<qE2r;i`|.a5r99>eN7aF8UK!C=XI/7,v4`Y&JtNyv');
define('AUTH_SALT',        '(.XAS=m4?OO_&e+K@@4a l60DK#+N@WyJep6#mvQk|0CgECub9A9G* d-7D&EzfC');
define('SECURE_AUTH_SALT', ']1$/KET|ZgWxPHL=Xo+0G^>-z>WAmj76[OU@`cn)CBb-eC9+|S74EC!{!ba];K`r');
define('LOGGED_IN_SALT',   'b!XgJw -(5 .q$h3SxZ(FtFZ3]{|-UwC|f1su%5qz+I<uB}P{t)t`k-,.>md_!+:');
define('NONCE_SALT',       ';J1|KBbxzo2,#4CQ/#j@O{#uxn|.jrVi0Y 8L^gCAgQ-efD`:R >62DqL%)(g^*~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_www';

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

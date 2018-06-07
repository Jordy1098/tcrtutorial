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
define('DB_NAME', 'project');

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
define('AUTH_KEY',         '}eqSm`~Tgk$f]GW6h&VtOc*aU!4,+#YPE,jT%ePKhBjE6p W{)a]H$?e/ee*m%@6');
define('SECURE_AUTH_KEY',  ':SVaE3x1|7GC6K}lqtf,[f+KpgVlb|`0Af99]z;iQ&u9Clo,rU|grp!Gi0T%C%vm');
define('LOGGED_IN_KEY',    'Y;Z-kG%9bfQzC%4Ohq5LLSAMVoO,J?qcKi;oHFazH*`|r3.B2jin>VxxMnv/N4v~');
define('NONCE_KEY',        '&il1WSIYcfg(.1~@wb0o_7)9C?prZ^H4:vpyN,o8xE9EjvmO g7ohfq_)G!}Du69');
define('AUTH_SALT',        '0,lF%ov7xrX(O.otlHnz_.r&pR^CY2^@]OqVJMLvL$uo1Wv3Hto-~W_>caKb]l.d');
define('SECURE_AUTH_SALT', 'Fp]N_&_WD{+Px6ogAgCP53/S?XzN*XSceZ#pmuwU5CfHOx-S-PQP`aNjW2|u6pbY');
define('LOGGED_IN_SALT',   '0|*UYUe?x5Cp};?vwz+{z^{usDOjK-^5e}X:<we0l~4gp}f_50Z2j`MBE._A;xcH');
define('NONCE_SALT',       '}lI6r&SsS,*Z{vn RO/7h}f<F/!cJ+; e_!Hn-.73c ufUn<Hv7,3l<29vP^y_xo');

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

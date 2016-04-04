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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'l0Ch/x=iGtStd+2Jo^`6]JCeh78DKEn:e+>Z~U!xSx(aNZ_H4^n&>&f3]?|n]:X)');
define('SECURE_AUTH_KEY',  '[i|/i[%Od0C3@9#}96+2QX*W-IWO2N40%+P([&mSB%wWlF|Au~LR@R$1QIuVFu$.');
define('LOGGED_IN_KEY',    '(J*_ =l>y5cf]z1ykvALLSc Iryn`Y|H,LR1]/fec}qgQ>xpjCf<U0rf..y-O=,N');
define('NONCE_KEY',        'B<F(L&:`rt*z2U---;|~OZ-&ytybKY=5_{Qb^.+cVm}Pe/vj+`!|r)r+ !>UMipp');
define('AUTH_SALT',        'TYp,fW| /}ZsRLgNjX|.wgmOXIehSV|J0eKO!- wFP%063(RxQ+.4zxOnrSxV8-w');
define('SECURE_AUTH_SALT', 'y9m|J`0RW>_O[xV%4YmaBy4ef2ph>Cv;_Wq*v)%dE_j]q7Z3~-*]=wC-GYE-~su6');
define('LOGGED_IN_SALT',   '}G<3:[QtblxtZ7L7@XTc:)NTZ>x(5GsoEX*EF9Jwb19hZpP;EuMK7&1VKhRh %C ');
define('NONCE_SALT',       'OwzS8=idcZ,#BCh_ZC3DoAbDEb8{+X3<z|94`jL>-6=Sjv=mUq=8`Egt*xoeuRmi');

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

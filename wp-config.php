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
define('AUTH_KEY',         '+d3,0a7s*bI-U;SvL@MyI9&XR7<4[}Icw<eQZe-(EKv9b7*z T[/89++%2x|29t`');
define('SECURE_AUTH_KEY',  'E;xMF}Ep?Ej^E{;hMQ^t&z#Nzolky85Ja?T?u 9~g: gV[1nxbq%Y|0J%P.Y9-@]');
define('LOGGED_IN_KEY',    '~<ZO|HK8d|}5Zo@,hN1K[*/7-C[uk%)[; lZ7l= )O49 #jkBWjg2{3kWFl}x+Vj');
define('NONCE_KEY',        '-F^nruc!N/z?}:q>|-l>3%9?EP>h:pEo#X[2yU*Yj%R|uY%W$plD5k<Y7?z Ync+');
define('AUTH_SALT',        'tg!?j<YS77H5^&Va-|eMFl6rGStp?Q? BJW^t{ ;Jy>[gP;]NpSH479{F(`^j++S');
define('SECURE_AUTH_SALT', 'de(o|I3-.B-D)cuh-GL<*p=DzeZar`%y[^D#@i7eiV%:zJ,-f=F,r|pPJzH%08OR');
define('LOGGED_IN_SALT',   '3y)Xy<lK%&Esw)YUG8:Np-|mbi]{G#gmva@46!-=ub1l0m3W#Tm@ps%<b@-^ _or');
define('NONCE_SALT',       '8^|F2UuBdiJ0<S@%3+K_CEI$F{LEc-~se_wV*o6w9NyHgbp3o7SU=lDz_mb!+jON');

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

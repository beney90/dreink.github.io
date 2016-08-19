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
define('DB_NAME', 'bbdd_dreink');

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
define('AUTH_KEY',         'e/*sV:`eGSh4;erbGlI=F%8g_:<V/ CKTX+:}`!izLDbF?KK#|Ypu|5j;(9Y0BM6');
define('SECURE_AUTH_KEY',  'hyhhT2nqj[VdajNnBW)0&L-!:1L[>1|vwb&(=?Pq;`R%8au1T(fl)5=awyCu1]$C');
define('LOGGED_IN_KEY',    '9,<)gEqUTwDMLaimE%b%QSAV[t)vAYRT]Jz^8sDXh$2v7]AB-nQ|a*0~|4)K|jJR');
define('NONCE_KEY',        '!]r!GYy=10YqG[eRA5(cpAJtw|29dtgH?q:R$(s^<E:,s=}H5,C^{?#[2Dk`5_yR');
define('AUTH_SALT',        '#fMI~jJ-~o?De]}*/y^KT~#.l3#cHbS>L$/4cB-sM9|_C<QJz(293/])y~5?FFy-');
define('SECURE_AUTH_SALT', 'm:*T;F%hK%S2&On^:tYSoc90(g5hhk=tZi.}qqkXn`MD00wxK]k];RI;F6O1C!LS');
define('LOGGED_IN_SALT',   'FT,?wm=mu#nO%FX!YZR4hUvQl@GL>_f&@YLO1z%oYJyf#0MQVr[y@VqnQ6;Y-[1[');
define('NONCE_SALT',       '77ncdmL[hK Zs^QUMA ilvX@,.+XkOm?E8/*A6pXyoDUl]vo^J,5?FHZvj8Qffse');

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

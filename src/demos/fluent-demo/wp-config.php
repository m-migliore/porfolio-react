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
define('DB_NAME', 'miglrxlu_demo2');

/** MySQL database username */
define('DB_USER', 'miglrxlu_demo2User');

/** MySQL database password */
define('DB_PASSWORD', 'T3itb=,eq~-b');

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
define('AUTH_KEY',         's0SBM5cH|S%n>)+NVi?CA=J=0O@);EsM?6l2%k&n_Y!W*)fL4Z&p.k]&HN~:/m#v');
define('SECURE_AUTH_KEY',  'G]A<>K@n1ih8#*]X;g6;k32q/l fG8_O(d5;Do%ayiFT*X^Bl=Tlo&c%|XN>*cZ#');
define('LOGGED_IN_KEY',    'g.XGsuH=lgs5MHfZq0Gqc}h})qJk0L7abO<TkP0]HtZ7ED+UNU9_=#/6SC%WKf,R');
define('NONCE_KEY',        '..[WfhmB`zCR_8g{LGWE>AAhhF`.2<=7|oO3f#x-NoqXd!Ok?^EI=.[vNF%Gnr<;');
define('AUTH_SALT',        'o@m9Ix#k&sK>Gt>;H:Ptr7</$J*(PtTi.o/|<lm~)xXl-M3!PC:/gq<NDt[i?7o3');
define('SECURE_AUTH_SALT', '$OU]$kc06`xv$I;X.F*X1{u2XujS6-|:Vyx1EcJ6I!j]8za*?5e|0Z^$Z]#IY-eg');
define('LOGGED_IN_SALT',   '2}5V,OV8uv!bwvIXKllyu/2Z6hwREF<FOBSnJsKgz4TWE).@:p{-Zr:KFP0|aX5s');
define('NONCE_SALT',       '9sKrGxK9R(4,Ri< H(a*Rn!P<69qqlN@n4/Cwp2sqPIh3Q$g;om%Oh>]UZ<A]Ai(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_demo2';

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

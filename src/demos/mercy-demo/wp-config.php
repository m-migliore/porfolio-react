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
define('DB_NAME', 'miglrxlu_mercyDemo');

/** MySQL database username */
define('DB_USER', 'miglrxlu_mercyDemoUser');

/** MySQL database password */
define('DB_PASSWORD', '&$g63~E(UZK&');

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
define('AUTH_KEY',         'F^rou-BI,dN.`C_~SfK<fuI_L1G_w*:`b&CMq$epS+Ie(;(8Ee 9yz,k_$%kR#@T');
define('SECURE_AUTH_KEY',  'f89cmN)}Q4Fhly[bYRv8EFV0|zCQPEeB#esX<H2zFH{I0jHhjU]@]oVIcGm]C$:3');
define('LOGGED_IN_KEY',    'XxO2SNj} GXBNjXi`$pi1M+ 7zHqQe)MS%@JF&(~:&iQ@^jBZ{5{W/;MK.4Ac+HT');
define('NONCE_KEY',        'RQRa-K-J}]hrYCaHkXT<rvsMfx%PnZ.&A <ix9_YgYVQS|A-qfI|_(Ow<eQN+%x&');
define('AUTH_SALT',        '~9<dj>Gz4T4WFzCFG z(PzzH5B:)F$EGv m:ZSDXq(ov$?D<#)>qf3ZTji}rLq0(');
define('SECURE_AUTH_SALT', 'HuXf{-XtKihiTinj%RbcQFo!CxU+(L *BBgw4GHj[JCK!&g_wzSd5D6+MKSftZHK');
define('LOGGED_IN_SALT',   'AOdK`-X5ck;ll-oyrrFTH6<,fku4x`p Nkt8:Pd&SB(s~W/@jw (`^F:r}$R8#Sd');
define('NONCE_SALT',       ' 8Mq}m1h3yaf!&!q[#^Z883%EMbDW/y-mw?)}zN$C t_@h%Xz7YlU%xp7g; AgHy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_mercyDemo';

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

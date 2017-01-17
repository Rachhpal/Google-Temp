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
define('AUTH_KEY',         '5@XYyf93#-;B3fN&R{UG^Q2@?tn[Tqk_l(CyAhPptc0?j@@bj|?K4iMQOm?7g](A');
define('SECURE_AUTH_KEY',  '.6z!9K&QFNS{@@^F[Ycx0kM76k)3bW:AH`/jS^(Bw|UU!H&>5; ]NOd0]sI6ZXRM');
define('LOGGED_IN_KEY',    '_Wl4$}TWG%S$>k3]stJj[0_1F9F,-FBzq*|EX,aAK_Bj1SbbJB^,SQLu1lI{t`/3');
define('NONCE_KEY',        'KQ3%p@8LRnUi`|#k*eLc35_&PPjgPrU#m%20A)Tv>}<kk ;;cBrPPM0D-| U` :f');
define('AUTH_SALT',        'UC@{f|5>g500p-886RkKoUGX(<Fvkmw>,i^oPZ=Y0;0ips`Zt;~]!D>g--Q&58iM');
define('SECURE_AUTH_SALT', 'b-{cha^~ss0xp}{=&T(Oaqt_:|W=PIj$}e}!FpG [+-,:n?D7J9E6a!?,&,l7j[k');
define('LOGGED_IN_SALT',   '>>zI#3 K)d|(SJZo] l*$ltYb5kc?R_=9E}ws+1BPTz4F>qU3Pjqz7frL6[#|k1Z');
define('NONCE_SALT',       'i8D)c8D2%]vD,!{%eC]fJ0OO*!szm5#.AJR(cXY-D9;5MJ[QXZMNW*:9#BYwEg%U');

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

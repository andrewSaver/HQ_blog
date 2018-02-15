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
define('DB_NAME', 'hq_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '_2nKU54?Z<~!cI+^r^k/0V.{>BoHc+Su@(5B,qH]/.aI[o+MFi&XgU&ITnTz+7qX');
define('SECURE_AUTH_KEY',  '4sJ|K!(-SQDiU7YN)H!j~{}n]<5Tm?V4x2t0[m)E>7 YV|Gvto2,+=$_p&^+oBbf');
define('LOGGED_IN_KEY',    '@14Q4y_C.=ahvqY@fwu+ef2& +X}*4RVnu*|%0MPFMnQJYw;yuV>WbSB^x.5=5q0');
define('NONCE_KEY',        'L:A;%]Z]UN&|Jw~A0m #HEbFby90(.v39C_Bs6w+)N_H]/GaF(!{9Q.C{(W7,K+v');
define('AUTH_SALT',        'J~:7o|oMuk@ogjylpg5KyTx4[<-s1QV+Yu:|RTCZDcFgKs?s|e++R9SJzmKF%QF?');
define('SECURE_AUTH_SALT', 'E#T&gFh|s~/a:gzg32Y)z_?}KZNgM)OT<kx(9Nf+/0Brw,pQY`~O~Ru1/9BC|m{h');
define('LOGGED_IN_SALT',   'W;hz.|r} [A)%Jk{|k+H7Hb:u^z+L;p#wJA+Aywl{[:zO2-w(Y7%7|kC98>|Qw *');
define('NONCE_SALT',       'K&AT4J0H8$d)0;U7BLkh-2t{[k@%4Ct77g.60st#^g1as^x^:[|@04O u=p|f{VS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz_';

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

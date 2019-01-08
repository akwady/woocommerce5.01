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
define('DB_NAME', 'woo50');

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

define ( 'WP_AUTO_UPDATE_CORE', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sqX+b,&W[oHz?b6iH?/^vb&%I33&NW:E.9Skk?[2.,S9#s%4>,g7`GQHlcLzt~uS');
define('SECURE_AUTH_KEY',  'z/A*z:cNBTOC,~Ko6Z%dr0>>>IM]gwX_%C0wX&-&:h{Zh^ipZ <HeA=Vym8g?S1x');
define('LOGGED_IN_KEY',    'bG?i nU/5/bA9$Iw[9Sm6wYhN?aU(h!ladI)NEl@vKJT>d5 (n}+bsV%/o.<Hq@g');
define('NONCE_KEY',        '^7=2aj^|C#Dtl(4x%,mccr!4gHmmZA[JB_V^Za$(iTvx,;UhLvVJCp}:$A$_]+<4');
define('AUTH_SALT',        'A7}fQi3:k1DhQHIA!BkJ!TQ%g;(M&h2QH-A e^ysoFN&:$W!htIB4PL~md|8om3+');
define('SECURE_AUTH_SALT', '*qQ^rbM|3kIFSx~?SjCe?=s,raR!8{Nw Re9[*>Aas4q=[(,D>4/#P|dPs~W4_1Y');
define('LOGGED_IN_SALT',   'GkK<4Kem[f84 P70Z${2g^yBH4Y^B?_ST!>u0SDN{3 WRsi}/+1p?!Mh&+VhAnrk');
define('NONCE_SALT',       '3?C/#X(}r_}Wd0de__?!^O^!vX-)xV3bjIK~VPrcu,@LXEuc8I!$TuCNoUdud#:W');

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

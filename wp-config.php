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
define('AUTH_KEY',         'E~z*ln+b79l>oG#8ARUS%*UR^=?GiX:Z{liz&bS(&<0:-#_z8pq#J>GV;MUHER{B');
define('SECURE_AUTH_KEY',  'rS!>)L|dYygo<GUTS67p(VTn6M!Spu1}LsUt2+1%;bI;_<Mo~BZcha&:gi1,lz,P');
define('LOGGED_IN_KEY',    'pq~5n~[)$1-w!-><.D;^_i8Y#_X4{|d)s>)x0sH8/T1/MU+*|,9o2^^_fVBt<yls');
define('NONCE_KEY',        'H,!eoNopSye-3:5JyBHZu%Zlri)A~qyvn=68Ful^smD[%sIq^E`V-,Bs++v*Op?[');
define('AUTH_SALT',        'AXo0YM<+d>2Gy/iUGvRQR^h=jSX~qlEt(]keS8q8bHH8IB_;^~h8:zYS+(D?u7RF');
define('SECURE_AUTH_SALT', 'wTTt^p?78sZU~lCnl2pgl!J]rN[K20KXC%zV_&[)]s-c8>WZg/Nm2&v=^ca0u(B%');
define('LOGGED_IN_SALT',   'O*KJzH>CcA&k^`q{zR]C:&zEE%0djuB/Cr^z#RbYKKBVMXaV&.Waplo$e{,%>!8C');
define('NONCE_SALT',       'F9@7>;UY8fOV7zGFRH=H@d|/P/jFO>{?hU4$#*]PV{r%]Z!$, MYC@FRS7t}I5a9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp474_';

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

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
define('DB_NAME', 'wordpress_db');

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
define('AUTH_KEY',         'IsAezM8:ubEUL!wUEzc)F;nxpUQ9pLYG&AVM6;q>D8DB$a*f[wpW:Uer{DHuaI+B');
define('SECURE_AUTH_KEY',  '{V{oMRP6MCG48kpZ5ml$= idl#^{angqkW(<10.G%`X.qGl:.[%qSf3,HW48^2X)');
define('LOGGED_IN_KEY',    '28Ka$D/RJhNe03NzRe3l;^h,_03>Jo9Um:}|zi`0j5aV#81s,(Xc_s`-:h80- Eq');
define('NONCE_KEY',        'c!&&}SIi?]Mefm3IFOQ)c#c>%)>|JDGFHHpkxO1~1y1uB0EAz*&^j8{{bu [VmYq');
define('AUTH_SALT',        'Zt-37buIuMN0SO@&*#tIqe92#oYS)f]JrofdU-Jf6.:@A_g`zvNdg@W5s?%Ov$t$');
define('SECURE_AUTH_SALT', '}7BXGEJ-~_G-BZT/G@ltH5iH>m*58P{7UoSz#*hf3qb*Fpd&#l:Gm $F7bnEEmmN');
define('LOGGED_IN_SALT',   '_}/G+=%%utn8N0fn*n?16.I/EUrElwIeQ-e^h^J]s hGwMbb3*v7!;ptWjB:>fZi');
define('NONCE_SALT',       'XxWB>6N;AU#LEMW!H!#%?.7W_$x8t@%_ X4^c0wce|UYn&<FGQ)NO!dMq :c|Vh(');

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

define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

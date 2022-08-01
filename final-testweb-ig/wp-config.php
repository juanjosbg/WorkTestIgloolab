<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'databaseigloo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '*$!j|^tq9JK=G +KB&*-4zeYde$5.U~C8D,]s>-Pk%$GGO2j|zJan+Un~=l=_oXF');
define('SECURE_AUTH_KEY',  ';E|AiG(UU0]&GxFu$U<k6tv=iMv}0^{iih6~`D[A| VCv.bT,Klg] _ pNV/SpDv');
define('LOGGED_IN_KEY',    'br4P55AA.h+p~$9%$VmQy9,^+RbH7)q,lLUZt)zU[m.#qh%)vN_xR|^>9jU@O9l&');
define('NONCE_KEY',        '{$#%l;-xMD%6rwkGci5|-v.UD|a~`Ot5}YgTvwEwQ&B|*o)RY+i/F|ve#kz0D%+m');
define('AUTH_SALT',        'rW+,HEsbpdeK)+OB-XcGV} &9o_v$Q8~6+q|/!;91Em,Mn<8OOxqvm-CR.`_RSB~');
define('SECURE_AUTH_SALT', 'cR#$:r)i6L-cI0pGfmtP-}sVJ76o-8HfzF$%Roj6eQ2eDe=2G5jwg72}fV1!h>|O');
define('LOGGED_IN_SALT',   'WwqZiv|-`+UPRVq!Q-|]zSXpxUS)^{xF#QISl-X7dOryeyT5G;XiMT>_{i=7Y+,5');
define('NONCE_SALT',       ')vTr-A)DHGC~kWo9x;wiT%_U,f/z7uh:fCm!;C<n)ww+2ER;-:V4lea*oS($9h`Q');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpstg0_'; // Changed by WP STAGING

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
define('UPLOADS', 'wp-content/uploads'); 
define('WP_PLUGIN_DIR', __DIR__ . "/wp-content/plugins"); 
define('WP_PLUGIN_URL', 'http://localhost/PruebaIgloo/final-testweb-ig/wp-content/plugins'); 
define('WP_LANG_DIR', __DIR__ . "/wp-content/languages"); 
define('WP_HOME', 'http://localhost/PruebaIgloo/final-testweb-ig'); 
define('WP_SITEURL', 'http://localhost/PruebaIgloo/final-testweb-ig'); 
define('WP_CACHE', false); 
define('WP_ENVIRONMENT_TYPE', 'staging'); 
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

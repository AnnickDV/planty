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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          ']CP=LE,%=/{<QgIlY?13]tcl-]0)(H>JTD9FS$QRY6?-+0>koexh9a.@gc_ /Q;z' );
define( 'SECURE_AUTH_KEY',   '&)<V;^]5y-xiEc6/L?2:oAs9hJz ou-2wb#(a`,|<na8yRsg&x[Fz6vnXz, a87+' );
define( 'LOGGED_IN_KEY',     'uhW+mkP!JaKN=XcN259Bc=P.]U8uQSGLo{5V+aH9.5EeOA{bI)s)% z 9NNwBP|0' );
define( 'NONCE_KEY',         'GTmlDIM{]W&qmbs;ZW/81fb!1/vFTcX9N^By8n9hK=%hTF;5r!D<ocEr{dS3J~zL' );
define( 'AUTH_SALT',         'qZZ+oV`P?0GmAOE_<e6q_3g@|[PxH`*4Dh5:f(otLvJlL`R/ `[OG5!`=|H(]+vh' );
define( 'SECURE_AUTH_SALT',  'ui{7+9qCigAENpNlZ=^jun|3zZ@zo;jeWQw-ZX~%jF.4l@9-cAW7-dN[yVG#(|aU' );
define( 'LOGGED_IN_SALT',    'Dz<K,meMBV3> ?Cvd8R]f^=5KeX!YdCT}mU7OkfKo|d+s)dk->18;Eu[h|riNh6J' );
define( 'NONCE_SALT',        '0z)2OMt]tPNEQXz],=P+Kc8t*a>W.I+NISXVIx6cYvoY|!evukp!hJsVR4Q)!G0K' );
define( 'WP_CACHE_KEY_SALT', '11ks+|q%o~OCC3knk6F31zf|26k;#<WQ/P_*:kt^SW9Xr@M[tB)rC`E/<vBJ:T I' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jlobusinessgroup' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'u:yT,3}&a)Rs5Q0Vn4w~v5Xjvf C3 6%2gl;ol|k%gt]@H7dE6_Z28)-j^yv!0r!' );
define( 'SECURE_AUTH_KEY',  'L@XTa3,u8#}!Y/cF~:jWO@c7V7 v5y7|R1P@9o~.X{(`lwWpUhmCXdQ+H`cUW9Pp' );
define( 'LOGGED_IN_KEY',    '?P%:cNmzYIfr0(MgC)&M>2D#JzQv6&Izw9Fck}odhDOmGs_0;;$G&dJ7Ue>8OnQ/' );
define( 'NONCE_KEY',        '4FWqPiEr>8)BzJORRWY.Ka4*9QIWmr?p^/nVwl6*De%ky]]5sW<Ia]UtBIo=>-2G' );
define( 'AUTH_SALT',        'pMO-Acwtk@gtD?X*LUpc+tjq7P,O<q~1a@}ka_Tm@7S1nIM+>>4~h5_$_(iZJly+' );
define( 'SECURE_AUTH_SALT', 'w`IE6N}xvoJ^5g]<;c:aYyafPvz>>,?pN$mvV^!sv #NfWP2(A+7Q[W5mbNUZ:32' );
define( 'LOGGED_IN_SALT',   'SCO2&*pHi{S[X5;G|o|,2TG:bjHF23-*ap/9,3mTjH_zJjjoQH[lXu#b`93:EXk&' );
define( 'NONCE_SALT',       '(dW%/fJB#>TqOQ,=[v!+HO^APTEop~@a~lYU`tz=ZG*2>Lalnn&o8c6Ge$30#xV^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

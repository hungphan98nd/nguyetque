<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_nguyetque' );

/** Database username */
define( 'DB_USER', 'hte_nguyetque' );

/** Database password */
define( 'DB_PASSWORD', '#5h7Zc81e' );

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
define( 'AUTH_KEY',         'k_IGa,w{Zi>lhsU]hc:*=rl59mrzN~j&x)i_|cB+6i_zoCt`L+(sf2S#w,Eb8b1<' );
define( 'SECURE_AUTH_KEY',  'DLA;;3*Io2m:f^,/Vr|cP+!~$::2KtA%$M^O+!%Y{4 @&*AarU;%^5Ma=ig@><8#' );
define( 'LOGGED_IN_KEY',    'g8mNnDK7XLLfq.3 $78EHm{&yM*&hyw`?E&NBPxL@#{.Ueec3@;^<Dsxdwp~quc+' );
define( 'NONCE_KEY',        '.B1BQ.Ztu)I.`xZ9Z&(ZvxO:|cD(1$4d@vZK_nxZ}`w7%(%Ys?ir6y!=fT1aiuw7' );
define( 'AUTH_SALT',        'iOfL|1E!R}!g+RSj(=@q44ojT<*1T ;wn%99a2qpj+)_WW>C.e@@*Yz!:L#%m/X?' );
define( 'SECURE_AUTH_SALT', '%Ox>a^*m==JD*D)eS:qcl%_|4z4fwP$ #U:xDSE#JFBfP+=i?~B3V}F^5<I9t@I@' );
define( 'LOGGED_IN_SALT',   'NN;BI3y<bs.$ZVV6b +qDl.(9H7gwu(lxhUkK{>:/WkRrIW&(0SZOF4d;bahx;`$' );
define( 'NONCE_SALT',       'gtG,M;WD7R,W/lcI&|V:AWF@lc<pP93se~^@%&H]9JvuK^:Iv76:<X{R:7su#6^6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

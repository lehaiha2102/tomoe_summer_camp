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
define( 'DB_NAME', 'tomoe-summer-camping' );

/** Database username */
define( 'DB_USER', 'summerCamping' );

/** Database password */
define( 'DB_PASSWORD', 'it.d@2024' );

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
define( 'AUTH_KEY',         'B=>:<RH}tXI%duOL%`lewapoG4<#f`O)*e4bHx|eGNdQzMvdQ{vFNRGtoc];7-~$' );
define( 'SECURE_AUTH_KEY',  'P^@zidZ,&+b~!S!?fd-Uk=Q9Lj=R<dxF[N[:/K&-t&4HhYbDb|48}=8zE|_z[V7z' );
define( 'LOGGED_IN_KEY',    'vTXH)1z0_Y-:&q-oWgiGTKQh~]Ya$e|Ji6#tNHKUgx_ti}KB^gn8?|9=jX9i-kC<' );
define( 'NONCE_KEY',        'O(&lqK.+aL3ti76CJ[~ow&8]B: eNhvQas.8!e,T9A<yg,^kf]U4gCDi^C~D<^#<' );
define( 'AUTH_SALT',        '<qML;=#xc=45}P+JYsn39de0WdI#3!.wG5.)NLn&Co{Ne8qjKN0z[:M[x@tUmhY_' );
define( 'SECURE_AUTH_SALT', '0I8[T0#>7yKmrqLWMW,8mpp! r-*Bm*hLS4 :#Erwk!vJx.fFk|mI`j>xK&agyW*' );
define( 'LOGGED_IN_SALT',   'u:NL=]P Op~%ixabc({BwC*j>INfV84}>.H-Dg(!{F[<5F3P%z}$90-mooUCtbTN' );
define( 'NONCE_SALT',       '2M!Gja)!v_9XSin@DCh/& bDQQ^/q?i`R?cwS8z.Y4L5q18-UiIs}*e!I{i8xJgH' );

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

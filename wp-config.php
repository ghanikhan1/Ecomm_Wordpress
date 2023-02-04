<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'ecomm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         's^/v=DFo_<^!=soi,k}s3{-P %Z+A:>wg32+I#TnkXn9HF-6+*1QS0_~b~F$|uaQ' );
define( 'SECURE_AUTH_KEY',  'e*Ki[knlkQ)jJ8&cLxN^@Bv+k^?5D3i`Tb~<b9bql$^.%<Bh3}*/(&DqEYRKJ3i*' );
define( 'LOGGED_IN_KEY',    'S#U_>PjQfdYE8E(suCT:y<|U,?5@n3[<}_P4vbNqlGR>Fil@ms4TOh_CMpGORt,R' );
define( 'NONCE_KEY',        '7QCgP9155WRB!?D=%|~kj9}jbIBfKU_2#pp]wySN@:fawf39k]L&ara6?|YVB^#x' );
define( 'AUTH_SALT',        '(t6ESX5geBcT~ESqJ{P[lU@P&^o>!TQzc>#46wo wY 1YW_-SY*cebZ,|VoBNJ3@' );
define( 'SECURE_AUTH_SALT', '-h@o(dI|MPK~dze>s>bKI2[DQhZCs)j(sAe>Y2D?#QBBU@oK_A}8Z~%SW|$f<:w1' );
define( 'LOGGED_IN_SALT',   'HznfVZ6(7[T=>S9v|CMc(hijD:SN5uvnp@_++}xxct&a}I@}b$GQv1nZ4s+i^%Fz' );
define( 'NONCE_SALT',       '#qi}10_oEx$I]>/:v_w0Cp9;[Jd^/}iFJOnDCnwsnA^9tc%Jp G0|~JowTdl>w=x' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

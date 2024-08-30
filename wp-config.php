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
define( 'DB_NAME', 'kite_games' );

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
define( 'AUTH_KEY',         'N!4v52j]vf%ZZ,0uq6/qb]a18`pV -zWM.f|-u6/#TtF8KlTiEfv!-+s9LX7Sc;^' );
define( 'SECURE_AUTH_KEY',  'sXwj.SO@kkxZTSJQNR<kTneR=yfcQ5p?`qwPywf{oBjq.@zJEzG{S+,mu^BU|3QI' );
define( 'LOGGED_IN_KEY',    '2hK88.z;h[q7crQ&YZEVaW4 Y2ffo[$5}z,[:)}In%5i[?v!.`m&PFg(>tk8J!Ir' );
define( 'NONCE_KEY',        'x?:Rw_4$$<Xr7/+L<7X3Eq}8Hf{pPZ@D>%~bcvs_c57Jgc4SO`&S-rikK!Dgx+7;' );
define( 'AUTH_SALT',        'XcW.:Q41a^WX2LK,qQp^ws_<B-f^J%}d|lD4xv0^!l)Gd[|2`x`z97t,I32B?XQF' );
define( 'SECURE_AUTH_SALT', 'p YNT{i ptBn  A/#00e/vh._*sQ<s4*Ria*0fDE>I>0/_Gi+@j k*JZonC%!-20' );
define( 'LOGGED_IN_SALT',   '0DZIZKwn&nOw/0.c^8mE,KTrlp.?^oBI!IL(i3qjrKa&8O%[Z;e*P%}u=yL0a5g+' );
define( 'NONCE_SALT',       'QvSyXr]_Q%.= }W.blQY>:xBh]h;u+{Vbb3myfofP-srYnRXH/;cmQfBU2`bhu?!' );

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

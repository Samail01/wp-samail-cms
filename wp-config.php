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
define( 'DB_NAME', 'wp-test' );

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
define( 'AUTH_KEY',         '7=2_cAJk~a?Q3AP%u_qqDch&jX3:*kX#=b-;h#YMXVa4VXcXRgk2zJ<]ljf[@eS{' );
define( 'SECURE_AUTH_KEY',  'na>1z`AtRQ/h$fkj*8iEY<3q.u[K+LHB{.CDvi;,&>3B&qp8(U)Q?1}/KCu%<Fw(' );
define( 'LOGGED_IN_KEY',    '-]+r+GK3)6cTm|{lnB1N[#$p^ei=$mg<C,;wfh!8R^Lvl*<m&#9![[7-R|jT@Vf&' );
define( 'NONCE_KEY',        'J4i+wgF45#.,egkjmP`E-zX0%eaMI%0}zR8;fiCw_I8XJsT>Vv_i-_nr!M;z-s._' );
define( 'AUTH_SALT',        'nSFE33]Q:Lah9^Ubo>J,+>G#M9(d.&r9fRoj[UJ<~)w4:]p/8Zk]QgGX]10iBQyx' );
define( 'SECURE_AUTH_SALT', 'IF+EnhZe7*Q]]F].4[x-=@zQt&v~~v^~d`rIWzeKsTpLXs58a_*IV^f[{Gf?TBl{' );
define( 'LOGGED_IN_SALT',   '+}vP[6}MCQ=%yV8#F@ *4@xjVKeB3)uFG5g=F8^P-NK<]#w%MeK,mhSDzH6KkLlk' );
define( 'NONCE_SALT',       'PAVbvUdmHtYPN.gsxwbg(sp/-*:AFjcqwdTtESL@.uA+6uE1<D^Y7AQBkrQBrgC8' );

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

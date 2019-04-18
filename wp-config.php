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
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


@ini_set( 'upload_max_size' , '140M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '150M' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r3L^m{Qi8[iSn/LG!ynM=NlFk]|/+pLT<`P=/6>),m(cQSd{>0D]fbu<,N=*h[OB' );
define( 'SECURE_AUTH_KEY',  'Yd%X=a<,yZ8)npzHH}@<+zk0V#]5>}F@h]BG{X6ET<sF1JVU<+zT9IKPtnf(B(<0' );
define( 'LOGGED_IN_KEY',    '#e;0Y*J2?}+qO;590e+qE,lT^.9q#Z#p<9j#NP#=_FIkvvWoXu10>NM7{Dk}QKp?' );
define( 'NONCE_KEY',        '89P)]T)`i[G1no8acjI1Egf^]4){:;BRTUk4E<Q|G^W=j;#T|k]o~4C#7ai9xh8B' );
define( 'AUTH_SALT',        'Lp>00~@&C^!AOO`Xf|!)0gOh#d3_OZ%Ty+]8MeGN#wX.}3PtbtQP-F(wC9/oLC,.' );
define( 'SECURE_AUTH_SALT', ';NXmiqh(XG>q-zZ>vjZBcdCSL_g6hO}^h4dJPfQLoL_k%]oT<={)~ l:w{NOjYg&' );
define( 'LOGGED_IN_SALT',   'RB,Yf[>|G`r@x4}g_;46FRV5$,s}sk$}CfKm(+UD{ynaYb%8OsQ~;iI/?F9o/p88' );
define( 'NONCE_SALT',       '}k}d$uQF;X1uxrM{fpk7-3J_+8Y)ZdLfy.p{2K04IT:a&))BE_rz`;TgA.O.(6hD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

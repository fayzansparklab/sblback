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
define( 'DB_NAME', 'sbl_db' );

/** Database username */
define( 'DB_USER', 'root_dev' );

/** Database password */
define( 'DB_PASSWORD', '?sOK93A(H8[X' );

/** Database hostname */
define( 'DB_HOST', '109.123.240.239' );

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
define( 'AUTH_KEY',         'b>)&gb)_5P{?_&c,G~2]u5O=wLDWHfq>?. SU)N7a)%cMvO?}I&H+*(e*y!L:6$Q' );
define( 'SECURE_AUTH_KEY',  'XM00x+4px~%;Lf%h4|}_r9K=R2r|}?%B0#Nr{pyy.M<l.jl`a3BgRI1UoR%uxhrd' );
define( 'LOGGED_IN_KEY',    '=NJY/-c|lElPrigIylM!$dU3T$x40<&A@&Sd6&ICFtb^T:{EFLtqK5+G*4l4&S<l' );
define( 'NONCE_KEY',        'paUL1wyCgpWJ{+Rj+=l~K-FCOI);}W)H{ak8yg$@TkvDX#.st!{ImQ_^M2q( b@a' );
define( 'AUTH_SALT',        ':MlWG{x~UTr,.cR1z_ :+oX(n!nHE!+_OfIv&^J8U9UvwY`Lf+T!k*sz(.nV_yAp' );
define( 'SECURE_AUTH_SALT', 'Mg$D>)>|31mqT89_a;bO08q05MO:b04x&B;|Yo&ls9bv/lX;fUhpu;+:bv~E!,}Z' );
define( 'LOGGED_IN_SALT',   'H+{w`nM9,icY~d&sN!tpSfl:rj(7A0DL;nE?]p#pr5f-]C=`6whdr!Gfv 0c]# f' );
define( 'NONCE_SALT',       'C+g 1q4;fYRDPg/@1{qv;FRpKbD=c25<E4PuQT||04#W0;5.8dDqAeRXAR1CE?B/' );

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

define( 'WP_DEBUG', true );

define( 'WP_DEBUG_DISPLAY', false );

define( 'WP_DEBUG_LOG', true );

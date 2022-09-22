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
define( 'DB_NAME', 'zuha' );

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
define( 'AUTH_KEY',         'R}~Vitf,7e{B}p0U4hLzQ4G?EMmJI[2Bdmb4gnq[yH@pwj&0U3dC8[-A2LN,h 7S' );
define( 'SECURE_AUTH_KEY',  'ERP/Y,Nk5e^4o0G7U^SH|+V(f0#NpytlJhM,Wy9/O#iFq8st/f$buZdfY^sbUh5x' );
define( 'LOGGED_IN_KEY',    'QEIAV9lLJypFsG5]*`tsqW2m/ExFn-7aJ+J~-r2up_Ziy|]kX)c[~!?]Ep(Rrw3Y' );
define( 'NONCE_KEY',        'sJhewAh?Tqcxu5wnr&v!&:2H6U.%^Iq0}o@tl$U7-.JtSvlm3|<OK6Np/6}pt@j=' );
define( 'AUTH_SALT',        '0elRsGJr@v83I6Gy$j}}wi05#B!f*&0[V>V}Bgcj&yjJvPx2GYr*+nt32::@)JbO' );
define( 'SECURE_AUTH_SALT', 'c/VBxc#Zc(rp*g7e|]5f}!R3,Rn6]|MY0,q:AWh$~D)J@~ z?xLUXTh2Z:a_`%_X' );
define( 'LOGGED_IN_SALT',   'c}IBO&>7Brg]cXNYT3#yG?$+%d %nc(F&f:-EOmq|3y]vpBY~644+!YXgJ3XLdpv' );
define( 'NONCE_SALT',       'fX0Ax[$}QmW_+-E{Y||(>jXJ^$+6yyl&Yt2?;-%J7X+hJ@hS|>#SIj26OSy4D,qU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zh_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@ini_set( 'upload_max_size' , '20M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '15M' );
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
define( 'DB_NAME', 'InternGurus' );

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
define( 'AUTH_KEY',         'W#!#6 C8YsKD,%P,NyW*WJ64PE}}5Z|*,W*^&B5R!M(]Rjy}BYx!;-YmzA{gHt(m' );
define( 'SECURE_AUTH_KEY',  'dZ-bII$Q2nRiVBz,vD[SHSt$$h9V/}W t9P-ak2/WN/,#L/IEA[AX&zaw6o0#rze' );
define( 'LOGGED_IN_KEY',    'B^1G!^2p~(8XXD{j:=E)s%cS`A=LNI.stm#2F^*VmaSAE]Tk&b}h5hzYo)L|$6h3' );
define( 'NONCE_KEY',        ')% {HF<0kgr~f=)cCcvg.?OUVHc b0j*Aaz3=  ~N52wSP:6]xk0j}+<__=gJ>e[' );
define( 'AUTH_SALT',        'Pq#O`P$Gm19tNKr4DcAiyh+z:7rRHL`S@HGM `&c[}i242[f,-m;)!)UkQ4t,OpY' );
define( 'SECURE_AUTH_SALT', '^$v`azwToh}0T`S#CPp`=tt@C,B/Yj=5Avl{4uL^FyZT5nM+Ja7zOti~QBK>OoMs' );
define( 'LOGGED_IN_SALT',   'wT`ySiOKG_A_]5*zqBp+_/}f%MJe{YK< tZLxC<P&&LB? G33kc}c/*wKhX[d7e#' );
define( 'NONCE_SALT',       'f[70m..#98Y rZdpFX=O7.KrujF4#n>d|kQGi=c7,tro^pp?]1ZX|4k#]$iOE/O?' );

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

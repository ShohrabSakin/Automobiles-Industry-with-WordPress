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
define( 'DB_NAME', 'firstwp' );

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
define( 'AUTH_KEY',         '+|AwH5v.v_*c1s#P44NMn].vlPb#H[h},Dw9LSV/5%CB:4yudwIlcL,:*IQwkYdq' );
define( 'SECURE_AUTH_KEY',  'dd3n#9Fh-7drdqR~$=ymA7`dC!P6Y?4Y!]51H]H+Nn`}}81EKo3y-i/6t%T=ts8o' );
define( 'LOGGED_IN_KEY',    'PXM#<}(ibC)I;?+@SZjE@h4WK(=s:tWztoSEQ>Lru*c4@M1$]AQz?xr_{bHK*ihI' );
define( 'NONCE_KEY',        's^,fq[:!B8Xph}&XACBB[Ihmh+Ygw|+im4B`<sNmN64+E]}cUb=axk7M(xflbVy?' );
define( 'AUTH_SALT',        '8Hk-#!=6C_D-*t9W):6(lx=Z?PX%yon1aVXvJo*uR;Aspzoaycm^Yv R&]VD)MAu' );
define( 'SECURE_AUTH_SALT', 'ubSd=)*7gx6A5]SV@>4 #-_7/xY8Pw+#B2{f 9<K;ok`cF0]?)bdHcfJI*JN7+BG' );
define( 'LOGGED_IN_SALT',   'QXq_;![CAlm:9MCjQIe/a/)Atm1h!xHkueg/DNj@Su{lp;9+G=oA}qEE`rRixoy5' );
define( 'NONCE_SALT',       'heLMfM77Hm*b|0*70gpO{vao~0@Z]m4ey6Pnmv<O#x#miLJ<E8,0n}sK2E7%Lmq5' );

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

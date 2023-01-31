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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u721545515_TsHUv' );

/** Database username */
define( 'DB_USER', 'u721545515_EuHNx' );

/** Database password */
define( 'DB_PASSWORD', 'EhdRHalDzN' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'K^sw(xDs6&|,8^B8-5_G?1$^lQo2P!,NJJRKE:y#GxW1TnBdWTFkw9O7hH&;EmWL' );
define( 'SECURE_AUTH_KEY',   '*DM)CXYM#|?,pV<sf*F,FCM1b`l:}x-[vq}`1`/f;7c#pIqhpS,ihEgXQIv2QO(+' );
define( 'LOGGED_IN_KEY',     'L*1w8o`QwlnRU6A.G0x?M){oI1_[)<0Au?M,,CypOl8^h%aeUP$ZlO8NEK`B&3Zg' );
define( 'NONCE_KEY',         ';<w9jGcPrC>$c;Y]^c8;>rOu2-DIFJrP.)ABv-6W=e@t/ZNI*.Ur6=bq4USxym?G' );
define( 'AUTH_SALT',         'nc1MZ+EuD@s`+|W3j>u EnJd(ENfgpjmc|QjGp[kq2pnLhjW@dE8>{^>n@9T6QdN' );
define( 'SECURE_AUTH_SALT',  ',]y[8JPuM`z3Gs}|L!^#w9m5zY3*}<#OOgT>d;2FfB#b A^?{Fmgbh_fQXI_^hrL' );
define( 'LOGGED_IN_SALT',    ' r`h?h_F%Kzzw1e($[*xi:n}pU+W Z6ixi^:?jRZA=@F06f|]= $,6J7I?S$E1=E' );
define( 'NONCE_SALT',        'FD8ZJ64M1INvd2~?qr-aQUj6TnB0]6a#Ui|qE+Z/VZ(P$f_Yz8mM@)Hi?2|dXTzR' );
define( 'WP_CACHE_KEY_SALT', '!gD:*s<F:Xh6^kLjWw2J&`p/kaLp@i/9Aq9AJv?.KHI11)q+77$/t;n$nd}2_M)y' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

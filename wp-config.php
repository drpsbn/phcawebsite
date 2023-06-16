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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'drpsphca' );

/** Database password */
define( 'DB_PASSWORD', 'DRPSPHCA' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '?$)A3JZpy6)`]KPYN,K{YS8KHCGt0v^`4|q_-NiUZ6pP(z~-O%)L<dp_YQro[c^>' );
define( 'SECURE_AUTH_KEY',  '5ci}neX`U+#mZ{bD,#9DGtoSA=M@-_0fI}<nc/UV@u-p*ac)ohRQcI@FD_i@lrI$' );
define( 'LOGGED_IN_KEY',    'OxHsUT>x*^G[SClB}yD;;,,O%Z]^0}$+FH_aI{ddl5E0CD=<|n3[lLPtat!^1U7,' );
define( 'NONCE_KEY',        'NZgYMvP,a$~,F@84kjizKpQ fh+F*TKU8k}1+nrO~[v+FU#e_|7/K9c+Yt&XW>iH' );
define( 'AUTH_SALT',        'S+tYn7{QgpvhHKb;`pZ803ULP@T@!8@d_{#>pKx(Qz3D?D?4-(| :E`u>b=K+g{%' );
define( 'SECURE_AUTH_SALT', 'vn*;fvWro+yTcGFjgH`K7*axP}:?<:NjA_FFahsPYT[EgK|z,ktp~n,K_<%#F!hn' );
define( 'LOGGED_IN_SALT',   'm*uyC/L$#52dXP* gvs=4z9zt/6s{_@t33s;L;|z?5.@U;%IyRaW}WS~j;{U@!mh' );
define( 'NONCE_SALT',       'oh{7= .NA(I/pf:QrK<@PuU2}3<%;,1#E:ys_l}ky^~O,FGY`x[ff/TOX _)I3.,' );

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

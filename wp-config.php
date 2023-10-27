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
define( 'DB_NAME', 'plaisir' );

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
define( 'AUTH_KEY',         'm+lIQ|mmx}}09am@kAdrb^6KW*ccK Phe{W[&HIO-LO6*i~8}RSTcE*vRCMP1s@t' );
define( 'SECURE_AUTH_KEY',  'c.-NwP36=uJGiV,Rj>w(@`H1W+<qtT>#c1E^:Isje)Fs`JVWYvpj61YE|9>?nUOR' );
define( 'LOGGED_IN_KEY',    '$I?cn#$[T=ygS7lYzQ@!t~daFt1&5{{yug[+gqoL9aK+$M,D5TA;k^R!Vg6&rSiX' );
define( 'NONCE_KEY',        ' rp)p17w6IVr#`Qw@L&a$7Q86h}XIw%lD,3Wxn;B5X%`Ce$cX,((+Ge%U*cMZd-P' );
define( 'AUTH_SALT',        'f#2*N+%zr:a]|2e$W^Dp-[}FG|DgQIDO~2lwz7^J)Y}y/~ehK>V<IWJ2K,!xT}r>' );
define( 'SECURE_AUTH_SALT', '+-(7rUwKJ&4mw<I6yTwU~ ycjV?y>sTzl!3W2MPt$)YMu$ESBP EX]]oevUBP$`g' );
define( 'LOGGED_IN_SALT',   '2TuJ|D>VmNv<)b&7di_wh.;na]|?_@I0fceN1-Lpy_p0`#W]_h8GUq_s:GEaR^[B' );
define( 'NONCE_SALT',       '<0O7Jo&+yw[g[MeeHm&H=B/<T^!rlZl:xG)7DEQyvC2fVHga qr+KY#+P9k+iYm?' );

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
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '5v;[?c,z8PlZ0L#AzG5}{Iv6?/Yo6:Z4vApTNDV37L#YFJ01W&Qk(>~5Ni<oO]Yt' );
define( 'SECURE_AUTH_KEY',  '_d8k%+Z1J/!?>jJ:|*.z.Vlszk&*Rik!o^}|mRtwgU/:uz=,y12ONS*u(:sTu.{F' );
define( 'LOGGED_IN_KEY',    'e<d%gwg1o-K(Hi) ?WX_ri@RvHOWMADUyJks,Fgw3B~r?5SP8 0D&s)e Qk979Ih' );
define( 'NONCE_KEY',        '&:!~_ 6$k?k*JF.=xdW{mH>0 aj!xN.abG|x<H}p,C)tZv9_}_]6RvF#1)pPd]bg' );
define( 'AUTH_SALT',        'uz}q@m=]]3Cu&Fep7lxD(J`g.bpt9BQh=N4rhn>[EqWS/V^-:_-Nnoudxr{2rok8' );
define( 'SECURE_AUTH_SALT', 'Bp3w%<ElM4%2z:MDFbj#Kc)s+FdB#VOvc=hP|}!NEmR,~F>8x9tEL,VOZ_rKIh]4' );
define( 'LOGGED_IN_SALT',   '`/J1M^L}vbdrYHa6H]Xx1utV=@gwhLR3@nbsWkV}r}sz847OEaNk;k_D[e=/j}Vd' );
define( 'NONCE_SALT',       'hH*IHtOtb]%tns<2Oz3p<(}Z3.0!KDf|LRqapZ1zl&KaK}Pcug4R{tm{nr)sBuin' );

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

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
define( 'DB_NAME', 'revooltstore' );

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
define( 'AUTH_KEY',         'f+RnKS!w_1uFp`N|FsL/f3[&f)y8H~jX}E=/KQ;n]p*1}P|mf<(%-W0)1c+R+[wa' );
define( 'SECURE_AUTH_KEY',  'D_27G@zt=6m%5_M_=&4HRK6<DY:3?hMz/h4)dw^i#CTiZuBG1||mU{HJlYv w:HG' );
define( 'LOGGED_IN_KEY',    'lCwcfE%z.Iy]/Qh1cb!C5L)r5f#G0q+)g#G{yG|9}TavtP*ej|jZ sZd5$#rwk. ' );
define( 'NONCE_KEY',        'DdXoH|2Pg+XQa9{m)#S/XvZ^(WV4to,6P]*$IZ fXEuG=c%KVE)Rhn%{Gx)TuGT6' );
define( 'AUTH_SALT',        ']xTgP 2`0_nw(c71J+_VIH<eFa*,5dRwK0K#Gw4*Hf8`Uu6w3sNrRO#%[l/,j2RG' );
define( 'SECURE_AUTH_SALT', '+c0+j=-|$R#96ftc|5}/58jx:yu;R<sgXw(IY oy_2rdS)-ZL_YtgU1pBj>0B4t?' );
define( 'LOGGED_IN_SALT',   'FIUIhZRwNF<G04N4!w~9cn2~omF+(OBJ29AR;J5_9am|c<ih< >LI:f8%k)]vfWr' );
define( 'NONCE_SALT',       'yprW:tad:vnAcyy{Zz!@@%F,G[It$ASg54)>cy4&r^ <)rO^!ANN0{{PrkE;|ls:' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tranminhphat' );

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
define( 'AUTH_KEY',         'ZNEp{NdHZc?rXckHT }Lqb{nn:(:W7%[b]+J!f;y#rwwQ,*Xs5Fwc?h=S8FX^qLR' );
define( 'SECURE_AUTH_KEY',  ',%N;EnSgS$6<BiXO{:u/]j];bcFl&K2T%J%.~3GTxe[F(8W)E)z|>27S<3(c.,5&' );
define( 'LOGGED_IN_KEY',    '^bzBiW[yL7zg29P!&& %V]+cs6Jdh2~e5)u.fZo|<mCI=ZP@h)P>k^#P130A8,ft' );
define( 'NONCE_KEY',        'U/`[,d,Ju2fqIljX>Ck8ImFY16vHk^cXr@44R|f1:=A&vHR8jO:%}fLUp`a^ ](k' );
define( 'AUTH_SALT',        'P)YsMu<gqKWc)Wxu#+GNTP!Fn-RC?LDgo3M+T&ixguxzSSMti+Ui8ZyU&y_W#x8R' );
define( 'SECURE_AUTH_SALT', '2B !8pWvjb)mS+Z.01dJ]6Lh>DBR3aFghD!GX#qvr]He&6BR cL]S9H;_Egm42f3' );
define( 'LOGGED_IN_SALT',   'X:U!w>Cn0G{%M>Wr,K<RgH7v[~Fl,}$6C ~B&w85DeD}#J3/?(P*v4WUIOsA,e!s' );
define( 'NONCE_SALT',       '9+v^yl#hcOk@f@J7.0WnQ]Stufz2 vdzNv/L#,ibn>M|W5AtmLCa9WC[y/VE(?pi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tmp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

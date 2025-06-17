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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'w=#==gKK).qgx$@F}Wn_Erj6mB:DD{p*g:>>b:5e)#jSFXLzk@`gB{$zP&Bs=I`]' );
define( 'SECURE_AUTH_KEY',   '4%pW9SO?Fw?,bwKi@zoYWQHXo 3Pk1+/N%Xd!9=|G8{I](ux.>Zig>*j;Pu`Tl,x' );
define( 'LOGGED_IN_KEY',     'Q;)z/)`v(tPmF+`h@mV@/u*g^BcYAZ)%%eczB<Qc4;r&~iCI9^eD8pbcM9Z!HM$p' );
define( 'NONCE_KEY',         '>m:Tm )G@!IN_+,O%SRfw@8<!d)J9ZRo svZGN7:#G7=]9fX*/?^(ehL;#2TcT*y' );
define( 'AUTH_SALT',         'b!L 8_CIx%GP`>3%!qJDZl*r0q7rXk$c?/OM=O%=^~/+L+[a2zxNxa)0%v=iRrVB' );
define( 'SECURE_AUTH_SALT',  '*$S*q3l2K_W)L3n+~#=$W,seQb,?w&UFR(u8+z~qj i!g+tU|YTfe]vP-n!5A8DZ' );
define( 'LOGGED_IN_SALT',    '?v)dob[>gCLT;Yap5)mR$,w&5kC0CAev!E T-GHg(Km&{(2trj8Am2O/z[ftPGUr' );
define( 'NONCE_SALT',        'dmqRC,uU-GC/13(l&F5vz9]!09zsAfD~XC#MfJk`k<vz8Q][aX)(k0hCpB99dk]b' );
define( 'WP_CACHE_KEY_SALT', '+an)vv#0[?ZBJd{4c0%0]PTW_XTt{T] k5dMklbu;ySO:jhQ|Y8ZMd|K+C9f=^FO' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

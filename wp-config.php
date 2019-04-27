<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Boat' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!}-qH]e{{6=6([JeufP2k!O`B? .^cj}_d:Xb{MjQhk-[(*Hcf,{;{/b,oDtDUsj' );
define( 'SECURE_AUTH_KEY',  'jlo<HV-8%i%:CR$;80a#[xDD$2*oZEz<(7Iw~Tr*#i$Z>S!U{lB!/CH6/M7VSvVR' );
define( 'LOGGED_IN_KEY',    '&~S72&%E[e6XusJaoFLuCuoHW*vp~9*b8@N|6 >DO`pT4bcc&ogA`a0kL8}`8nHv' );
define( 'NONCE_KEY',        'h$}#EO5^dFPP->l4&j$Rya5Ozk5z@s4y;)K-aMy,$XKmXW3b:+FPt`Ll6=(l`WYt' );
define( 'AUTH_SALT',        'Q:)1.<364H9C_z`.q676lU1 D[SGB=0)b5cY}dA9?ew]:q/p|!Nfp~9FF8&d):5H' );
define( 'SECURE_AUTH_SALT', 'mX2uf.fJUoK35O:71RRIMCqJ?2R)[NgVB2;)GpJ-+LCW2KbeA}P+}tlHEpPbfHlm' );
define( 'LOGGED_IN_SALT',   '|-&pO7g/r/sbq-F6>3}Se5[i]Q:J#~5`:I6>Yf6(7[~}?w^[0kPd(P[pAB?^t(Da' );
define( 'NONCE_SALT',       'gdel.P/Y$UQ0!5+g{HH.jzv;UJ_tNr?[3eC#&ObnMe^2d8k8{TM{riTgjYfaRM}7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}


define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

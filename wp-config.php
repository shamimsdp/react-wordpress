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
define( 'DB_NAME', 'wpreact' );

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
define( 'AUTH_KEY',         'jdqMVd*7pA_,?^-g_0MEPzBLzI{EJ;-^eS|>sa99{$1?N^Y1cF.V@NWPk6^W]=]P' );
define( 'SECURE_AUTH_KEY',  '1MS=iHGecLe*p{R(9bfC;+xiV2^9:(giX8;QF-B1je<KnOWP&R8~v&> sq}Fz8Ub' );
define( 'LOGGED_IN_KEY',    ',)Geh4=EwxV^H[6TqQ:irQ30geiA^rJU`08kO+v8cd/L=/;H$G 4%!2x0,h cX{i' );
define( 'NONCE_KEY',        '8g>wcZM~@N`^r*auTskkJa=XP2fu{<+QYPq@~_Y4(uuqpO/V?0nEMyHY9vibVre`' );
define( 'AUTH_SALT',        'jrt-_+S#EMl-<{?`yqvNn`qFPu95s<|sNIpKUkW1I)U.RzGOj&3E*xNJs^851&21' );
define( 'SECURE_AUTH_SALT', 'fZq9>s,|N%}d}|l^%|x<;d_lH?G_U8.D).R{Ph04Xs7wAm&]s}zjj3WWCJH8;Z4H' );
define( 'LOGGED_IN_SALT',   'bn8f!>DTX@O1r$A;pQLF#>6Z`!bf(@e<|>(6sNa03Y61)@B2S2oe3,0`B)>o9kot' );
define( 'NONCE_SALT',       '$pP~>w4`zx3C5&HRI.nb`6mtm]P!Ome}dK_$P#+=`T|v4kwRhtR~!1$oCUjB#InM' );


define('JWT_AUTH_SECRET_KEY', 'secret');
define('JWT_AUTH_CORS_ENABLE', true);

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

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

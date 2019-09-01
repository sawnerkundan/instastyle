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
define( 'DB_NAME', 'instyle' );

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
define( 'AUTH_KEY',         'ULNEVnQjeMF},1>9o)/GP*5I}MSW.HKci:Vf0K]6XY0x9pl_P&`(oq/$F/MYVs95' );
define( 'SECURE_AUTH_KEY',  'drT9|(ex[PCG;VY&CS:n(e9rC~FytkcL$!A@P^<vvnM27WbJv>l4~9=5Nr;vsEy<' );
define( 'LOGGED_IN_KEY',    '9.^M;h2^},,q71Dzj=KN52^TZ/)HoDhW1!Z>lUfJ(Vt 99i(sg40#UH&Q|!p8$4f' );
define( 'NONCE_KEY',        '70(o[eg_OR=40kyVWlyu7^YmTh37X,MgMMY6Ee{neIj$XB?HXeGSc{+P %gH7]DZ' );
define( 'AUTH_SALT',        'rFC38IlxyrB m.r3#WC[~Q.Zl5M};jF6iTvlK+|hU+Q[R=BvBdd02L:01vj#]4FF' );
define( 'SECURE_AUTH_SALT', 'T#o$C<@_`-SYxf:7t2hh@(H6bS/xv%zkC*&4s{3E&y/d%iBZWru3&]x?,r.mtN.d' );
define( 'LOGGED_IN_SALT',   '$B[Z$gt9e)g )_~0s#^+H+-4L0y.Ll!r4]*7d9,_>6l>E|-)k_`[Cu[{TFz)gVk1' );
define( 'NONCE_SALT',       'jdEpEZrR@nNXe<.>;w6FQs^NhS._N-):P$[I#uZy3T^}[!+L!rjk1)m]&IKqeI<P' );

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

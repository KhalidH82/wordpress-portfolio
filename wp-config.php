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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0kZWPiGi,)dBr8r(|]{4<xrE?T|pk?,C|jX @yuZeI@MOLvFg6T-Za@&wf9$wol6' );
define( 'SECURE_AUTH_KEY',  '=fm-7Y{w`MkvPt*SOXlLVMF]M$S-ldw5Ueb;;]wMi:F%nSdzyr+<Lh`=I5xf|5(9' );
define( 'LOGGED_IN_KEY',    '~BMz!,1uz;:ph 8=*=[P1^749$#,KGnRE%k]{Qj`9%C!odvB-H4g{~2~vt{&`eKC' );
define( 'NONCE_KEY',        'ib=SWe.XBHzB?DPL<xpD[7 ]DJU[6y MakUsi#)KjD!fmOYh}dh;}D>+Nz ?x{rr' );
define( 'AUTH_SALT',        '`Z6l8mo^lD9`9,;@o W4?qd;K#xV&$v8oq;1XK H2Fq#h+1kh+NzM-(X2h?^{1NJ' );
define( 'SECURE_AUTH_SALT', '%1<#+PlR`tKDVp6t1-.$4Q;>p7XY5xat`Y,myU>E,oFSkq}s?}[f%:n9A%f+)Ugu' );
define( 'LOGGED_IN_SALT',   '+}W;ZSB#.)n2uMnuq[6^uxN*u9W~/_8x.C^,Z_L:9*Dd%:jIw`fX2U>>J&3D5p6H' );
define( 'NONCE_SALT',       'PgM *obq;k}N(c!d#&ia{LwNZLxMO_iSal1KG {BG9fQ(!yxQ)AuoN.Fl$ry#J8f' );

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

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
define( 'AUTH_KEY',          'qDq|*,K|z?!qB;$E_JZL%?Zd&^Be~ MmGS`R|po_UY?05$ etahg{jT%)*{T< i|' );
define( 'SECURE_AUTH_KEY',   '8]ViA.g4NKakeC!.ZaeP L#fKM.:^$,!i1zJykb[UZkIo$C[+4fL!,FHNK)t;@Q8' );
define( 'LOGGED_IN_KEY',     '}c--33>3NIsgG4Xh?kKoB1(VAP<*^gik(uf/B?2K>IX-vudo<tU<Tb<cyJvVFd1^' );
define( 'NONCE_KEY',         'h.]gL*!ZCO9E R81?j1UPBG`W=X:n|AfM7Ws)d}ia%c sFGdf#KUrm/<s!(-46c2' );
define( 'AUTH_SALT',         'Q<qBjhe[f;#h5[Wt=6D/!2jkT]%-~{*,R$TEw%=cqqojNQgD6!}r;}/F6h_BMyq}' );
define( 'SECURE_AUTH_SALT',  '.^^~Kmh6-tF`S>3V=DG<G)#IN}pPP>CLWDB@!OG=G&^@(Y?8@?e*O1:ub!]=ol<e' );
define( 'LOGGED_IN_SALT',    'Eywj~.q]#O8*a3<5=NP64k5  ZO]BP<y]fZ[ZrID}u%NtEfM1o>u;X1OKx=;ecjm' );
define( 'NONCE_SALT',        ':F<Hni8{&gYr On@nXl~o}Lsrm$ R:FYlLj#tb3@VC1nFW%} q)*`d:<rC)&K-g2' );
define( 'WP_CACHE_KEY_SALT', '|lnnYD%WoF`G&|z2(N[i>~Dwj1qaY*0O{e6_1W^7zs(iwgUIRjAzwV&giOvA`zh-' );


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

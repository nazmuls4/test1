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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test1' );

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
define( 'AUTH_KEY',         '`&4z7?%pE.._WM/)c#!a1R7u7W<L[gsH1K@1y5/HBVmvopP5@=#M.F1o5^<s{dZi' );
define( 'SECURE_AUTH_KEY',  'p|ZcF(n)w>0n(7GCuD=ZwXDf|l$XB@nqMJqyEyvgtHEDtCu2d8ya=4CwV`XkL8tc' );
define( 'LOGGED_IN_KEY',    'yK*U[ CR{JD~[s:R_vf07:j@34E_g1RW/YGAQ(p1-7)pn8+V^lkf~<6zONeLho.=' );
define( 'NONCE_KEY',        '{YpKFk:DAx,60,!$UqMf9/]7/Fp/2RXXEEs77V|*T;8%a0-9t ?j@8RAot+q|~qw' );
define( 'AUTH_SALT',        'ls#!uU].Tw%ZKX%XAG>kDpK[N8 1?gW;9eVz=`cF0qB~aZ-t<~+>]FL-$T`l@o*E' );
define( 'SECURE_AUTH_SALT', ']>].$ZZ{fRkNY/XTd=Ug{HzU/:RgL})cBGJC!2Jg4RB9fsZ`h|LH)d]t-h1A$hRI' );
define( 'LOGGED_IN_SALT',   'Kp+p?]sk><hKF2+OtTQW-N8i0x/~T?u$o;6% Mb@fme#mZ&e&WKz]?te;^ K>0Io' );
define( 'NONCE_SALT',       '7K}b0P-+DMr=h>$e`{6pC[KrSpUi@f!a6x`~y6svlx qE#(86;Zx=g:KPtDY]PZs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wssdp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

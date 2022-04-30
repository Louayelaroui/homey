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
define( 'DB_NAME', 'homey' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '(!CDw(Ej0OlA#[b N3I[>/%&+g]tFq=Upow 3%OCCt4$uW+v+tUf/$:mo=fpQFp(' );
define( 'SECURE_AUTH_KEY',  't78VTC[GBf_r ]-blh1^YsO[1d}!w`]L?2.~R!@S3ZyM6^2[?;SiE;PG7(Cc+T7{' );
define( 'LOGGED_IN_KEY',    'PM]}Fj4>v>gRtDo.6d=flWI3$P+OLAlr.<b,:X(xaxJ}aY2efxDH5s}KX>%}z*{|' );
define( 'NONCE_KEY',        '@Xbs^F8RNXODP-e#AcG}Sov0jqLs^k8A*4^IZf:8(y~%7p9$N.I_SjqgS1EoNe`V' );
define( 'AUTH_SALT',        '^^y|6rax!#z9J=<?Da`BnRi.k7L0GaHK9W+qH3W/fU,*ob=8}S3+aCuA.6!KrgH;' );
define( 'SECURE_AUTH_SALT', '?vVMJL_M<-</{aSL_p|sBZKt*HY8M+(l]__o/s;gSBPRkxT3i7.N&Q}tuj;_@ev+' );
define( 'LOGGED_IN_SALT',   '#IX[T=HiShm3U)58;12LIXp9gk>y:TCjHtry]bPFz-iE9Su2UDDI+WN&w-@u)a0.' );
define( 'NONCE_SALT',       ',OZwNtu)5ZyQ-TN5-D?x8{~Em9W);XzPU) q7<Zlwg0_uMT5R*y&ax^V}6@+96Z!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpeo_';

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

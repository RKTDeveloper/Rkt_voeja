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
define( 'DB_NAME', 'voe-ja' );

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
define( 'AUTH_KEY',         'CW.Kst6G4-JH2M[o3FZH|U#H/!;[${^~C_L1| 1>`:Tew$@E2c`^*^d`2&|woe=`' );
define( 'SECURE_AUTH_KEY',  'RKRv9N+Ox{]SN-0xu&i H:y4S_:{Tji[ ~<i };+zh30Fj_VA,g:@79_!DiB&ybJ' );
define( 'LOGGED_IN_KEY',    '[(,8aU8oxB];/sP4c}@}d6FGq|tukd/y%KW(3ivfxq3yj!Mu1fuB-}s9Ax62k<!D' );
define( 'NONCE_KEY',        ';)`<E-_qw.[u,$_eC/MX,DWZ3Lt`1.h(L|v(ce7,8t/(Y%Eqf:roK@pDUjr+-_v ' );
define( 'AUTH_SALT',        'ElhY5bChmZV_!_~]!>6yetMVt!6BB4e]E7cu>G4 4XZ/c^_Cf,a1X>V[>sxBL%Ri' );
define( 'SECURE_AUTH_SALT', 'ROk`M>,49$m0*rgWVbYE4L<l^V5q6-owG%xYfy.v0}O;U<)4t- ^4ZTp$JF&>1:d' );
define( 'LOGGED_IN_SALT',   'Eg?>_x0Qk/a=JrSl,*}G3v*8`k_c<w4kf_/HWhn-I[.n|rs#26$}]+X1J/#e^L{l' );
define( 'NONCE_SALT',       'FIa_[qIs(0j^F9E;@!K< +^}*`k5Ga_,>qr,6A~i>``5)+L}y[lsXTJLI(-(UnE.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'voe_';

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

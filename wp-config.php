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
define( 'DB_NAME', 'inacapvespertino' );

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
define( 'AUTH_KEY',         '.M1L*br,E/Z*Q(r7?^+AH>XqHxM|U!C(E l0Fzx797Ybr!iv%2u38LXyd,a2vFzR' );
define( 'SECURE_AUTH_KEY',  ';_lR z4-iN<$|qM~J@66@u%&<S>xVuWD[Q}/CH]1j$*,[%}OX XsHP5b(9MfQA`T' );
define( 'LOGGED_IN_KEY',    'e8^uw,90_^:j-@7hl0s(dax,kS2@=f4n=~s0./^6K{24+BQ/hY6ZW9|@~H(IM*~%' );
define( 'NONCE_KEY',        '4S`E%%]{4MzlW@OGsWY5c;yW?W!^{Vb.?-cZVM>KnM;Ryhw8gyMgW,6`mprLSo$X' );
define( 'AUTH_SALT',        '@C>ljRT5N?<:cwepAHF/ p(jR6;!k2v @VX^*JV^bV:MD#B}{{;7&Go-#A(xDY^`' );
define( 'SECURE_AUTH_SALT', 'I$X;xo5IeJ!hYyK}R}?a(~NuO?&6D:(.`^5;p@3X~k/JV%{sr/&_|sW{(YbNyP)C' );
define( 'LOGGED_IN_SALT',   'NQU9TxZ* lJF#WNp.!nT$v[O&<slJObgr>%W5c_++^!o5U|Axy3:woV226 }wrd9' );
define( 'NONCE_SALT',       '<5oUhnsUa%Xy.Xe^Y _=1/sT}t<7gIzJ^NcKbm>:}ta@#Ok6G8d*K6mcDpu9<jsc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iv_';

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
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

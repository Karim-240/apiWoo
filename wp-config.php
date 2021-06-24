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
define( 'DB_NAME', 'apiWoo' );

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
define( 'AUTH_KEY',         '|mX,.l9?ZpTCy)@,k*bxT>?h4%u ,+e;Yi^;!|CDs&%/2yGG;,eZO>`|?M|(?d4/' );
define( 'SECURE_AUTH_KEY',  'hkc~B/gK^bm$p*66;XXc^>IUX12[bCWW0z${A9Ta5C@{7/f9%Ik0Dc2!p<F$m[m>' );
define( 'LOGGED_IN_KEY',    'Zcp8p+S->)o{,4l;0?4YLil(u%cQ(pZwbFMsFVw4 2ZZeyJcbpXHllir:Z32`Tbl' );
define( 'NONCE_KEY',        '<aX*#_d>*NTDw[2azlt0W6uC*bCo1T#B.tXX)3BLW|GK,ZJLLHg{,E.z/=d)Zaz:' );
define( 'AUTH_SALT',        '/Z(%b0<d1W$}?6p^wG*IF2Z$=vXLWZu :th:Q#-wn-b3s~4U-lvBK9-v8+Hx84  ' );
define( 'SECURE_AUTH_SALT', 'd}sAjy4aqYE#>B*az72ig~CgF%><~e],Q7rpTvl pQ9QasnAr+>kd29972K-?0/#' );
define( 'LOGGED_IN_SALT',   '`&2n>B:e8~b@~$8lMU]]52^23P7OL^gjCX[TDC]sTFD;m4c&ON_oL,:NFR._$qA|' );
define( 'NONCE_SALT',       'ma_#:ca)NejBe:h6mH,><erR!i,xm=gE{iL7js{C<NMGYa*U&u_Qo8DG`~>R&+]|' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

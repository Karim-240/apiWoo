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
define( 'DB_NAME', 'tandex' );

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
define( 'AUTH_KEY',         ')wp9IXi[2[dG@l(JkajC>6.w_X8b%af{_dSO9)M?:/@/jt|D&B?9#}*H(UkC;nd_' );
define( 'SECURE_AUTH_KEY',  'r~:{%E8y[vZeEftIj-m,qOeIH@9#$teq2iDZKyM~f!j&L/4pVkN<[6stHR% $Wk8' );
define( 'LOGGED_IN_KEY',    'D@EdQ2prxJ)HJ&E`9N{LiC/Z!e~Eu7%[_.qA>;wd.sM;^7b5qX,s4t8uy$$BiSP@' );
define( 'NONCE_KEY',        'Zm2,v.J.|;Q_x0w1.EKlDI&&-,wSH,bNA.pw=mv:9BD[}6+kZOD{Vw#&XSk=O:<h' );
define( 'AUTH_SALT',        '{ok37kXT #`I!a?S.*fgy!@8sjKL,/fd AFN[(kLI>^)W+i;g+^VC2]Vr]6>IREL' );
define( 'SECURE_AUTH_SALT', '8F.Ksj2vY$w[D7h[Io<cHt~z-S7>>|./T]|9qX2I@C{%R~`YWGY+y-j6Wn}OvK9=' );
define( 'LOGGED_IN_SALT',   '-$iN|m1|z*fYSnOU ;VJds =f&ue1C0;U]I3B5X>&lKYOI<R?N-]=Ea}):>+@)c-' );
define( 'NONCE_SALT',       '}wxCxYv&*r<FG%usvqCZ@$3R~2dW678hUTw*jz,+03Nc|0|p@!ub*DNhTzO{]M$e' );

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

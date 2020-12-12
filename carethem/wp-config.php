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
define( 'DB_NAME', 'carethem' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'thushani' );

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
define( 'AUTH_KEY',         '9e>Gs4eog%^a7)*S;-oMGDpLoABd:b/F:Ypv~yQR>>X7nW@=V8y0yx*eq9%$gc`o' );
define( 'SECURE_AUTH_KEY',  '%Dk;:J3M;TA)ScU=0IwA P@|pv1F)a}rV.ND*Jm`M%/1}K&Dw+f+|R9jJ%wApZ^5' );
define( 'LOGGED_IN_KEY',    'iYl472@i!)$^-u{3b8~ZqkRTj3+#Zn)!At/$Q#5%|_<wZ*O,iux4j)Kr!Lvjf8qA' );
define( 'NONCE_KEY',        'WHQ[pH,s=B/QB.e/8E^,0O,nz(rgS0f;k$cA0+.BrWZSW$a_a?/J{ldJDMcz&%p*' );
define( 'AUTH_SALT',        'nv:crL)`I<Xp h#e%th#5_P[Um]!qML1HrULcCD9MfHnm$ocYPjOnu<GOiGP)i_M' );
define( 'SECURE_AUTH_SALT', 'K~c6jJ!t)s11ci/@~,86Z{}R![5t^V5?5%87:?1g2h(NbQf}+&kW=08,G2(E{si{' );
define( 'LOGGED_IN_SALT',   'f *FNFwoz 3[9%Wsm<bc/Vd2q!nNwl0Jbu$O!(EJ&8^hH*W#Aa-8^An+-ai}[j-^' );
define( 'NONCE_SALT',       ']4Qg#aqInEeUkC^d06H;tnHU2=(g#/NtnveU&q_3[V]es7]?7bWBA<*GJv2lvj0)' );

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

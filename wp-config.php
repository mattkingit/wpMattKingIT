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
define( 'DB_NAME', 'wpmattkingitdev' );

/** MySQL database username */
define( 'DB_USER', 'mattkingit' );

/** MySQL database password */
define( 'DB_PASSWORD', 'U$$Navy6630' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3336' );

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
define( 'AUTH_KEY',         'R;N.r&N^MLu~m7n{JC}Q,5OGN3Gh;m[D0$Mkw+5fTu?-P1U8P;KAM@!bsI<[$l!K' );
define( 'SECURE_AUTH_KEY',  '_P ^R*mZMyw_2<]WCvP}vLG>~R&bz(QbpK~W>gkRc-R4%|Za^+aLvqrXg;Z|xd+F' );
define( 'LOGGED_IN_KEY',    '+Op1*J8v7DEFxfv[@UqxYZA=?PI9,]HVU+$j3Vh/=O{p&CF7OH}058o-3IF/X1(m' );
define( 'NONCE_KEY',        '&XW$|5P2z%wlS^`I.O/RGxd6N%E[-KVzcm?GlPE:A!wkZ)4HdGy[Mad3JXcD}=7K' );
define( 'AUTH_SALT',        '#U,1vmF9$I LlIO9cNIvi;%QT+>J&{b|xBBMOtAWGVD:kR~(GDKI7SPF>-`~Mtaq' );
define( 'SECURE_AUTH_SALT', 'jmo9p_Dhhf}xKlVn>}!k3Whe(QR7>EV/f30Q}dI.Hp40Nw>1^CB) 9cVRfTeJN5h' );
define( 'LOGGED_IN_SALT',   'X&ZhGP:qvkttwh!;SeC}|&I_?m_=Zu,J|iT2SKf][aJPYGY>l%wOfeMB)[MNR$RQ' );
define( 'NONCE_SALT',       'K$Y 8ar$tG_{}U|jXaGz;;z~ffY:ZC-o<.LhN(0T${vu&J4=#uQ<)wxh~d%h5[`c' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

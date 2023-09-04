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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gpdb' );

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
define( 'AUTH_KEY',         '<k[hv(Y.?fh+9g{f^4x-N|cMk|=lHA?;RU$z|FJ~iTJUNe8c>;qP)^H#Y2uI8e!s' );
define( 'SECURE_AUTH_KEY',  ':lxT!h4^G.@VcEmdEjZLJ@msyJXZ:{+axhXwqw<@2q!Lw6Nl?poA.EC$$>Qk0jkK' );
define( 'LOGGED_IN_KEY',    '}*#a?&DeA<Lu&}9D3qV^T-u]&_Xf_9i<]=wQC#I#fA`c}a4F4s1?hU(>@WcqSFbV' );
define( 'NONCE_KEY',        'i=U{JFCsG R03]|V:IAjUObj2ciubfo/&[~CqE77d~S0HTBp *8D]XEDMY@K@G_|' );
define( 'AUTH_SALT',        '6BIxH}2PMv~6Mu?.>9Q`Jz(zAO 9B-]d/vt~I3,^vY4sx9aKg@!WA]G*(j^ZD+@K' );
define( 'SECURE_AUTH_SALT', '$cYqrI $/D.303q0]Q>Zak(Nl{bocTsE]9Wy9GVYik/:1zg!ZB17?L KV7T?dY6S' );
define( 'LOGGED_IN_SALT',   'j$w4Pul]/JMMb,HLJ%FHpL%iwC><V%#7Q_]TyX&Xr}J3e~#4)J[%y/KI.M|r)P:P' );
define( 'NONCE_SALT',       '7OkSN<ECMq<Yp)Q.&gl`J1B|XHfnOPbd5k S1=:C.] {jyR/SH0mmnxfVU}!YtC^' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

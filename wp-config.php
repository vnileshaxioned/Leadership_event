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
define( 'DB_NAME', 'leadership_event' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' uDz);$;|$*g2N1Y4Sedwk;0uJaT;u7O=:8aZckoJmR2<wYQSQ@<2YJ%&YkvMb3I' );
define( 'SECURE_AUTH_KEY',  'bM5]x(( >*@(k 8tPbo#T#e,UX3cCz5-uI1!{jHSxolO+}:b:nWp%@(4-fOUL)5L' );
define( 'LOGGED_IN_KEY',    'xz:s#m[Tzq 6$5V^vSY1uA^^^oITCP:RIoK-v*;aw#Yr4aT+p47lZWz_!bNz{;_L' );
define( 'NONCE_KEY',        'Wxe_QVL~-?vQ/=VP,_ei_+Xfs}4;+3L9%6JN.v[<49~A!43c8$]3C6M$uD=cJ(SO' );
define( 'AUTH_SALT',        ',3HIHe5Td<<4BK^F#q`7oZqmD:alLLT46?grqOF[WrshptqbJc06rP_}zmy?7VVL' );
define( 'SECURE_AUTH_SALT', 'b&xDyKvBFoi5)=Wl[Xk.WA!4;lMNkL8|N~3Ht+A[H>1]J.Lz3wb!,}1{hkz_(LAw' );
define( 'LOGGED_IN_SALT',   'u7,|,xpeXjq;e-w{2hRe7E^9$IaMuKD~&<2[7`a~}RqT,U(bM^ZUYB%Kzg!+z]o5' );
define( 'NONCE_SALT',       'f[J5*#9STj7UL=V]`<|mob[jJ[kQ`mw+}WTVm[Ol2.!AFa,/%H}Sopkh&clnq$%t' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'onqorTemplate' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'v38#FZ4sGCh:g--q1~9|;+Uz/Qm`}WKL aU6+v9SB)J$jy~JaI(cDQgFd;/UMc6P' );
define( 'SECURE_AUTH_KEY',  '89WyM1&n&zg@H$Z,f}I<<o?-xjG>L`<B1G1g!sx7HQ6.wGTgSY}E;nU[TJ|; @``' );
define( 'LOGGED_IN_KEY',    '=q]y@XvKK1_wTI_K.MCbCb1lCM1+D5w(DH~t=h?Yp6@*q$ZZ~?d`_,x*ij{37/S0' );
define( 'NONCE_KEY',        '5s,s8>XVg:_$J]4b~N!DQ}.}hjV3W.mp1ub!}rZ2fA`XqE+qzZX/.HRec_&i>`^|' );
define( 'AUTH_SALT',        's{pWBw2|M][`M*V6~3 X[-}At]{7/b&EDgNCsLba|2Z0U9OZEJr?7y?S}D-b@$=J' );
define( 'SECURE_AUTH_SALT', '+2~T$^g(DG;I(mRVK]?=wHGByjaO&v@0Zw5KK(.M mnbX/u@3hyWC;Gs} ;|0,]{' );
define( 'LOGGED_IN_SALT',   'T)6Eonhf]Y<e%zhPby=8FH3Q*ouEML1-<IWvpelKF98qVl}Pd^^bSZprdH{Jm4.w' );
define( 'NONCE_SALT',       'l;An%WW57}<.`+!YsnD3Y#yAlfVsxfvxFgVb{?rj`a]e[Fe8fak-K*&p?^M]+1|V' );

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

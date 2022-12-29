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
define( 'DB_NAME', 'measurement' );

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
define( 'AUTH_KEY',         '0f$RUu@9.c=C:Noh/ciB0UF.hWQ}[rc_T5{ui!d]6HDYg8o^iZL>=cPg/cN[ oFv' );
define( 'SECURE_AUTH_KEY',  'xZ#4Wa;Ds[qHY|F|pi3b#kN_z5Y%wHzHGwa~fslXVYCg(ze-R/+mhRs~oZrTzm7w' );
define( 'LOGGED_IN_KEY',    ';6 `%]4G-ZHCOz.D+vHLxc>w} 5IX@ob/J&bu,I1R5y#+X`s?xsXDMq2FKGB G22' );
define( 'NONCE_KEY',        '*$(y1;P.C=[tV[B:_Vsb sGkv4eY{ky{YKoW/9?!Q>f[9J0wfnflTz-E+Gf+B5AM' );
define( 'AUTH_SALT',        'BDTp1JJ}_*1wy/|mo2~6=;j31^H8pVKfK1e;c7#;w@+lz=l* =uC;]c/]:p!m/uI' );
define( 'SECURE_AUTH_SALT', ',-Tt2vyuTlOZQrd>=|#3Xy]M#?g;S:dte% Tg BuWNxDF7_uB5o5>4)3tLh5#v[{' );
define( 'LOGGED_IN_SALT',   'MgCG>-@962<%$~!lgW3-moh,9Y[Cd><*Oh=[Lx%Im-DlrV6u&fC4lj=uOM/5M>P~' );
define( 'NONCE_SALT',       ',U:igl*+vRFN>0a{bCA1n1TQAb.R{@;4S49utG_E9<K92EH%5eA^qg :[;Lh,^,U' );

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

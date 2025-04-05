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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'oLMgX.Hj1SV)fGn6DA>EZ^2;I6<7|x5{rTr_.4S3zkV05lt&E xB=R>|astk,UpI' );
define( 'SECURE_AUTH_KEY',   '/ONY?Yt$TM=o/r+{]uyC`sF^24Oiw2q<sm.$/bS1Io[D,JMM9}i[%Aa,/-F<ymNQ' );
define( 'LOGGED_IN_KEY',     'Y3kWSKeqb+P(b MU9pc-Rwlu?WIQ[*b6i^)w{w/tjx pu;-_V+n4vddGXT6ox|s>' );
define( 'NONCE_KEY',         'uqJ)y[c+8_Q?QfL@8OE*ya;/9$Sos)Yp&c!uGeoh@3;+1Ad/<P$KW.r+;yStBq]F' );
define( 'AUTH_SALT',         '_Cm[XN<{eml*n5=:(L,w<[FBbj-FDwUN--z%*:ZM*7C|4*7.!^w84T{E%Q>#De/P' );
define( 'SECURE_AUTH_SALT',  'wkJ4c(IdfI(g`r8Pt/A$`[33H9 ?{OQzhL}+t}GCX]#ZNJm5bxwDCBV,o-NJ<V`%' );
define( 'LOGGED_IN_SALT',    'X6} J:@XWM(2uh}) /Flnsx{1)@9s`C6ZUYX~G1=Ifch&JDy-Ucd+bVMrkBHi({c' );
define( 'NONCE_SALT',        'QtD y0_!htFC?E1xid|[cx1V.Hf3xp*L:x#?E6*Gt]~=NLh@d*.N/@Hr^j+197u+' );
define( 'WP_CACHE_KEY_SALT', '{WdO FA}Cv]OoGP!JRQ7Fx#K)+?RC)o O$9pc>hLbC<>Y2h=C=(!@4-9:V^89<U*' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

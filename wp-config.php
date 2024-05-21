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
define( 'DB_NAME', 'db_wp_new' );

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
define( 'AUTH_KEY',         'PGeh#C~2Ls3G}xZcV1VF@u>lD ~/Lia68ITcl4A/sn(dUPXFE(Y{Gq8SF@vizcX(' );
define( 'SECURE_AUTH_KEY',  'bcDr98,P^fafckc4|JAYFSD5IUYL^0pJ~(!Q?0<Io)PXuX2K[i!&UI~6L-YH1+YZ' );
define( 'LOGGED_IN_KEY',    'hQ(7T/Oo2-q@)YZz%B53/;Tpy (|Q5/mChlA%Bqc-`xnhLdIv5r%$jHXBh0.7d.h' );
define( 'NONCE_KEY',        'JQ%TAtXK)p~;/JuFw`xNzX=rg})i&==Or<3<#C1rYMrR69sa;X+G27xy<We(gR_c' );
define( 'AUTH_SALT',        'J0&y%ib$WyV+q?p~HCX,h<gOp2a`<rX8~LpW[CBmx=nzkOszPVk/giej(eD,orjq' );
define( 'SECURE_AUTH_SALT', '1CPU#_>!^&3SUT9WIbK#!^#6N`gB*bLY!q:ezd TgM%LEq6DsM#lSbOik1<Zqs]E' );
define( 'LOGGED_IN_SALT',   '#/E4<aLJJK@^*}8/vsmLdz[<dyCT1Xv({H+oLY)On0jn/ZQ1i8ahef#r@$w4]qa/' );
define( 'NONCE_SALT',       'W]DMo4=D_-+j9$?*4Cpq9P,V#)8$zt?F -`F}ShKS<}1,yNvZQ=oSD~d|%NHaddn' );

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

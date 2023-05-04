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
define( 'DB_NAME', 'bricotips' );

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
define( 'AUTH_KEY',         '??(A/R?6N2(&>Z~[Qe]Fp=o3Gpb(MHUF%E:AYv%+FNd(Q1uC%%lW0x6QyB?.cCxZ' );
define( 'SECURE_AUTH_KEY',  'N~SNpp,?cm|msJ35d;dGdT=#{eje^7GX&PYh^O<.mN.l+{u_n&7z2,9>V)XlisTQ' );
define( 'LOGGED_IN_KEY',    ')(`e^;CWEmW~$WZ5O#@2EFJ*J[VGYlZMApj5d[v_@mTo#<y[9:eMHE_lL%RjuAuj' );
define( 'NONCE_KEY',        '^Ka.EIVM]%GQD,m%q3;wA7*3>l+mFS5Q7N} $HTFthOn8i{EH$f&*EszJ*T}^ub.' );
define( 'AUTH_SALT',        '-^^k|%^N05q~!a:c%yzW]5Di<nAu0bPJE6;pQQG80#pp?gGBzik?<:5?,;k@C-eU' );
define( 'SECURE_AUTH_SALT', '%N&!8f.<kxw&51G*VEsRn4Y [Obf2P[KUOY||G-hjJuz6:6gTPM-{8-P7eylbheZ' );
define( 'LOGGED_IN_SALT',   'towqrl<1XX%%$R,X3w*%}8X#~{_fBSzSr[]aYGxtxU &pq$Eo}/9HPL%)owy`Q*q' );
define( 'NONCE_SALT',       '7pkjNB8pXtg^%PyPW pN. bs3kTl82<GT3a ADp><{YL_W`Kb4<ew13S[ry*n2:Y' );

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

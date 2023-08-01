<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'QENOQEQ+U3xgc2g/fi9NV3Q3OSNrLUkzekQ2ZU5Qd3VsLEx5K28sZks4aGAlRDRiTyx1ZUk3ZHBvYUZKMzImdg==' );

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ':6|]p1B*K[`5b:gKsS+6F)h-ZV<Xaf^<N]Saa%d^KN~TY2@AtGwm:b^*`XY}]z i' );
define( 'SECURE_AUTH_KEY',  ',X@q^Hc{wr/dcPC!jH~/-5g8/g#EzkU{&y*9~CkVtS? .QV&V&?8hvE*|GtQj%mW' );
define( 'LOGGED_IN_KEY',    'E*Y8xX6W,@AJcbQp=`.!Dk,4]Ll[+qi*P/Y6w$(DDAbOH/R`/Xgv57MqOc*r1{9<' );
define( 'NONCE_KEY',        't^GGkJ,gGcNZ#cChZomG:NiFa# HhAvEBt2o[,48ei}L(3.$agztsS,J*;uIREL0' );
define( 'AUTH_SALT',        '(8IOQ:NVcfV>ENrZx5`;uR[GJ>?LJe7yeC53U45#[04]bU%6W6b<I5l_UMeEpIQF' );
define( 'SECURE_AUTH_SALT', 'tgb24s_9oo3_c zMy]5/T@aZU~5/<yjyiwVMy*tug+f[30pE Bgw]DF=^ o3^S*C' );
define( 'LOGGED_IN_SALT',   'Vpp,L!ex;w9IJ#1h,0(AF 9z?)%w5>C(($yz.9ko,[5XMtR(SNq]e&(}!B>$V|p4' );
define( 'NONCE_SALT',       'LTvbCDb{UKrWdrv;CXf,@]NBJI6;@/S%Q!}@ky[q!$oArd)xZJ7|bi?3@ut/(p$s' );

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
define( 'WP_DEBUG', true );
	
define( 'DISALLOW_FILE_EDIT', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_pass' );

/** Database hostname */
define( 'DB_HOST', 'wp_mysql' );

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
define( 'AUTH_KEY',         '2p_93pI:]SN:V)dv]..Njaft-2X|J{6MZ%LrU.z?$XuT7h[gujR|8vyy/Bw6A^;o' );
define( 'SECURE_AUTH_KEY',  '>cZ{*0$b@c;&}$mGG3ur&}]el3:VYx!E!lHci3B}L5n}yM*;dLU]+UkI_*cGS-%5' );
define( 'LOGGED_IN_KEY',    'LDUNMf{>`pMR`rZ*zrM>s{>nPE@-#4Wa=nSPa>KX;N=01|qWZ]2*N=Rdjo#oN0 %' );
define( 'NONCE_KEY',        'P-;>>i)p_Tq$ej5)_m6Kb)2B3Mqmrpb,L)u  ^RI[;S]xz.kcL*q1iiWD bCrQHi' );
define( 'AUTH_SALT',        '-] &N*HFO[^yH=qFh8g^p}Z#14zFOuJC{|`tkY}i~GmPB?:KC%_6]4adAR11&hzd' );
define( 'SECURE_AUTH_SALT', 'A8D]*.B,ne>;r(_5s%umE+lb(zIl)?gjcn+*kd=](Pp)}j8L;-{:6*w>4q&A>tSh' );
define( 'LOGGED_IN_SALT',   'cKmg^+2S/q}3P~Bk#XNB$M:WH*Z?DIMqYJ#FM>^h %CF>m{ceF#,]d4!S91CSB] ' );
define( 'NONCE_SALT',       '_BY:2KQiVbvtmPZ*w-jd]#}.xQ,$]<t6{#gEVyxFEQ{E-2h4=(otA?ZfG<Y`wte-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

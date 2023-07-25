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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '@51S6d`<v:w^HCo1Df{;PZ?sbnx:H2;D5[j((CjyjP:0R>qP2>90[n?D.`@UzRpS' );
define( 'SECURE_AUTH_KEY',  'v.qJA~{Qgtnq[+Y{fDp0xL%wE?%A~JlmC(C|*(Ybn6Oh==R)Jd4z~SEQCD=u7Kzr' );
define( 'LOGGED_IN_KEY',    'U{S(:4`nq4{E>yQ]~M0.d.IM#V1i=BG?tu[}dV~Z0)mP^&7q7>X!^+; pBSt|n@_' );
define( 'NONCE_KEY',        ']-hk?rTzI{te~VM~CAH9(B&.xz{{_ozxJxj}:!PMlA7CE1Pi%xy}|N~RJg6YB>0`' );
define( 'AUTH_SALT',        '&D&*)krj#Z^pCW6bW{~wA1LO`msjM&&BBn7@@J4YfZd=ihI4!b}$OU4t:)jZ=& u' );
define( 'SECURE_AUTH_SALT', '%`!Qx~|pDYC],p&Hy~8C{$/Vo^Uba97f<[<ltn)ct%`:Ug?iM7I)VA+y{+/K,URH' );
define( 'LOGGED_IN_SALT',   '3b:Wv)xqU.HM>#E-Pef^Ya%w][,HL9Aafe=(7T-3AMa1LmDJE3dBKcFyP;W&s%O`' );
define( 'NONCE_SALT',       '&sI@9N$Dh=&>fUdwfp6|jU3njKt^y6#c@` iVMBJvPu3YBH1h#=`5L?BXRs9NJ,l' );

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

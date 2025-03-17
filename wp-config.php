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
define( 'DB_NAME', 'axumcoff_word' );

/** Database username */
define( 'DB_USER', 'axumcoff_word' );

/** Database password */
define( 'DB_PASSWORD', 'hPr(L8d-rmKK' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb3_unicode_ci' );

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
define( 'AUTH_KEY',         'GR5EchD_LLUM!/d%(rbDJrK=EK0o;U_j#euOp4w))^wWuIFPLOGb4,rm+/dMCv3[' );
define( 'SECURE_AUTH_KEY',  'Vh*=jF@}/GK )oQ-kCiz-C%=_@OwYo[MnFN`PW(B5%9g}dipNQv TN?@A-JeIQ a' );
define( 'LOGGED_IN_KEY',    '=Bcfj-;<5|*!e.m5zl.dNRivz]i-{[J:OPo?E&N`^Yn|eWBpw%,C;TJa%)2zAd[Q' );
define( 'NONCE_KEY',        'Ps_..[TO(416F?It4:yo>TsQidZ$3C;C=U5oeKGUAJ*K1QYUY8Wtf@Gp$OKrO|/h' );
define( 'AUTH_SALT',        'zC7PIo3*h3RJ(U^:E>]K})lt6SD)hu)}ZJA}(ubOlsXt>jZfR(6o{w8WZe@C*rqW' );
define( 'SECURE_AUTH_SALT', 'y_r*/Ty{<Rt<~e$}{Kx_LM#y@UD{=2e)B476uyK701-PiFOiVsHOZCXIBFt@2xh3' );
define( 'LOGGED_IN_SALT',   '8Od3]ir4<xh.GIVTH[OB]2[!CINgy-mds6}$%.YptY9w!O!8KuHO_?=M;6-NNX:s' );
define( 'NONCE_SALT',       '}pw]gp1YNRXhf#_9YewZPnPe|Zr^xT1yf|Xg[9tU=S@|Mm_4Zdt[0;eH%(fYO}]_' );

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

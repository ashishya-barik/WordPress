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
define( 'DB_NAME', 'simscoin_sims' );

/** Database username */
define( 'DB_USER', 'simscoin_wp_rgg2e' );

/** Database password */
define( 'DB_PASSWORD', 'tQ1*4@fm5~hhyBV0' );

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
define( 'AUTH_KEY',          'B^E)MM#>qMa!2Vo6d& >moM!!u![h5xzJ:``vH-wCxh0*5Xfa:1VcOH:@hZT7E*M' );
define( 'SECURE_AUTH_KEY',   '@^2LO~G`R@17hc!jjwZN_9S`%nKBvFq0d~0h_?4B3,8P|jFCg%oE$1Nxlk5<^N//' );
define( 'LOGGED_IN_KEY',     '(5?r#4ob%syg(GvB|,G1?ua.x.u~I^)m_.?tnNG%xXl6lqJ76pc:.2 0UBLdJ^XO' );
define( 'NONCE_KEY',         'Z`e:nwGE@-I8__?pLTf-[[X,m_KPt+A~|4yuRW?*( 6&BO`By>%w/C.|+h[@A)u4' );
define( 'AUTH_SALT',         'pz.wMs1O[<$lK44A#s9v3#t^5L.8u2YG2S =3PT;(M3@bRQyxP0u*v}91gu@A|;U' );
define( 'SECURE_AUTH_SALT',  '$1hd0:|WZ4}Kp7kGpI~0VA/V^+NwP6|<q,CcO-u8Wu4~JfOi@.Y8nHtqOxH5r7QX' );
define( 'LOGGED_IN_SALT',    '[Gb+4HBJ&nNnT[noWHHD~&jX<YRD)cLybwHKuG*vCJ8&zH96#%Zajl:*D;D dEm]' );
define( 'NONCE_SALT',        'dc]^q/iVm8}-S-9b>{V`#jYE9z36Hc@qwVC2o`Fu,_zL,/UWi|w;^GrU+{,RTI>L' );
define( 'WP_CACHE_KEY_SALT', 'a:xV|O:4|nVo2`gejW6)F,G|KtcD%8:33*[E]fgOUG9WiL*cu<WfPDS9?a9k_~oO' );


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

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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressTest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '_vt-;P,l0K|91/f&-W/|5+CPS-AZC8GJ7e@:zn,tc#}z%N`hXmU(|OFcmO ;<X*V' );
define( 'SECURE_AUTH_KEY',  'yp$+kmjAb!?;bf|W8?3FfMT}h>|Fi=U5-Bav@[6BBa($4O:.L=}OR8`~y?a_hBep' );
define( 'LOGGED_IN_KEY',    'd`mt!Ca6-#.FE/@s%$xiG?uyqg_pdf$.=T8Rdqi=Gde}p 5V0B*7xX4Ic|?{oHR}' );
define( 'NONCE_KEY',        '%c~O|RaT,1Hm[O{bER#~{*1-!NzQj8/[E{w:F^kjw(Q,`B;K@&*8Ha]@MkQgp#T<' );
define( 'AUTH_SALT',        'P}RSB$)B>>NFcX)fTog;+;P&Gw%tB^u]zy)B;SdT(Gj5]E[gpy3L]9Z[QksE2d&%' );
define( 'SECURE_AUTH_SALT', '~*3YMnB6<)i-N(^SN|AV9Xe}/SdWSMqjhiMB_fu]VY38^D2f$TU}^z!0f~ybJ@B:' );
define( 'LOGGED_IN_SALT',   'm2*+G[dU$R3G@S V8]f H%DJb<l4Fo0OKA=!*4<i=S Rh2F^OLHzA8B+Q,ne|1|*' );
define( 'NONCE_SALT',       '@&Ir*uS1H16V6I~%K cp_DNnGzfM-</)L{Pj;9A!cTa81(B@A| NJ=:xouaNJR*!' );

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

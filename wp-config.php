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
define( 'DB_NAME', 'mikolajkujawa' );

/** Database username */
define( 'DB_USER', 'mikolajkujawa' );

/** Database password */
define( 'DB_PASSWORD', 'Admin1' );

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
define( 'AUTH_KEY',         'c)G^5,`zNF>6/rWW)K@)wHnHN]l6%@T3j156AoJV*o].4B$QZW>UOL@_&@e7,S&8' );
define( 'SECURE_AUTH_KEY',  '!@~F`s2)Ph__|$<hV1h}CL[S@|b @c`ZLrad>d?Gkt9!QLtHGJ#VDk2t6Ofgh^W ' );
define( 'LOGGED_IN_KEY',    'Y]/%5eI[Jt<cMcNW6A5}4^xgI/Q_yd4`pA$>I4_N(:2Cc5CrEU$Lk8@)yem1@e([' );
define( 'NONCE_KEY',        '<9rzki~4o5oluzH[H0^*W><B:e}&K[qiQ] <y# b&!3@Oq9W!WB5!6H/7:N#.2`@' );
define( 'AUTH_SALT',        '+EQ]do)UK&7I,-yN7BE+T{{<>cthlQnWPO|i|NsfiQCG;AH$nHJ:*UN@9n4l:KpK' );
define( 'SECURE_AUTH_SALT', 'Fmy62cGu<uI8a3J3Oc2u~!SrGGdfn`UPFy![v?tKHDtStdBR2ead*s5W9+=l |o^' );
define( 'LOGGED_IN_SALT',   'wk__X[Ru;L85g`_sf~ab{g*BvgQ./o2tiJ{s$RhrCr-*>}o?W+qwm;um[|SkhyIC' );
define( 'NONCE_SALT',       'yP3gs2QZM<%_lQk-r v/<98R@<Inh6d^B3(a`j3[o=ja[U!/l:(Yrhuu+kOdrB5N' );

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

<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'epiz_31564581_w455' );

/** Database username */
define( 'DB_USER', '31564581_3' );

/** Database password */
define( 'DB_PASSWORD', 'qp42A2S@k(' );

/** Database hostname */
define( 'DB_HOST', 'sql105.byetcluster.com' );

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
define( 'AUTH_KEY',         'gidtg2illubdnfl0rpu0kzjbcmjbg5rqesuanx59mu2rmktfuju7m6dal7dptern' );
define( 'SECURE_AUTH_KEY',  'izxwazz6zw6mnfb5p1ilj4unbxdjtzb5fmiomwu93f35q9tkgmo14ih5byiouvjx' );
define( 'LOGGED_IN_KEY',    'o7i2q0msacali8web8o5rl8oos5lfnxwnjvgfpd4nsc2vmujryulsj9gao5dk25h' );
define( 'NONCE_KEY',        '5gloi4ffauarwdtmu8cjnfs96srfmgicgfnhtwpm7rqfuxsyop8xzkvvqqunmekg' );
define( 'AUTH_SALT',        '6m0b2jtf2v4dpfs2uwpv27qk3h5jxgpccziasdozpx6ogoeqhdropwhpjubuvxhi' );
define( 'SECURE_AUTH_SALT', '0quxmhlc1vloxuoatxxen2fgx8etj7afhty8pmnzoqzketensfrrj2nqy3g2jvvv' );
define( 'LOGGED_IN_SALT',   'r47jewlolozuwy5g6eeqxoiazkqr0fa1b34psndm8wgrp6if3lgauldyetklezq1' );
define( 'NONCE_SALT',       '7fh9atxjoqcvan9itow7rtft9xt10o0phfvqcgn2owyiib64prxtsn9p6iebpwls' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpj1_';

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

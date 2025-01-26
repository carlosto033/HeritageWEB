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
define( 'DB_NAME', 'if0_37875418_wp877' );

/** Database username */
define( 'DB_USER', '37875418_2' );

/** Database password */
define( 'DB_PASSWORD', '64S5.7pH2.' );

/** Database hostname */
define( 'DB_HOST', 'sql307.byetcluster.com' );

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
define( 'AUTH_KEY',         '8iuzgpmruxjuqn8kdy4uu0afrgdj0pbhdwm765numxftaqn45xf49fxe0kj96qji' );
define( 'SECURE_AUTH_KEY',  'd7gednjaffjyjqxavxr992xnzmnbst7iijd6pmgejkfq2vwujcznwwfvq5bzi45v' );
define( 'LOGGED_IN_KEY',    'qzb0wu2k23o6qj8ozeuhddpdlaanmcrmtqma3ogfsebeumgnmdpneybthxvexg5e' );
define( 'NONCE_KEY',        'pbam69mc2xpovueivgq1hl38fdvaqpaosmlclpgnuoa8uy4gqgvmxkhpw3omyuw3' );
define( 'AUTH_SALT',        'mzobtdj3u1toz4rgw3k8eprwesknfc9gjusbtwrouqzkd9e49pujxqr3otubxvm3' );
define( 'SECURE_AUTH_SALT', 'iwjaujwfrflnjmjcmtqt39g7kl15zasxoabvb1d3q7byfjonbdmzk9aeqvik4k2o' );
define( 'LOGGED_IN_SALT',   'ucbex7cr1jxvpbfqlsysclzu1ccdrqgwxhsw922karbsznalpp0xp67nrvsw5amo' );
define( 'NONCE_SALT',       'bkiqannace2sxbrcsueozcrlxf72cv9kjpniui8fjou4sc4oaomyrtrlbtb8hki6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwb_';

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

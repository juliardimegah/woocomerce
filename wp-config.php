<?php
 // Added by SpeedyCache

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
define( 'DB_NAME', 'brilli15_wp320' );

/** Database username */
define( 'DB_USER', 'brilli15_wp320' );

/** Database password */
define( 'DB_PASSWORD', 'hPS!14)5pL' );

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
define( 'AUTH_KEY',         'aiavmmiawfcty01mt8mvhqaapmpah1zdfmamtpcbfd5be3s8dccw9khtn3xje2fq' );
define( 'SECURE_AUTH_KEY',  'm1qnifqesri9ir3jzarjolzc6upnrazxhrbiqdbj4r0ukojojigs0pdume7i0xa2' );
define( 'LOGGED_IN_KEY',    'pqalce0mzlex3trdqba0rymhmwaydm8yiylgv6gxfu2gtx0kf1ilsqcojevhjux8' );
define( 'NONCE_KEY',        'n3fdvqteltfgtrvdogmtqsvvwcpaqyrs1o80dg8cryhiswuwyu8iyyyufu4cwy03' );
define( 'AUTH_SALT',        'tzlsxn6ezlva9noi6spkklnglszbw0pzexdtf2tkqemat1dhtk28a621ezsrqfk9' );
define( 'SECURE_AUTH_SALT', '8i1cga4g9szkze8ig9nhtvaprtm5yi0jcx5q3b7ghi94luxqaf4d7mfu8f5hdkjy' );
define( 'LOGGED_IN_SALT',   'bl8hy1o3ei6yyniqvyk1mldtcwplrfcvferyzdtsy2ogtfqac8lgginmfmsbrabr' );
define( 'NONCE_SALT',       'w2jsbqhuauigddlzfgyjupb9flfleujhho9sexhzzfyhbwquyn4fbnmoshs4gijw' );

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
$table_prefix = 'wpcd_';

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
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

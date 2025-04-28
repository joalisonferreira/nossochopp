<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joalison_wp783' );

/** Database username */
define( 'DB_USER', 'joalison_wp783' );

/** Database password */
define( 'DB_PASSWORD', 'x83[e36]Sp' );

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
define( 'AUTH_KEY',         'c6xhrzmjx8l74f36pwpz2aatqcwrwwfnxumh1myskq8rulzpx9ssk5l7yxj5ko1y' );
define( 'SECURE_AUTH_KEY',  'ryirbbpyca3bb1veuzsdryjznwk9ouvbzzh3dwokxooiwcyq9ltw0rht1vzzyklj' );
define( 'LOGGED_IN_KEY',    'pxonhyonh5qbezp9850lxe3ykummiwobkjoo31ohrrgjw9swmmlfqrsglz5twkmd' );
define( 'NONCE_KEY',        'bpeglisii2srndotjh0rwmtgauyv0wz7h9cwf4l8omjccsep7kjbtgsf7rqqg71f' );
define( 'AUTH_SALT',        'geu0asy98kn7hpwtkt6trsgcxvbj8dz5a0wy5tosrbvr0tpllmir12s6xy7av6pa' );
define( 'SECURE_AUTH_SALT', 'pxdax2yihgsngdpro5pfv8ehq24ne07wikr2c4h2jmyfp6xnesduov9tkebzc8nx' );
define( 'LOGGED_IN_SALT',   'n6qstnd75dk4eyrhba1zmnoy2vyxeuiztsjrxr6iia9nch0dizk1vrp3cd6xyxwf' );
define( 'NONCE_SALT',       '0qcvnjzgavq0goxtpimbptwkma3rzky48ul9ljxkkrbrz9ehs9o1a3urx94raiy8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpi9_';

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

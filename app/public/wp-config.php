<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qyHW/n8inGoKwFKpd7gutZtM3h29WY9vuL6Q9udS8VsohfHtm/9kdrfnDBeTTk3Nds9OtFYY0PZS9ymxmb3ssw==');
define('SECURE_AUTH_KEY',  'sUSMQCLcQoqgpw4f4/aBSv+xwf0f1sle52knpPO3svpBApWvL+kJyXXHccLE4fjeO1lTORKSVMUKnj5GpwagsA==');
define('LOGGED_IN_KEY',    'v+X7d/OFgsMvRJqnt6eA6oXkrCqN3WGCU7io1SbAVobsYZrGukkpxQ22bEC7A2NSscDWqpI0HoysN+Ww7nZvNA==');
define('NONCE_KEY',        'tMdl5Sbd3jm4kkIStATaPgY3nsfgJtLO5XST4MhwI0NGO9fQKDWyMc/52LNBmgRSS6Jzv2iShdM0GQKCzGiRzg==');
define('AUTH_SALT',        'MrokzE4AgIwtTst3UPfpkBVOch7VISnHxdbOfsVb0yCR0bZf3U001/wSA+wB9H1u8Dyodv2KJVm0mqbKmxEkAg==');
define('SECURE_AUTH_SALT', 'T389qxogJ+lunwWwrtg0/xjji9jfSXNPI47lgF4KE+GiTSUhZ4EJF/weIXQ2GjxhHMAi0Vd84bYzoi87/mmaOQ==');
define('LOGGED_IN_SALT',   '0JSltPOuuqPjTJRf2YeLx24tqXEQIvWh+UoIvLJ8OE5vLdznpGNOtDWg4h9xzOmoiE/EsKFvWyAYOCOWlw3kpQ==');
define('NONCE_SALT',       'pXkkUMhl5yTXkurjlTyeLZPqcfR3L/MKCGjBBSR+lzvGBtNFwphGM+RSirzkUG3SfS59bomR0tm0GcbPiHyKrQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

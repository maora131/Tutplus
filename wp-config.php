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
define( 'DB_NAME', 'tutplus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'H7dfLvApdgEOH784DLOkfP7KW3YYIBQptEAr6YjWFDaFA2HhVv5zzPPo2K5XLzoo' );
define( 'SECURE_AUTH_KEY',  'Ot5A7X13bY1L7pj1Uv0aQUgPeVlFP32qomGLc0ddj7H83KmWW0whbRfQbJ1LJ8re' );
define( 'LOGGED_IN_KEY',    'ul08j4z8JSzmNsgicixXqw9A75PpHPoq4BoXfLOsD7rxfheiVG2GITF2lL6h63ZA' );
define( 'NONCE_KEY',        'Z8a4Gz8xDs4pMnNLrUPo68wx5dzwJddWIBpXs0RjeqzzmInxclvT7FjoA8Dhk9jQ' );
define( 'AUTH_SALT',        'fwSfvQNKrsedKLcT9Fwq3EX8w3T36H2bhGuOeUnsJOojdjl8TSHzVj8WhB2sN2zC' );
define( 'SECURE_AUTH_SALT', '8I5MTqtXgURlkj4Sn9JtLLAX0s2y53ucGYquwvyThZ7V1sYYpxdh5Q1eCjbEjE0j' );
define( 'LOGGED_IN_SALT',   'Bu6HhW2n0vlnkeAkDK2VqnYU8CMF7qjJlYsuJUBKSidX8S8dFcHusCEASEJEyKtA' );
define( 'NONCE_SALT',       'doVB8v3Dl5IpAOezuD5YAtECBhO62Sd3T3Dz5hKzIZUxu31kLXoJ7iu3qOCSKp44' );

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

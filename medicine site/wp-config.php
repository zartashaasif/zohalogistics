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
define( 'DB_NAME', 'zohalogistics' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '5balAtIknp81EmjvYIL1vMEaqTCEqTyxIBJZhknBpjs5ivcoIrECLRpJhl7nufwu' );
define( 'SECURE_AUTH_KEY',  'BpZJNa2jCVw8PUkcYnXp3qBoapVFfwsYfbESuT4j0WOJZ2zPLFO3W6KrTNrAa2Zu' );
define( 'LOGGED_IN_KEY',    '8Nt3Cdu5ONxDdd7gvCAsqbXLILs8BXGHngnfivxTTcDPfL49R3jYdXoNfN02055R' );
define( 'NONCE_KEY',        'AmCh3C7DX2azQkDIBsF8F6Jg81dZwbeH6ST7HcPmD7Vl7KEk2yarztlNmnfFspLB' );
define( 'AUTH_SALT',        'jyu6EctRwtVfDa30iybJ5XdCQkct429u7n35hoFNoSoqhQgtGRdIdSODrqjCfwxm' );
define( 'SECURE_AUTH_SALT', 'RMktRULQL1knNH4Qhdn9CBaQzPwvSE3WEXYXuXlv9uK7XlDTI6m9o70l3RDQVi1m' );
define( 'LOGGED_IN_SALT',   'AYchtu95kt64AyshYjTL2uFcj0w1qvVJFr8W50bWTfdb9rf3nooo3wBb8UHNIqN9' );
define( 'NONCE_SALT',       'zOOEgffZjbZwx0JIgEPlCmRonzL9AYakZPT4NRzlFSQQEFR0xvDsYPARapH61jGV' );

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

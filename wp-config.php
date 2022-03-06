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
define( 'DB_NAME', 'yourcraf_wp691' );

/** Database username */
define( 'DB_USER', 'yourcraf_wp691' );

/** Database password */
define( 'DB_PASSWORD', '7Dpz@.H83S' );

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
define( 'AUTH_KEY',         'vnnhzg2nqz8fjblnvcp4nfcyexub1tikrl6lfxawnrjbglltuaap1bhvubhyetz7' );
define( 'SECURE_AUTH_KEY',  '2k5lodrccfgbis0jy9cpkqrlauxidc6djrabivmovwlhllwskt4zzd2key3fqxux' );
define( 'LOGGED_IN_KEY',    '3st4t1s7enjupqfnrrddubchtohplczbtajmzxhri0izsgidhcn4subf1cntmzsz' );
define( 'NONCE_KEY',        'yepdvqocf5iewhtpnsrjvbe4eideai2lrk99wphk0gwqhwbybl3pkkzhakzlzyv5' );
define( 'AUTH_SALT',        '2pon1bqaxgldcbf7jnpp2g9lvukjbac7jaszqw7cuvcyqupptdtaeqkpjeqa4fqd' );
define( 'SECURE_AUTH_SALT', 'mtnxm2hjke7a0mft9asl91d1aufbonlgrnrma95qmmialf2ietsxp8vbwjxqxtz7' );
define( 'LOGGED_IN_SALT',   'mezyfc4ddl2f63mgexj7ldtwjusbgmjznxo5rk5fuvxc7gi9g8ylta39um34kaax' );
define( 'NONCE_SALT',       'zlcxwjazl4dakwiqp4unl1uluqnrfpfr8kyhrvcslpgivmogy7oxagncw5cycfgk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkw_';

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

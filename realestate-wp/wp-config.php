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
define( 'DB_NAME', 'realestate' );

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
define( 'AUTH_KEY',         'dA)XmXH4:<zfOq@1O?R:)Ui2$+4<}papL:8DP$Biy# u:[^dl;i<O$Fh}NW7QzCt' );
define( 'SECURE_AUTH_KEY',  'KJNxgOEU^_f PXfK>qPQ.Go/97Qz&~o}D~fe~oF_8:FJ3H_iDb>PQ5pG1JQgdhIe' );
define( 'LOGGED_IN_KEY',    '1xMGTmQD&[MvQB#hsuoORE:w9Z/5o3YV48BCqV<;_IV+i$==xZVJb7?Y[:iWA,!w' );
define( 'NONCE_KEY',        'A;o=S&q9s(c[?c{^7yKw=ya.M} g )8l_|Vi:J]30>+euGmr PH}ikOe +}s5tjC' );
define( 'AUTH_SALT',        '5!=ugY4r}Lu/kLBDFb2V0w!udL0{96E:D;bS;^iSB1q>.(_TmWM~W%Y/mM/P{YWq' );
define( 'SECURE_AUTH_SALT', '2sa q24[ERI)UQkuJWsVCOVkFZ8buPHa8v{8h)`;G@ethb08Yf5?q/X_`GjGe8*I' );
define( 'LOGGED_IN_SALT',   '!duueJ+r#N-S6^I?XQ94,A#bf7H$o272w)_oy.:l#>1zlO:%coB$)ZgwMH2Vmq0R' );
define( 'NONCE_SALT',       'pCWsu@Dbjptje|^B2umf +sqYNV`sTHIF4/3q4f8Jkko^jJ,F[M!EKSS*QCcnjS~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 're';

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

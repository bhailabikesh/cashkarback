<?php
define( 'WPCACHEHOME', '/home/gadgetzc/cashkar.in/blogs/wp-content/plugins/wp-super-cache/' );
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gadgetzc_wp556' );

/** MySQL database username */
define( 'DB_USER', 'gadgetzc_wp556' );

/** MySQL database password */
define( 'DB_PASSWORD', '1.a5pz!9IS' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yv60iyl4blbufecpga3yonrrnxv0zing6f9vdunhpponke9gr9bnwkuxd9gypj8k' );
define( 'SECURE_AUTH_KEY',  'alji8zw4n2eusbkzzyonrauvtuu9bplqa9lglos90ml6si5vh0oyet986d9ttfmg' );
define( 'LOGGED_IN_KEY',    'gwbhcj3kmsdso7biz7gi5syqmrq2ou6zl5ixnlhctitdtxllgihnsvqgunqe0umt' );
define( 'NONCE_KEY',        'ktaekmpcfbwusqrljp524slfnqmz5buhar70wkclbaevbi6bu0zuhuinjn0f8eay' );
define( 'AUTH_SALT',        'pprvzmntxesfifv6xmy0dc5orqhw3ey4tbwb6sl6k8lqng4koxi7f1tnunutmyqv' );
define( 'SECURE_AUTH_SALT', 'ecqo6ez6bwaf9edzyrgdulpxfuf8io1ryboajyggrrndi2mt26kqz6vlxzfe3g1f' );
define( 'LOGGED_IN_SALT',   'ofolr3rapql3mjuyvh61vlb4zskhj9lbkvtisfrqayjzn0bayptvu4ixhe3lp11j' );
define( 'NONCE_SALT',       'pe78xttxrdql6ji1tfdh5befo0bxsjdafy3wcedz67a4qgebjncciw4rrdgecete' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpg6_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

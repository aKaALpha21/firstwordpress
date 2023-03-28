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
define( 'DB_NAME', 'vitrine' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7)YZ;6Fk8y{cY,ljEUAV`]0gDTTvS[HoCFt~z%Ssb9J8)db$o>NE579Q|nm,$dzo' );
define( 'SECURE_AUTH_KEY',  'pbBC4-FxA*Ihbq teWO3nYS|Jc_:KMl=b>yR]aI%j#_OM.=u<WjH;tco`6Xv+!DO' );
define( 'LOGGED_IN_KEY',    'AsbFydk *St5P)BADI>+yrI&jp;$_x2@83/JI/W{;r:O-FkR$LDN(p<ds !BAt9|' );
define( 'NONCE_KEY',        '~@1QvbSNC6McIKu~B5A%o6d@+oe=#,6g*iUxdv_?sxF]Lqx8gT/a.N^]|-*[h31!' );
define( 'AUTH_SALT',        '/PtRGrnQl8?6]urF}HKAWuDgi;_s_8A{@?3_TP-E!oqf1c>m f2=!&&|j2GI,xm{' );
define( 'SECURE_AUTH_SALT', '`Nu#+NwAxYXS?c>`02[0gs>y;GYq9X-47kx@q)#x a_jAnrb`o4>!B)Fg`)3pje$' );
define( 'LOGGED_IN_SALT',   'd3oY/@XG2;`AiscX9MbsnA=q90MB6YPR#A;8nQy=pXL $l2~(Oix1Xh9Bv ##n;v' );
define( 'NONCE_SALT',       'ZO|$jo*PrPva0s/{i,7:aNzZ0<tHk,uE?yf:cGZRIwo;W~rATrpIjx>))o&C[[!j' );

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

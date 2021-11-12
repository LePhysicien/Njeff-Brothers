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
define( 'DB_NAME', 'njeff&brothers' );

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
define( 'AUTH_KEY',         ':JQ>BEbm@_aeer&JJpM b6Ft!`ug^KbDMr*!Lz`9YV2$4$52&(tH&hTzYjx:QjHv' );
define( 'SECURE_AUTH_KEY',  'Ki/n/k|yTZjs/+W&(vE6Q.ule N +Ir$I.OSuOYwvyj]*@-4M7 U@r@,arQ%A3&[' );
define( 'LOGGED_IN_KEY',    '43rN%Nkgq@j]c,HsdBg<^2cJI<oJUr1(@Dz9Q6b$Z$L8lzYMn(Ctm~Exc&FinY^|' );
define( 'NONCE_KEY',        '5Q@vESqQ0<6OrTTx*|shE&-td-rhX2a]Pvnayd2fe?=A!jcr|2P;_B[6X|Ux}fU ' );
define( 'AUTH_SALT',        'FZxx*>6Z+cN_l0RM+?9OP1rqUpk]$B67] .Y_xT)L]9qR%9+4{niFxvTzp Hw;?B' );
define( 'SECURE_AUTH_SALT', 'A1.V>NV^YS;Iqxj?ybJGmp:@$Ofy`&tnsA Be(=d{A6(jf<TSm)W&HknnEOWYuDN' );
define( 'LOGGED_IN_SALT',   'T-6c+=mSrjyK[B+1s)[]}Nr&qNO([U[)$ B849/z9gN>12|;#ifV<rf<s%HNY5,^' );
define( 'NONCE_SALT',       'Ht(VZ$KdP56$C*{?4P,T]=Ks&+G*wGD%b(Rsl/^`]70^EC  REk@-63O*QanEkXf' );

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

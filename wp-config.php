<?php
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
define( 'DB_NAME', 'laijau' );

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
define( 'AUTH_KEY',         '9)%CJ!~#V!P)6PL.^~aC*Qf@;|.xlF=,5]lW}xFSA9vP^>/ZjvA9}rZ9DojKkKi4' );
define( 'SECURE_AUTH_KEY',  'sh,h)I:j0xOK6&O^GdZ1gg=&_w@t/`l9*1IT^Fj<+D[;;+V(wzo}bn{Kj)y5.:=z' );
define( 'LOGGED_IN_KEY',    'tE)~j4U4.YB8qlJ{5#}{(P)7m!%F|~sV7S8D+(;Q4C#7u1uC uh#P[dq5%Mq[wc{' );
define( 'NONCE_KEY',        '$cj&?Y-=(fwBg-KN<b=iBWyA|ac$#l CcDME,Nn86gBWoOvxQnGf4Ysz`m^j]%vx' );
define( 'AUTH_SALT',        'J5p0c*K<NJpcQJ+a0RB,|cu2g:nIQl&`Z@3;MnitGP>OZlTCzDzl#+~3l$*%$`p5' );
define( 'SECURE_AUTH_SALT', 'Ynt>LYM9ew{_~W4j0A/eeuyDS`-P5oK!/2*,!fS{aU2chfV4w:?:YxLs<TK_FL$d' );
define( 'LOGGED_IN_SALT',   'n,u>uo~5t9%$azICIb_?y4DB*q`r@u,p>.>1j/)r_ +.z1tnH-6YONmGclBq!Y-<' );
define( 'NONCE_SALT',       'eUG`t%HY2gY*Ae%NZV^.)kREQE1J^Dg^FO>dsiT-}N?a>->t2jdqiUveh3IdH=9;' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

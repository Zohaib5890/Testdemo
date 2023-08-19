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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '27smentorblog' );

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
define( 'AUTH_KEY',         'F=YJI]cyvw3>c/of/bpa0z# ]WP7ffA~BgubB<&!V~iREmD$HO.J[4Tu31SHAFRN' );
define( 'SECURE_AUTH_KEY',  '2@}x:`KV};87Jt 5alm$YnZxeHPjWIBn4@E3IhV9[k7k^41gXQ%Run2>hyFsB)Y>' );
define( 'LOGGED_IN_KEY',    'w<8CA{;fU5.vI ~hAtZKPnG8#:eL=^Zwv[-,&KQBuhG}S0~x(0vU:YlRKqzZaJLX' );
define( 'NONCE_KEY',        'W0E6lpbIx9J8J%(hOi>vsdK%~nP6,r`kz|UJ/pk2]b1)7I+jPD+TJhJf+s$WuBE/' );
define( 'AUTH_SALT',        'iTGe.7ux*/&ig?V:6:b[9p[TtauA{-ss](HO>IUH4/$S^Hf{mT`i0$nc]k)<T-[G' );
define( 'SECURE_AUTH_SALT', '9-@R3g`)}A{tgMNc`%o>=)T9qYg:IP }W($UaEu>-UvjLcZ5yoeJ&%A;2Tr.O^2k' );
define( 'LOGGED_IN_SALT',   'cX{!@ZA=<m#XMn]gAq(Ou&j,}V`Yi{y%T0io_(fq;( U5(Dqxf4w~TZT<ce(7I(8' );
define( 'NONCE_SALT',       '5{OY3rzq_FlPidgL]x,Q;;T+tNOn{k)UhikXu^x2<lv}vNg,pf!B)VMz!Ae8wLl8' );

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

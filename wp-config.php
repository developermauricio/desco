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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'desco' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HbK3CJVIhe83urtDQ7x2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'E}N.E@x QOtzDSNPvUTCo}1Lauvbl0kZy,b:Ep~QC]u*%a3XkTo&{jtP[NTYfTaQ' );
define( 'SECURE_AUTH_KEY',  '~3kaIkKQtik?s)Fu[aG<pcv.5RyS.n.(86C7Q-lWD7+@smFv|eoGm1x7Q7o7U8rK' );
define( 'LOGGED_IN_KEY',    'Jg{]3S^7OB<{$KAd[FfJZ$Uyggq/f@3PtpR^WoFU8h~WiEtcf6H8Ch3du&dibO~g' );
define( 'NONCE_KEY',        'XI_cBNI!`4u&h.Mryuh?`/`<0/NVxvI?,GU:QA{eg=UI=W=*=O{rJ8O?sPM6l[Xa' );
define( 'AUTH_SALT',        'u2#%>oPa<~C./!T4FtLQWZO`6Ss SBS;a Hik1j/m^7lz|KQU^*g%x>GaYQfH)[1' );
define( 'SECURE_AUTH_SALT', 'Y._e`F2fY8Q#IpJ=)pcr7[uyOXf,S97ZR,;jo,}F>SG:tp%o:z7:!mRw,#<==4ri' );
define( 'LOGGED_IN_SALT',   '*B(_lJT}IK`L##c5// b(tJ/ZNdvA5,F33CN#W&vkNCl5*U4eeS{od!%i-q:(XTA' );
define( 'NONCE_SALT',       'ZDqp6Vv3[hU}!Jg/;G&Ts.Aqy6+%1NKHSnf<hXI~FNl`Le1}CU[E0{>A}D:nu1i}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dsco_';

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

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mysql');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** Runnable MySQL hostname */
define('DB_HOST', 'mysql-staging-wildebeestdev.runnableapp.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AWQUJJ[JEL_Eho^oietZ.Z*C?%Eluf,^~b3u@J`a0^Seg<LN6HSNKGW6=F}JMWd:');
define('SECURE_AUTH_KEY',  '(Jy|E0js_Az1v-(,7U_]{B5/azTV>,{k#-S$t!zK^Ei8-2B9vU<Jnmmer#<)*cD#');
define('LOGGED_IN_KEY',    'E-hh|7z/.C[lYCuc+Vod)+#n}?-,=<np8l!d (X8u8vPAm(EIx~KmFlsi-_cMT@j');
define('NONCE_KEY',        '/wc}`VbR5g<LKx|pg ]fU~+yC+mt%j1iKHKb5Chh6(e*[GS%kMH?E+F,]J]&^Byi');
define('AUTH_SALT',        'iXi{ FTS#{<tTVh?dOX8})V4|<0(k-Ss<!V#7NMcwI4)TtAX*^i@yh.&E5 Y+y*O');
define('SECURE_AUTH_SALT', '#{FpvvO*q -/?t+cJYXTnJ/*Z*1 5:^ifUBE|X||8:W/eb<:dfm48u9RY&9SaMuU');
define('LOGGED_IN_SALT',   'eMA8u?H2-6PDtTVcBy bH6x)qh[YFv|+p1-4P1jsA&(8SgKF9~Q|R*z~>L3Fd*bU');
define('NONCE_SALT',       '+QRd1HF&6|!T8xSlU0jScr)],Jz},!;hv#+TLd+X<9))>4yGwT^=gl6ig9Po|Q!0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fn_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

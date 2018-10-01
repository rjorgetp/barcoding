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
define('DB_NAME', 'barcoding');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'YSraYiwztBya&v:g5~aFNK>#3&c[|f:1APg*pyvC%ly:A*OAn[+^`PhOZjc*zNXl');
define('SECURE_AUTH_KEY',  '^K@*rykf%;:Mn~Tgl3;*|szz2m$L6YQs#tQ]0^lPj!O,d;Ed@SbP@Zd!6C77M[N=');
define('LOGGED_IN_KEY',    'R<F@lxjDIt`-]Wu9mQ`qoJ3C-<5jt=%)RdWGN)h$0OH*u7Y8PJ[pH:MIM/SI.KSu');
define('NONCE_KEY',        '>hN*sjNQxWp,rFvq:(1hu`tG%(HMr#[p{:@;@pl[!@}T3U}|1XsXh{twv)uCnlb2');
define('AUTH_SALT',        'VFL}q#ZHRkeZ._/l=jxx_vP:u|DiE+Ibm&:T7+p2d@+4Vsz8ghTN>zt&RNG=!y/i');
define('SECURE_AUTH_SALT', '@KhKi-3A91J)Cjw{YCe3-mk3ziCeR5ODMu!1d!c#wj4l fhl@D>D=@=Qi1u3</I8');
define('LOGGED_IN_SALT',   'SObZG2GzezlrBS+/oV0H0E9s-/(_FzA}iOMb+/#7H%6n;`>LjkLO>?RiJ:rXhT$1');
define('NONCE_SALT',       'uwYjp`STnu0DMUpw@X;V/i%Kt?^#&F>shY%8&D[qz+9,<Ts0$P:-3.O~A0mj+Gip');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

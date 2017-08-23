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
define('DB_NAME', 'gdrake_api');

/** MySQL database username */
define('DB_USER', 'gdrake_dave');

/** MySQL database password */
define('DB_PASSWORD', 'PandaBeard56%');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         '_+z0Hm 7G#!E}e-H,RBCQk!aPy2]:49VakXLaTKl_jHK+0cAbzz2,U}87s&Vw}O|');
 define('SECURE_AUTH_KEY',  'I^<%2at|Y&aN(A |BYhRz/{K<jfrm5Z:)IQM;Uu,Ka)PeOkv6cqje8$q[KU|=E;w');
 define('LOGGED_IN_KEY',    '2z_I,GX+.U((<<JCELf?N7C-?Y0u8u=0FQH%=* #5JvXGw,34M ,r~gmx6Cx#3T}');
 define('NONCE_KEY',        '<%LeNi<FtTJm-#{XKu,IOGwxV/y?QS]cxc+VTD/t?K;~9k16)z` o22_M3|#7x4?');
 define('AUTH_SALT',        '=A~~|Vb{&|T/8S_-`n--Uj6{7-MF2^d)@C(6dEbg+ioY2v-:01O7J?BFWwYvvydo');
 define('SECURE_AUTH_SALT', '${i<`Uq=905Ry8NP|MyzR+fMp]t>-dmk+<.Kq?u%9o8Ik}.?GTGb,-/:;zJ:{IK6');
 define('LOGGED_IN_SALT',   ':yb>,0Bf}M7IyD76F V-_OC)cfJ/oL$.GDMI~B6c1uN*6oyvqNN)LhFtSoVO[9no');
 define('NONCE_SALT',       'GTeiUg-?*60~d)NQ.gW~iK(p1).@Yhc-!S^-41]#t{90tXJ%6XE78y[$fJ`^t~ea');

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

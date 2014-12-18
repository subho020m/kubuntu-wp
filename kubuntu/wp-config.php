<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'drupal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'subhajit');

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
define('AUTH_KEY',         'HkfHHYY@LA1`anI2$ ?vA5q%;mmEkGpiCHypP)L>IV+C%|2/JD;ef9v4PTQ3F;CR');
define('SECURE_AUTH_KEY',  '8{p?h@wU(A,lEQn%M k5?{OpG0~tdTms4)F C oKt/!ZBz)n@c@1.RjoAyL3i|H(');
define('LOGGED_IN_KEY',    't<|H`pn;3v%InuS]x7z%(uXf^d6%6M/xBp(~`r{,ag!.g&gIPFc8*W5|:_<h63+x');
define('NONCE_KEY',        'd?taM8yTG-,w]ON[w/o@L5h(TCqc:9im+;$c-`+Z6#fR?:`PGFlI+-X@< |pcr|n');
define('AUTH_SALT',        'fcOjrrJo+zEG#`4Ee]y:2;Uwe3$95+_qEn~D&.[+|22QRm,b+D8s[.J$h&{^}lf:');
define('SECURE_AUTH_SALT', '6l=1vqG47H$@PfNL|6sqh~|o^|(2NPyG4Rwh@+Lg)%aKFyuWi*qgwXQ7*h(p](di');
define('LOGGED_IN_SALT',   'LG:jO;7]vy^2Oc{exTJV(j0!I{Dd;HqHFhu(`Wl 1L|L8VN&4|^7@F?6ZK:lhm=8');
define('NONCE_SALT',       '9O hf@l>#6bV#3:SrWgqLXr. hH3S1EjD l|+5K-CH;:@6ctw*MZb4)e9u|6#;6#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

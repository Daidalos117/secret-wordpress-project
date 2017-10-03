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
define('DB_NAME', 'wp_test1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'tOAEfLYh`QI[-3e,`N`=R6jjKeG6I2#rC2<:b#/w!t40}fJ &fXgcUj]o?-ZZ.+n');
define('SECURE_AUTH_KEY',  'Ph`@ibq-g@#+}m:ys`zSZp.`R?OcVaFgp]saj%>&;Z4{3kA3S4I&[|iMN> <KaEx');
define('LOGGED_IN_KEY',    'dpqImI OB^a*lLy!Ld3SGO;@!aUiK_UD]iF`csC$:f6ou7`2~+APn2k]hK:z7.|2');
define('NONCE_KEY',        'fT*d~*[1O3,{AlLZ|PH=39p5,vf&Wd>!5T%djFO_*2o7lRq+-C[9bPVsm67(*)R/');
define('AUTH_SALT',        'P BZ()DfYIE-kOEC]{}^#rJHz2{{+l*m:5RwR72`V[AXs#}@V&2h<!h^-Go 3:b3');
define('SECURE_AUTH_SALT', '=;z}PM-h,BOs}fg0mf_dncO+`N#c-_$$#}/jxOUGMK*Ccx9}wFQXkYb;)3JpX_*g');
define('LOGGED_IN_SALT',   'v&0Py>^VItV@pW=p9zF|%# Vc3KnIH;4(ump%9P6qZ2V)]D+J0yM5@vv-i0tZJLK');
define('NONCE_SALT',       '7@bXtVd[N{4!&m?QC^O_tbHF=*7t7/<LNn`czc%| FQT/h3}gqN-z*d0$(Q<2hA+');

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

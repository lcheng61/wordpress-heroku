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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'X$oelhy?-7W42{OO^<PG1B~ !be6J6+#,K qT:A^^o@:a~d#4Q%KXU P9YX@lks(');
define('SECURE_AUTH_KEY',  '2oj,XBj#o7rkf=c){*@/B{0_r)C}V+SfSll2w!C+TfrmJkj+hu//P=:n;(pWKHq|');
define('LOGGED_IN_KEY',    'qvGO1qE;?(i.jJ-W`=<rOngp6|_,+||#?WI-*5PKXNbU;gSbB$#>0(Q7/1yzO]T2');
define('NONCE_KEY',        'P`wcQ3r6aIx4~2D+QegX#tq=0UpPs`)nGb)WDH?M3/~5:r+E_z)`-H&2nWG4=qJ&');
define('AUTH_SALT',        '#u-BDB|brKHi-B!8K?#J[:d$1V`VQFF(YBH,ESA+ze0+L=MgB_vH+>R%Z)?Lzs-V');
define('SECURE_AUTH_SALT', 'njH/l_Bn+ PN}|pHc^`I)0zYwlR+h%$%737lE0|/B!P $b+b{iG5+|$}@)b_|=SF');
define('LOGGED_IN_SALT',   'waa:G-Hi%5nh0[c{RZE#)nG|=?dblQtI^F2]E6x%!6p},hri<Y77_/]YG(3@$LTh');
define('NONCE_SALT',       'hJAWq|*sSN+T)m3P1F0+#,G`hj+Wy,#pNfK)@bz#wAqIT0.V#%8xq|0,SX2(iZt1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

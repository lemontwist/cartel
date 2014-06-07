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
define('DB_NAME', 'marymkim_cartel');

/** MySQL database username */
define('DB_USER', 'marymkim_test');

/** MySQL database password */
define('DB_PASSWORD', 'tESt1@34');

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
define('AUTH_KEY',         'i|.Bwe#,h#%~>K6amxYF;m|LoHZT4-q@|C8d[-4pxqR6n|IW|?pq:&PlY2@Q!%s*');
define('SECURE_AUTH_KEY',  'Vdl)3=qg)Vs:MYm,ZWe_VIwY[)!6|/A|ko>|J?;|@rj:;h)6?lm$#*kj+C=pc^V,');
define('LOGGED_IN_KEY',    '$s&#/5{QB2SrL&+QuFt{M9L?#;mZ 7r.R|{H_-2sojbv<qhi7,|J_UX!(=9Q?Uc[');
define('NONCE_KEY',        '{Rpq#X#Y>2JE=iR<F )# {_I$zA OWfSC(7=!a;Cq^ 8wh|E lrB9Hxu6>Srn^Q{');
define('AUTH_SALT',        '<f*-6#|GixFb3wS8XlyLNEo-_9-(]G`hbq%1_[gj4k|nXM}PonZvP]Wm1JG58yzL');
define('SECURE_AUTH_SALT', '[w^eYN8{lZ<|RoESK7.c-[NB^>}+%<p8M8BA)7+)#;gc|_2A^Wc0-5O$I%1j]_#>');
define('LOGGED_IN_SALT',   '^`|V::vxCSj:D|NaNplpJ:Y@XzW[<XWpryfyl~I5-o_Caz>)?>0=^)VX$.,T?!;J');
define('NONCE_SALT',       '1Sd[cpGndXM?`s9fc/k0]mD gsUZCCtxeo^wpg$b`z=DnCL!@O?-|VxYhd9J9Ou9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_art1234';

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

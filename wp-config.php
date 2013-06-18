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
define('DB_NAME', 'wp_site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '8mHxMK*IjZ2)k`.4t||&B[hwxsk-7?q~DJC+3ng-_2D]i<0ug}C6pDpA3mFozUn+');
define('SECURE_AUTH_KEY',  'C.8?m?Q(~2y5Czt$#d+6h*M Pqg51++-RXEk-ptF)$14A4wS:dZMix/A<^?T1nU4');
define('LOGGED_IN_KEY',    '(f|8Nf1?W2!h{70Xuj=Lf?SULDD2ag,aQZPX]n{.]U|eD.U`~EHU57J(S=!QH!pN');
define('NONCE_KEY',        'MU$C9H*G7+n$n$YgGTi_GX2XzE`G|c?3A/chT`w_M]D}Tp`N3&E+/h4;&f!dZ.Gm');
define('AUTH_SALT',        '[3[Q+!oMbJwKL2Jj.-oC*VJ+K+VXk<er9n% +_=Mu+V).XBrEnFrK*A;T|FZOW^7');
define('SECURE_AUTH_SALT', 'Pb)e>kJRe8wrx0!Arztox-q<Q-j|{ 1{{Qd8+Z-u9)(Hc!-9<<!y9G /Z#-jFk|R');
define('LOGGED_IN_SALT',   'JkmpN]|Hy9d+PH@vS%iS_cD#&D}L`l!uxn>KNqYd~m:C+a]q2oL{b8+o,VS?*zpd');
define('NONCE_SALT',       '(=_|>lmV-|1I=<b$nv2[KQoj Z/r}#mg|Mi%[(67z.Fc2k&c`s6cq|gP+-Z0}udG');

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

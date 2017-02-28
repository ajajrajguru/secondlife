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
define('DB_NAME', 'secondlife');

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
define('AUTH_KEY',         '<B+qzibT,%bQ^T^Nr(/)   dHa6RGuHI}*D (+LBdxV^zo`~:86sP{fMp4y/y^E_');
define('SECURE_AUTH_KEY',  'pp<cSeIDekQD1{&w1lEGGtMG2Obo. >RhrrOHhy[RrP7!;2__F/Ilrw{isz&|>-o');
define('LOGGED_IN_KEY',    'QwCcQQG{i2e*a{:UvLUuA6nY`}al^ Hgb1BgLcUMv^_n7q*-nW2/tSSLZ)x`.>I[');
define('NONCE_KEY',        'PFBa(&+/,gzoVL4mL{f]N3;Q)o_dP(NIq!STdd97d!6cG{)rz1 sOa#CSWrnr(AE');
define('AUTH_SALT',        'HyI}dQLlSg{vwi%kPa3E ][fhT4LPZQh]&j?3Ubt7iFux Dx X,~)[o}l>B4PKQk');
define('SECURE_AUTH_SALT', 'xpQ>c*ULLN|;2`F/ @kR#/$~UA:C?FvUROvR|Ctx;&TG/Al2I-Etr~@Kl*Oj]?:V');
define('LOGGED_IN_SALT',   'Yy.Yp$LG`_5m~Z3e+ubUi4Q0lk-%X?% Axt(OgHzp#lc^,_]F}d_9#eL&8%u/-xa');
define('NONCE_SALT',       '{^hV4@ruD)QOt#Xwyo$h?B:1vWt8FK&+vKndu0us^n5N~QF_CbXE*)9xZ&V5?~.U');

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

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
define('DB_NAME', 'yhteisma_ws');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'fn{x)r=QWug=#]-(W0BIJ.wki,/WV.W#e$^+V]s/h<R[m@hZCwa^Cb[xp[U:b~U7');
define('SECURE_AUTH_KEY',  'pgbK0Lyd,XS(XtJOKy-tOD)gZ)]HZ,h3[.DzECrn8]by9-`-~+Mt6OwurDZw[zR#');
define('LOGGED_IN_KEY',    '*+U?Bvp.9fE3xM@3:!7Li=U<eJJq8cJ@k}Bo/?DUgDO)m96uH,3j{4-5tkh:zAbU');
define('NONCE_KEY',        '(nIdvv1i_A,)vjd{#r2qz5OAu30}=+B|ne&6mZ{2KI_Qc(5Q;!.#QXFkX`rp@XW1');
define('AUTH_SALT',        '[n=}ztvgiKjv#Nf.U41J@WWGoK{J>kN?GG@z3SX.,uUx9Gd!6I9Ap6<0RCx.(bN7');
define('SECURE_AUTH_SALT', '[A>cuLeBv T]eReu/Wd/6Z8Ku*Kb1w1QY. 5=oSFo/4jP7N9mMm]<24S{T+6Fha~');
define('LOGGED_IN_SALT',   'lTx2JXp<@GUb^g:3-$yiB&3[V(!1r1G4{9L3&UR?bO+:O4wC1a`t}B?bO 4=e1.-');
define('NONCE_SALT',       '3=cfYk@4,qj^%Mfm3K_V.9$!o^lUzF<EHQ0Dy;!]h+*7ybO3zhI[vI*>Kb^|t*P6');

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

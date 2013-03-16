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
define('DB_NAME', 'wordpress_db');

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
define('AUTH_KEY',         'xg~!O,{QDT=!@;EB$c<.^:ya0[p7TekN.aJSj|{Nb%nsHr$/+B&O& Zr{(^}5O=X');
define('SECURE_AUTH_KEY',  'CP}~/{MX:}@y9SX4q]}DUtGe8]%YdFY{2z>@8~zQhq~,~/m!j7`wk-(4]U0rbpth');
define('LOGGED_IN_KEY',    '_/Q{p*0kGNBS1;m4HBOFaW*+^)1Gf0auZkld14UiY[A[h5bL&_7.0Ph:` UG8,(=');
define('NONCE_KEY',        'V!/#a8<g.Svr<wMdd`U)CNQ$wA#np1LL}U(@D?6cq[J:{3!  N3&U<Fd%9R=h>b!');
define('AUTH_SALT',        'OClKbr{1c$`B}Pl5@{*,W5O5ZM]D{mX2Ev? B?[KjETW83,ersVp*+y5uo#N@}~o');
define('SECURE_AUTH_SALT', '}G@$SM<:eW~0!s,d52|;t!T;^&9cW!}y5z`5T?h~&$WnywS9:Y-^*N_,{d|PdG[t');
define('LOGGED_IN_SALT',   'K%WvrY<BL<?IUd CX opYwj_uO:CLM~6/x=X$D-UQ8- :+0P<*zeO+Qx<`~SEQeh');
define('NONCE_SALT',       ')SWD@`K6-bG{PyEF7W%b1=}?vq%JU_3Wj$jmH`d:%h;.A.daEg7U8hkCP(K(ac<W');

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

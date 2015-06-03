<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'devtest');

/** MySQL database username */
define('DB_USER', 'superuser');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '192.168.1.14');

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
define('AUTH_KEY',         '/kP%e=#G4mb4#p?ir.RXDr.Q_MKi87F].3NY+3iD8D_Vsw]O4eCZx{L/WHvsXM G');
define('SECURE_AUTH_KEY',  'm`nt[m.j-?j_CUB^EI_ey`(--URm]mR~D;KcLj8-W~%}0m|`I?Vv_W#T2,:x}] W');
define('LOGGED_IN_KEY',    'g6q=o/8yh:<)>Fy2JVaEEft1-Cr4:]0gFOI=,n?Wa2||:06jY==GI9+%F-SFjOUw');
define('NONCE_KEY',        '8M)~M)&sa|{.HmBtMvs#D:E-hG|tM$sPM7+yG]tt/JI rW/:.Di]b5_Vo-A}#Fs6');
define('AUTH_SALT',        '*u45|=7m97xA?.Iz6~-_jxjHqYX/P&H`-YyVOo2%}(/|[=b/&S&}K&,JEl7~8e0a');
define('SECURE_AUTH_SALT', '>[Y(~Kd[pG*X72Va`lI)0Ffi/Scq%^DjUm[kdUX8(M+omb|UFF|ko#*ED>Z<*aaf');
define('LOGGED_IN_SALT',   'Z@)c&KN _7ac=TcU>GMr4cSW*X<W3Lph)Sf;v!zP+0T 41-+YB8PlM;)_T/uSzu6');
define('NONCE_SALT',       'p(`Uz#EY2f0-sUL1f 3D6Pu&B75vM@:+S?vG[8jf8r.b2[(RO|mgflm.<QSK|4qL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

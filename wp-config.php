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
define('DB_NAME', 'noyes');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', '0XWM9yrTOIgR');

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
define('AUTH_KEY',         'semLBnn}/R%&U~23/p3d}W6ZtCVH{`=0.8ACzr6a[y!b=)*NpCrGJ2LW~M<vIPo{');
define('SECURE_AUTH_KEY',  'NP}8-Ol<&B?l+g=$|XsS~,Pc(.b_92^9Ur-itv-VN^lgSguo>5_fv1Ms~N#]AIiV');
define('LOGGED_IN_KEY',    'rdxiXvN|uc!%S^)lblUDfBFyv8:bBOADBsMYiiW kBj:!`e}5c*Gx^SRDwV.x1LG');
define('NONCE_KEY',        'Ty*`INkAS!lhXTQTeCP|EiphQ0(Mr:-PWM>#3D8/BtI11 ;fU5E7zZcU/3umJ5tj');
define('AUTH_SALT',        'c|9xH6j0qm7%U/Q{nJ&b@?cRGjIZq<ibl.4e#7X(~3]goaJ?>X<_UD_G4X8!@Q=!');
define('SECURE_AUTH_SALT', '|#+l09}1>M`DHrf`Pn8Ft:jhaV7Y<LVZVj*JX|y=5LM%&~,*dyj-LjjCc[IDfM?e');
define('LOGGED_IN_SALT',   '*K_S9>l%R0Hi`)p^H:(3+bRu%a>!F;D;s(sAQlW8jEO4=+2?*.l] ]D{RpDG$F8w');
define('NONCE_SALT',       'I*<!1No&Ov-u]z>KyE3f/J7/$l5~l{yW V9m1E>CYl8d~`kBc$.?O&NryX315>Wp');

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

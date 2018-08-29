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
define('DB_NAME', 'civitestone');

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
define('AUTH_KEY',         'FK+SkEEfZF<uP+umyzg$]U[-?^4Bi%wzt4?`?je/)~wxU@/y=4knGf,~<4F)/ZLa');
define('SECURE_AUTH_KEY',  'rwpqWlMA+n]p+Y&b:3bE=/ps2==&U3UE2F~oETM.Q3ld1W=SH;ki_{hRJ5QXl~>D');
define('LOGGED_IN_KEY',    'qtMP!#{#22sE))J<aZ=I7==@-]Qr@sABP/@q.x*E#ULvexH}k_LZ7Ii|tEOpSh<D');
define('NONCE_KEY',        'qPN>#[>,q^E;OU(sT=|P_$>M/]X-s!z&Do6r_3$jx=vM!LASxhdr_&r2o<q)92W_');
define('AUTH_SALT',        '3Sj`gyIl0.S$n!L.|C$v2a7v&%{lS7Yy<`(}.5$-AA,y4khLaLWqaa<Qa-xJu;7~');
define('SECURE_AUTH_SALT', 'Cf#ScgNbU;N@aX[Lw4D-H|AQdFoAvn>b>h@PY4VP5`I]s2%grSG&)D]e7,Nq>&(,');
define('LOGGED_IN_SALT',   'V0uj2^n3fXGW#x1I6jb}Bt}K[;4Q0JKXJ8= ORb#xSjB7,]a)QQlS&xBSk:9qmwH');
define('NONCE_SALT',       'HAt_e4i^=Qd=gKAVZ -R[n8kO2bTAM@4KNHoD+P6k=Qf`voQ Zn7fa3ld, QLzTC');

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

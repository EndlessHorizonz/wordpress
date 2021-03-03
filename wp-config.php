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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3lT?6FRJfb4NdD/5813i^/RE1?ZNJ:8%8,_2B9vt(X>S*HK.buhb)It$dO+uR_b5' );
define( 'SECURE_AUTH_KEY',  'K.|tfhNME-1%t=,R6IaD1D;tf vpdh2H3$Z;9;TgFi9.ow)$*6v%+Sbt6TE/-rkd' );
define( 'LOGGED_IN_KEY',    'D>zl=#6FeoV~X&g)aeq1K0;X|Qcdb_$a(`6_u-~)gbYu`O;JO)Z#K g&f54;3k~Q' );
define( 'NONCE_KEY',        'zHK(G^]9(]!pgh~=4Ev%7d_Wt2k/RY.fWmxT:abalW7UGOI+{W@V4I^1W?(JOEvE' );
define( 'AUTH_SALT',        '/iy4^>xiLG`A^8-V[{L5Nc{{(JGc(.L(W2RvB%!{424_-jx)SpOHkbeuvz{c*kS-' );
define( 'SECURE_AUTH_SALT', 'V<1>TreU-iIXC6&A$B4LJW061~XS=.!kHgK^huorh_ |ij~|>UuDB)0u<eC;_#>Z' );
define( 'LOGGED_IN_SALT',   'Q#0DO|neM6 NyoE*#bXXd} gp*bR|CJ>LFH_?M9R-3yz1Ce8NeJCiyXZ^rIIhB~P' );
define( 'NONCE_SALT',       '4GfC;tKQ/l/ecU/|q@!Z%SF,Vho1Y)C?~AD yzXGLbVk{,b3_&tUl!gyxjw7q5~u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

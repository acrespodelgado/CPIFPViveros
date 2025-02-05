<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cpifplos_webnueva' );

/** Database username */
define( 'DB_USER', 'cpifplos_webnueva' );

/** Database password */
define( 'DB_PASSWORD', ']88cF9!ñ44HXJb]z' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jEc&{.EQ950Zy|<z5V8Q.42njY.+TYvK Lm_A=<y3R7BiQTGgXc:yp{Z4EGLCEwK' );
define( 'SECURE_AUTH_KEY',  '6{cYhu_iR/kng)dc46R_#N/KP$8v%[F89{[2u% l[N*5->PslqZe8:/e`8U{5<5*' );
define( 'LOGGED_IN_KEY',    '.cE22|rEGT#0}[=q tjI1dk?BumoM>1MG[U/>UtPAQu_V:Q60eTJSKL8R{)@WN? ' );
define( 'NONCE_KEY',        'Q~LUx$a`*WUBdRVIwfgGjdBl71*Nv`yf7]x?`Lk:-$&9e7v1N_B{ D8s@SRbcSpY' );
define( 'AUTH_SALT',        'n-&%6Wk~X1D.QZ@(d`FV]7pUsjiOc4gmJ}%QaY7(g4G<@>/#g^lJIPI%pz:.Z9Aq' );
define( 'SECURE_AUTH_SALT', '2wR-A(2q@zh7G+i#@Z=Ui>B&#q!Mq/:xj)r&%Q%6unY$k9+HM/EJLs?oN1+hl`PZ' );
define( 'LOGGED_IN_SALT',   '6td$2KxWAJ<vp02nZ5ox`)Q}B9ZX {9-7W~%-4Jh3:DL5z_jzAI|Ge_[+9[ uglg' );
define( 'NONCE_SALT',       'gLV zd28|TX5;%UC+sl^I-%=YN/,7ts_^KS:fu3qbYWkeh, Bc=*5w4kS4 [{.V~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_viveros';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

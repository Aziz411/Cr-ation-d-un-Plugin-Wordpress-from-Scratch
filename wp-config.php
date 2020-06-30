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
define( 'DB_NAME', 'wp_plugin' );

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
define( 'AUTH_KEY',         '.jj:_d `;6 Yc!3{-4[nJ=g<k%of{t.gW<xkBKWF/g]Cf%h4}H<MIl_.~Jv{N~&m' );
define( 'SECURE_AUTH_KEY',  'eI)PJ*Fq8`@OK>+/nz.+1NN8 SNqGXArrzY^K1lQxWaGd8N!Dh%0V*l>OYet>^Y)' );
define( 'LOGGED_IN_KEY',    ' U5az<>bVnidYdifLqm#{mmF6-PR`5[5[C(SGi>&DjC|x6V5#d{t?b6we9I3C:4R' );
define( 'NONCE_KEY',        'QfnqonUg@o3*_!Q1-QIg}AC%@cg|meTGPbK}F)F(,K)*:?S^<|JEFYc{5|}%>}(/' );
define( 'AUTH_SALT',        'jAm(Reqv!2Wr?Oa#G_w)~q=}O3_3!hs8W<9e:g}c;kgG96_$cAr.}Q*uJZ^lx;q-' );
define( 'SECURE_AUTH_SALT', '5LnXha#,SJsH8)u5BUmO.7/o34I4gG?Rp_.O/W%7et{ 7A 3BfP25L!oG l*M=O1' );
define( 'LOGGED_IN_SALT',   'aG._n+9a|J{$zywzV7bNh2s1yfI}5mBpWt6-wEryU> &CSCOD}`B*d_8*};xZy~R' );
define( 'NONCE_SALT',       '4{0!Scw)~,!5l*@8|@q2TRPIHnW5!n^L6X.p!)Dh[]X[}qGH|eReuA[dkBhG]6a=' );

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

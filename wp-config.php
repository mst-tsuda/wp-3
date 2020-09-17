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
define( 'DB_NAME', 'LAA1203054-wptsuda' );

/** MySQL database username */
define( 'DB_USER', 'LAA1203054' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Misato33100215' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql147.phy.lolipop.lan' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '7=Luv`2K<(Up&rv!;<#|+&I^n7S$5-XbYRL}Fw<ILRp1vhIp&)qRrsg?Le>M(;z<');
define('SECURE_AUTH_KEY',  ')_$TFBE(nC0g@N O+:1{}F]ET@8Tek@m%8,#=uQ/te3h8BBUY:*#zv<?z:Ywi|Ap');
define('LOGGED_IN_KEY',    'R81Mp{zCVvmV/2klOJP/gR89y6mDb}X-au8S[?y^$>)2Ub xL8&l?5/(9Kde.0$D');
define('NONCE_KEY',        'k~o_qj):$q1@mBttH-;+LO_pP||roj^|24;vmHG9JK+N0_3op|,D(K&nA@A$0Dic');
define('AUTH_SALT',        'yejI6;g-gy;L E}9IYsnCOe.cYN}Ao,}c7h%q0w<WPf,FC?+NsR??}076]U,?:Y]');
define('SECURE_AUTH_SALT', 'Fi:D>|Yd[<S1,Ifs;)3nrw9#V06kkHhX0T4ZW|N&{d4QZle-h](Y8m|t+h_Tn8~0');
define('LOGGED_IN_SALT',   't5$3lGOFc|D1|V|z3^I$5U/h]9cgvV,`nUtHqn8j-P{|A0{_y21wJ9N]xd{7hmQp');
define('NONCE_SALT',       'B>A]tBW&KWI6Na.wr{C754s-1+4kYs a#q-l+Lm9/D|h_$/P9m5?a(fOIRS5nM m');

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

define('WP_HOME','http://wp-tsuda.stripper.jp/');
define('WP_SITEURL','http://wp-tsuda.stripper.jp/');
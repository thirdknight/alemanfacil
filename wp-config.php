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
// ** localhost ** //
// define( 'DB_NAME', 'aleman_facil' );

// /** MySQL database username */
// define( 'DB_USER', 'root' );

// /** MySQL database password */
// define( 'DB_PASSWORD', 'root' );

// /** MySQL hostname */
// define( 'DB_HOST', 'localhost' );

// /** Database Charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8mb4' );

// /** The Database Collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );

// ** production ** //
define( 'DB_NAME', 'DB4139809' );

/** MySQL database username */
define( 'DB_USER', 'U4139809' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EasyDeutsch20millones$$$' );

/** MySQL hostname */
define('DB_HOST', 'rdbms.strato.de');

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
define( 'AUTH_KEY',         ':i,AN/2J)~a>Jz$Od29nblNdAV*=p?5ebnVFv_S&P/#E3+~+Ur2d--v6=l&Q9f..' );
define( 'SECURE_AUTH_KEY',  '|/cL%,oX/8}=)GW$j1,AI]^sVA<QE1lh#rke#}l2/(|5+8u :&jkoE6bR)[l]`K=' );
define( 'LOGGED_IN_KEY',    'G3cI.[t{u,M_}qQ3=}5hhK)z9a.j=lA/s5:wl.G`c;%OEgS!`os-*+2`B98Jt~c@' );
define( 'NONCE_KEY',        '}Mgl3r&O,68nX5bwDXC,u~:ujX/S6+F>XP-RJojlO H1:jjkXs|#C$O{P}4/E-^X' );
define( 'AUTH_SALT',        '5:8k;WY6i490iAK:yz?o)PNpc&9V%K@FEt2wzJfI*|!@5!Z_m&=ym?=@? Y(;$AY' );
define( 'SECURE_AUTH_SALT', 'rWz6OZJ.7rW(@[,z8%.8Tbs4gI>>ojC/|5A/z~{H>0W<@W)wclBXR(CKeG*,q =.' );
define( 'LOGGED_IN_SALT',   '@dkeDg[np$PRq|lKfh*]C~f|:rRX[SVDn|jTpML3G-yPk;EC{?mze-u[f*g}ST=g' );
define( 'NONCE_SALT',       'Km$/-66zQ#TM:d(_;jT9_i}?9o>E3*Nqr(jbG$9f0(kkab 4W{}C<v{_!U;m ~T&' );

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

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
define( 'DB_NAME', 'oussema' );

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
define( 'AUTH_KEY',         '| >VfJrSa5,>IQ[yIpGCSWF@4LiAvjIR!|Cq-j4r5EDz5-QWj8i@2]*Cv>dDT@#:' );
define( 'SECURE_AUTH_KEY',  '2=wpsI[z/iQ,G[j&+BQQd_u*2-Pc^JKHpE{iLh@i#PhtU]Q}5olp4VnM@=b)s}ot' );
define( 'LOGGED_IN_KEY',    '&DRh.U?j!(&*47MS=+rS?O`,iQzN]og|jL%P+11*QM^p`OV<S.6vUxB9WK[P~CBl' );
define( 'NONCE_KEY',        'X239hZtLim[cO)NE]uS`R`I,9K?*uj>NmHoU2ZEQf}L(K37+DUbyerC)wX;5c$H^' );
define( 'AUTH_SALT',        '+BmLBG^(oAUollW1P%!i]l;B$,}@le_(Rf>`ykR Hd_~U*iY>zhLHp~&7^A8;qdp' );
define( 'SECURE_AUTH_SALT', 'g)~;)~W|6pZhS.K,a?P:qN]x{Ju?bcPopYjlf[eY79YJS!#aUX4L2ntcu{.mqF$x' );
define( 'LOGGED_IN_SALT',   'N_rIz@0KXOHK1Yg3C$E2b,!1+^^^wcjbn#A!-ln8soXp=1!#`Kx;)Hfbh0d)rho@' );
define( 'NONCE_SALT',       ';}e0-b3QIa6G)duO/3t&(K%H~Z+=_]_{JioubhxH)Em4yVr:`Q^vC2TF6k^cZ}Cb' );

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

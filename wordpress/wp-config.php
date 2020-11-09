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
define( 'DB_NAME', 'inpersonai' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'eQ@5_(R9|IiComl:muo-OlyR0seS]*6WLM2%4t&UBe$lnaa<WT2CmBqNx)Je)_@2' );
define( 'SECURE_AUTH_KEY',  'Cz$PL37Vjld[q8QU tY3y 1@pYz@9G=;vG^I2V`:@_O;={Al[jqz,S{1^TahQ-M9' );
define( 'LOGGED_IN_KEY',    'dakE>rq]RavpqvmF`@fRj.`F_B}*=_vUc,E(37%cA//f#_ZwKDFr*eT+WuC4jNj.' );
define( 'NONCE_KEY',        ',&aeuS<2gTw!<NJSs[m6(ek`w^Av N9bdb*S:]@1Z9t@`LzfLLNZw+#[Gh!ld=&g' );
define( 'AUTH_SALT',        ']5|q]V#o,2~87Q(i):: tg-Mc-I-(Q;SY+$8DbM}cwI?[F5H<H+Ds#vl~)L_b(5q' );
define( 'SECURE_AUTH_SALT', '~$a:58pv{P>(Kpy+%u2;T]{~5a~3&v?W_o)~@GG~4W9e%3C$<hl!O=Qm].=GK~,X' );
define( 'LOGGED_IN_SALT',   'T*]bK 9b#9j4}!B_-7a%Pq.Xc5#^&]WJqzi%8pRU{_LWfCv69Kglp:Os|Z?:$}J)' );
define( 'NONCE_SALT',       'A-!dl?L2}OJD>=O.48E0 !#7JF`snU|m;Bjr&%96~/MB3u3%|0A|u|_om>iM*D//' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5w9}p+7^[u*<Ni0I)OCz MgsA.X!:_t;MWG)mO%hrQdq0!8(A7^%v+hN8M*aAZoz' );
define( 'SECURE_AUTH_KEY',  '&_.HWY>5fb;Mx6$<m]j,$@PZmD>2B1j->Hy=_uU ew</Fiu`G$)3kzWjng3IKZhR' );
define( 'LOGGED_IN_KEY',    '@.$+Mj@~-Oma:`o]WQ&{+.J#Z5l. <}6XcO)fN^8>=ygHZ?^=}/FO/|CjZV^OEe/' );
define( 'NONCE_KEY',        '7+U<HG!Zui/fYI.&{M1p_:b;)od9z*#3i;`_LOt`&Thu!90<i8C4bFn7@%%=%x.X' );
define( 'AUTH_SALT',        '+gcc3#@`.|m2<FIb;7^8-^qBW!5-tGpp%3ahnq25p4N0e<e_^r:ONdN%D_F-M+`Z' );
define( 'SECURE_AUTH_SALT', '<F[G(aRE(KdK-Z!L+= ptHWjwI=HO3f_?!`}QWEP.E(]0z($D;El>Pr1OUw0]}nT' );
define( 'LOGGED_IN_SALT',   '?(rm-.qt5{nw5W<*;EkaW[[2Wk`@D)p[ee>1,(!T$vb4OjlWSK#fD@fm)vd5/ py' );
define( 'NONCE_SALT',       '6.XfG7Kz,TJuA5 vJct7gdI/_T4QKZCLxeeGN%XhLm(;UPeQ)Oq-I;R^2Yot#]]d' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

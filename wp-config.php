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
define( 'DB_NAME', 'dsite' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ',paRWAp.ir=^W<ST4o#{NDyI//V-K0(A7df2gh~TA9w82@wr,<,$^|j~R2_<Ln-s' );
define( 'SECURE_AUTH_KEY',  '?5&vIz^#/_,c^io0#[C]A>,#;3}X#^P0lM4d;yJSv!8!53CB.tI1>N0gC]lK]oJY' );
define( 'LOGGED_IN_KEY',    ';bds+kg45.2Rd*oT$!i7&^UKNnuo/E?P+gE+*KyycAID@K)u(,~2qh@phf8k6d?k' );
define( 'NONCE_KEY',        '^}-M#HYF$i5Ds{}ySf qtN)8SQ2*X@Hq9K/>Hd-RtXscf@HQbO010T|UN}[`*.CR' );
define( 'AUTH_SALT',        'oMS]>,k*9[qDZ=_[z%peVI:qMhCq@nCo*{1)M-*/?&iO[b`mA}EfPQ2^:=5BB*DE' );
define( 'SECURE_AUTH_SALT', '3B<3p!L^Hp9p,/g~dWFcdo`13hw9IG~Y+z][{lpzPkk1M`f-n/`*drQ>U|tAopIr' );
define( 'LOGGED_IN_SALT',   'jA{/~t!^8s-pY*Gj/.,tvRAA.s[F?)s^Ly-_DYROa(IPl)&QEHo/KN54W>$tQTEb' );
define( 'NONCE_SALT',       '5E(~7Koq-:(:*F0>mIIE_8+JWPh&W:<#;^eoS1Z]G1nJ`zd}?+4LBI7)(vD/gI8o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dsite';

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

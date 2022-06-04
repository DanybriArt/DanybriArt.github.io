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
define( 'DB_NAME', 'danybriart.github.io' );

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
define( 'AUTH_KEY',         '1X<LoJ5wXJZ[U(}Gy@(L[<Sty3aQ`_ZRJv<e:*#==^ d*%[/hSkr0 1cIw|)RN/Q' );
define( 'SECURE_AUTH_KEY',  'uU;XaDNm.65}~s Cx]m1Ya`ZzK b;x#9uG,[Byl]L{2eEnqwYSx1^~a$*|Y<v_K&' );
define( 'LOGGED_IN_KEY',    'Ov-J~<_$WlSiEstWR77NEN&~v!EaKF&EV1G?A>b+2-Txd`:ce2A%ZRWo-0x]QF-i' );
define( 'NONCE_KEY',        'nS+0k5_EGuOCj+@!gV[?@/W[g_jX;WA;T[G}2p,FnJHzK!e:>iv~jO]~8## Oe_&' );
define( 'AUTH_SALT',        'eR9A-p&rBC>C>cM8|~?+j6z$/j1kGGDpB^Y<4H~_~V5 F<y5g$XSw!kw}Z*;lmC%' );
define( 'SECURE_AUTH_SALT', 'aY9w>l#z1k%{PtW<bz?7DYAUKW.2JWPAUuW7L^cwcCWPEIS<IKWh>p N}fe3Lu#5' );
define( 'LOGGED_IN_SALT',   'PZteuO<s#IXslAUQyJa,`U1V.vxD#.*MI94#s[.~OU=*;6c;q~>;}J^L 14mz&tE' );
define( 'NONCE_SALT',       '6E)uP5K43d6d!gMYc3J*hxo>3lroFEZOBH6VX{|:6,o@6ia=Kv_7XE:$_CaSyioJ' );

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

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'nXDxNcn|WCj:8n8,0=]0Qwb)0h|:WM5Ahyde*S;Fm0j_UBe0$KiO)c7zb9./d@Y;' );
define( 'SECURE_AUTH_KEY',   'q!au?@qx<o%R]6C%pa|$$CO6&,`TCe:MwC-wivh4:>L]a]`V]jj3wXu1SX n{#Hk' );
define( 'LOGGED_IN_KEY',     'N+*GFynzOZ;4eMHwzm)ixT;gu[}8G]<[TP.&(zH3uq?b}J>DA6C-|c.L+*OYLV21' );
define( 'NONCE_KEY',         '][a|;?J6g7T|0XCx2b/u<a2 f{nb+(EnT3(^6/V8iSp;<} Cv$l$7Ex) }}or9^M' );
define( 'AUTH_SALT',         'vO>/c]5*t/.EM3[rA^CYR=b=.o{J5DfY9,2U=EM.F{;3)0=i_.6EVlHv-Q(@;.f*' );
define( 'SECURE_AUTH_SALT',  'n;>CunuYY(#QT2j13HsB!us^_:*r@DIXh#dEXbJb LqeH9%L lAF2[<U(v6+@c.u' );
define( 'LOGGED_IN_SALT',    'm:*7.H(fLP}cphXjb`Wk_=#au.ma;c=qk>Pe>WG=yG-<>^cwT-|cAfkOu*$]W+=:' );
define( 'NONCE_SALT',        'Fk)~s*`y~})A!(oGP)t*!(JVjHD8F#_-QoR/wzaXWYR7K%%^BB]fN/m)`)E^kPk>' );
define( 'WP_CACHE_KEY_SALT', 'YA>.^}C?rkDzf&pbCbGQrvL!V(g4uSF5jUc<Nm[D#%i]FA_T?ul$-~smZ$C{ma0Z' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

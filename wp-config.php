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
define( 'DB_NAME', 'yeu-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '-IP>jiulUPQ{QmIYZJH !m%r~VLTta6_7.DL{yuR0!op|t-D9Es:&9/O+)6lH.)U' );
define( 'SECURE_AUTH_KEY',  '$54&@eem<_@OlLO^$tL*nu$qUx<lM^0N{0ji9MW&c@#NeFL}:{UW1b*C_aqU~VQp' );
define( 'LOGGED_IN_KEY',    'wldn(10RSa 49!B@GhH9H^@#XIir]g%,aev%e!V.oFA.]Ex7` V|2ag^z2[}F[Pt' );
define( 'NONCE_KEY',        '4|q?iVT}LyPbWqc8)-Lk=R(xS5B,ag_]Vf_g]*I5_-SUy1%KYyf2Qyu4x::Mdipy' );
define( 'AUTH_SALT',        '.TB_.$3GXKNi_1#8w-oL|tPtS8!_*7 OwucY`_tZM~z|4$K,@7;SKC>7V_a-4#-j' );
define( 'SECURE_AUTH_SALT', 'cYB;|:e/_t+uB.W?5#sSn6O~9LLC![G,7yUDSL7!Gm4:^A@r0e[#JzXcYx&y4z;a' );
define( 'LOGGED_IN_SALT',   '4s?:2&_j[OJi:W[z$Y_G;ordB*uC6h,-9NjHra73E*^qXl!v|Q?9J^-woOv.zm#`' );
define( 'NONCE_SALT',       '|?aHCDQz]O&m&_w}[ms0[Ms*PgWO?y;nw>5QcN6|1vX5f`FxsBpL4rRn^3#t$%C1' );

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

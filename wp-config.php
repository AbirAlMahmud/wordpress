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
define( 'DB_NAME', 'courses' );

/** Database username */
define( 'DB_USER', 'abir' );

/** Database password */
define( 'DB_PASSWORD', '*e_9a1LNSrAnsEZD' );

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
define( 'AUTH_KEY',         '< ]xOeL{~wih-#;sB[1P(L}D`;tu>ypG6j$I(hTek6rfL)4NmZKax]U7LDuH.3,.' );
define( 'SECURE_AUTH_KEY',  '7+:Mndi)6TQZHlM=mY9FxdI1?7*rPZ@H.7QvLJLhXQE3m]O`,aGl^] )D#q~9Tp0' );
define( 'LOGGED_IN_KEY',    '<e>kJ:^gV#LS%2BC!s-WnIR#.r]@t!9<,];e`WD;ljop/Kcbd){S#yh}q%+R{[v]' );
define( 'NONCE_KEY',        'A+VX j{G>pp:m?he)he:l&NPKtMm[$fbo7Xryy<<Z{q7 9+kCbx:{P)kD7C:cD6(' );
define( 'AUTH_SALT',        '1jZ@{gzseKubviT2(JChe`Gx_5QHT2JQN&`lNH*b%YS3NTRaaDqcQqe1r`gV.V1/' );
define( 'SECURE_AUTH_SALT', 'T0.:!~9:YpL%zr+k4w@tnK~VycsPu-wo$ESscuL`|Z$B1xw.vN?t<Q9@lFygG0UI' );
define( 'LOGGED_IN_SALT',   'l(LL=FE9T5hpS{CV{{^iNWTgx3PK77j3u!X1j2)9D(ibx$aY?-9Q:!FR;Kn S.Qn' );
define( 'NONCE_SALT',       ')#3$1BatR5EmK[y8rT/l)?G- 9{y2nI$@jKH5#d.bM3X;HX3^sl!X_R99iMHj`8P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mh_';

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

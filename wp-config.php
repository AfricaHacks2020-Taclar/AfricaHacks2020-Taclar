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
define( 'DB_NAME', 'taclarco_wordpress_site' );

/** MySQL database username */
define( 'DB_USER', 'taclarco' );

/** MySQL database password */
define( 'DB_PASSWORD', 'taclarcpanelpw' );

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
define( 'AUTH_KEY',         ']j&UXy_<f6;5(Cb4O`(pBg>7c2r%T{f|3p/v-(1rp8r_zCZwa|r}%6rE3|;,4{u9' );
define( 'SECURE_AUTH_KEY',  'qo_N9SY$vKp)#aCi,o[I&fwMA0|[h~TNd:.|0u IA]`<GA^W+%%F:e1v$us-RrUb' );
define( 'LOGGED_IN_KEY',    ']ESbj&</`&*F!:;OJ0(=;8VCwqpk7wpl;H_UfTYdNf*{xbhj6W.v@rU`,DQ57?-u' );
define( 'NONCE_KEY',        '(=<w)`h+(H#82TUDh#3oX{QCNI}yQ_u&sAst9syKVjDql1wwSdegpj<RzEl1@Psq' );
define( 'AUTH_SALT',        'L^uN0 ZHj9M|goQW yrzBa%S+X(9FlTl62dS,$rceer<&_1O0MVY5}gg)Aj~I5l5' );
define( 'SECURE_AUTH_SALT', 'NP=T0a@MR6~,gp@8kt!YM-m!62c90>vcV{N`;{UC6-LeB;$~iEJ0@~YN;.V^z=ec' );
define( 'LOGGED_IN_SALT',   'obA.*@E0!xN:v03Q1i?g%==bs2;`qOw]4SIOd:});k-:la>-EYHX}[uHU5]^_%0k' );
define( 'NONCE_SALT',       '(pSK@yCbt2<Ogv&oDj/@0K{}&J1B;u^?4(5^.Q0o?2&B f(~)}bCME?&,#e_Xky#' );

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

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
define( 'DB_NAME', 'wpreact' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '2*.LUWL7&O ;6E:-l#z]C;mE`7sH7@V~zaWQKW#1pzoJ2p~{#AF2@XuK4!2sFCIr' );
define( 'SECURE_AUTH_KEY',  'g!?|< 7Vzf moRJa,zKWSQKsk[0DE0@p ~]7u~t=l#X_h5W,G#4fjQ[[M_*C48Ck' );
define( 'LOGGED_IN_KEY',    's|])4h:J$7.&:BdrGH;nDuf%SrK?t*,Rv5*JiY =w%NSQJd.NQE|)J),Q5iLnqA!' );
define( 'NONCE_KEY',        '~1?rOvW[QSWP>Hmih}DZrINLN|EsAn:h2do*{3[mkUTmJagY_f0Dw/qh)wD{i0A ' );
define( 'AUTH_SALT',        'aR,<8 |jQG&-8jhHe)zP~{3249ir=)S^;:yh5=(>nGN{[KE8m<n_d8ciD6Ch2P^v' );
define( 'SECURE_AUTH_SALT', 'SEE.zX;vx7,W-<=OIaN|Ivx4RF3bq<{AKy@e>KcbL7|CFH&-&Ddi[*nX}|}Mr];+' );
define( 'LOGGED_IN_SALT',   'Uf,QQLGQkW<FsaEGs:KLIqb?T,N#|J<w(nsH`&;9?6;QkucFA@-Er3VdNerP@ylj' );
define( 'NONCE_SALT',       '{uRmm+mRpAvTiBKPho#,>^eFdoD1?%W1v3&U/MA`,XCEU*4*;.(y{A#Z$W@`sw?*' );

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

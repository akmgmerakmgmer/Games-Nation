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
define( 'DB_NAME', 'new_theme' );

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
define( 'AUTH_KEY',         '*-U]1G_KIu[Y?qN[<~=M];g#L[%fGu!h}wMvq.G|dq5z4.xC!vuOiz.1)NC||xP@' );
define( 'SECURE_AUTH_KEY',  'Y~;&#rG3^CQv~/T}^yE_sue??$<tM~]kj Y6a5( 904r:8_6_HWsc=+|33*s8zDg' );
define( 'LOGGED_IN_KEY',    'l|Y-In$7Nuo{}g<iwn~SA^c76Uib70$@Q_gVG/*2HG+1lFDKvEv+B-MoUlT:Wb}m' );
define( 'NONCE_KEY',        '|z6H,;d70MNYp0&SJU$|9$)SuFbZCCp9eck<keI`SoI{`M }H_svQoh8}Xia1`A(' );
define( 'AUTH_SALT',        'aS3`X|Ju<2QhskMEHf%x1H|/RMshgSjow^lra1}uCy3R5Gtyesnb;],WkKv},Dxo' );
define( 'SECURE_AUTH_SALT', 'G%=1LYjD5Yg_0GRR*Nqv_n.>8.(ov2}BkQFa+n9W5RQAq/L5v#:js!tmo%#5CkH)' );
define( 'LOGGED_IN_SALT',   'f!36]U5:uk*w_[gMu!UVF~{+>_Cu3:vv?2<s;MWtJYc;~NR6c`V(ep+T_psSwclV' );
define( 'NONCE_SALT',       '6Fy:k[BO[$VVN9[{Je/~]vN?A)1UVigHW4_s`].6es&EQg$)Vh#>,wT63:%NPGI2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mido_prefix';

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

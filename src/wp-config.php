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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '2RgtX1f[^b#}*@j(#6{^V&E~r+{{0DyXn)dVb^aE:A{gN@U2J!1EAE7i|>4$d/rT' );
define( 'SECURE_AUTH_KEY',  'U>1v4[4m~yf^AG<[tb@7jhWpY+=[l-.a}Gm6fr=mN6=CAWmd#&D&]P^e NPj>Uot' );
define( 'LOGGED_IN_KEY',    'fp-qz&Dq7XPnWRm`U4%i,Ur:Vv- }pz1|#&VmnzA DO:AGj!U2N7oYy@QaH?y@1<' );
define( 'NONCE_KEY',        'bl_=p!<q1JC$w8:J;FT=e$>o.`qdUNi(xwyG0+Yc6-ypmj}M<6Vhme{uZat@DzQz' );
define( 'AUTH_SALT',        'W]pr6dkEa>6*<_`y4tTzb$iL7VAJm/i6^;|;/Gm1+N( A!+OJQN)`/n1`M7sW]mA' );
define( 'SECURE_AUTH_SALT', 'Wq4nWGkZ+G%^U)jiwTZO)^BRS;K+BLoPZDg412yDP(GM ~QhA`L5haPVyD/|>V.}' );
define( 'LOGGED_IN_SALT',   'wFusAqjB@iw])`3cTg-QnjC`[rOr4|AxCo@Rp>(&_+`7[_Pu$oXg~UyAxNMGJvl{' );
define( 'NONCE_SALT',       '6SW!yh[$ gDsM{^~9hP41lEJ%uLw#JaPGadhG:AU6&^+ 6t61u~34d_!`%h?L,Gi' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

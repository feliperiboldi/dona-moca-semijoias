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
define( 'DB_NAME', 'donamocadb' );

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
define( 'AUTH_KEY',         '|CBM8knQHWuLKzUy1?f3J/?K6h{w*s^^a,/@&`8Y%&`[dA9|KbLU0250cp6>C+*L' );
define( 'SECURE_AUTH_KEY',  '>`N*]]t{[2vemEMlSEZXzd.2Bh1?/qC+D3@#@m|jQ+B$n&$kybwFv6v5Boh|N_xO' );
define( 'LOGGED_IN_KEY',    ':/?_-E~GnN PTN4KIhw[wpZ)e^x[,lG| ^sN]xDbl~(AYose*KSExu):)Z{[_Ss]' );
define( 'NONCE_KEY',        'Cqrs(#^yVBq6VvXA8PF@#/2)qvvc}90+A,oE,<<oY{=CQ*.[yOY/GIEmq:3vIV&s' );
define( 'AUTH_SALT',        '+Cy@r_Yi+&aG/1/I/%R/SOSn{sQUmlHY9iw6]c-Pw_CZ9>oP),0#O^=/hf %gUtf' );
define( 'SECURE_AUTH_SALT', 'mBXtq[waZI{E I.Y=Tp}rLm*`[|S4_AS8Xo][(tb%FATtv%Oz_G>pM%N!*BLm_l|' );
define( 'LOGGED_IN_SALT',   ']|s!$7*edf4zy94)yv#eI^RdQ. p9,@MMEB.z9}n0cEv~IhO*185xRa&&xWK48sq' );
define( 'NONCE_SALT',       '&@8/zQ}j>5VCT%%!2*q`;),^H[6`} ZWIsr`L9qL l*].`k<M!@FT),%PH3=%;B2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dm_';

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

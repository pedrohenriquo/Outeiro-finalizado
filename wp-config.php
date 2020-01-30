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
define( 'DB_NAME', 'outeiro' );

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
define( 'AUTH_KEY',         '&]GM22h.z#O)~yq+d/;6 ,c]b#]Y#SqFxuPFx45L`PSwKM!O(,04bo,I}xEbG5P ' );
define( 'SECURE_AUTH_KEY',  'k.NS7)9{b?v4cgeEw)`PbAxDXF>[RWwx},N3$Y!$tcv[-Q%`M{@8e5*13x``D!;f' );
define( 'LOGGED_IN_KEY',    'Jl#6`J=9`]T|#@!by{pb(u?X)fF7{Q+#dn$V{{;[k:$1mU7!@+7j:X >r(co%.VH' );
define( 'NONCE_KEY',        '+PM:#+T68>%pAIqK52(eit{%Sb=+P}5SDo^@&dDwW|t:(6%U0,)(zEsmY7%re!4G' );
define( 'AUTH_SALT',        'n{_Xhe6uE!vlEuB>%#7K#?=PvBn)vNl^An=Dv$lClb5V7d(O0^.}hx3LRD6K59}8' );
define( 'SECURE_AUTH_SALT', '}(T/`0r ?4gC9tzQMM[~vy_TE8SH8kLNxqoPnkqvKKxpUc}S@sD17W-<LrgfqlPS' );
define( 'LOGGED_IN_SALT',   '>6^gWuSy3|UX|JlpqT*w8vN)>h$vhP iAkV[|ZYe[ArJ|es-PbyikXyvn7BV=Y@~' );
define( 'NONCE_SALT',       '@)Nxd]|Yi^SrTOjJOM,SY;FBGS YM;(<w:$@%FMl1zq Zrd)#us/=b D68ERet7!' );

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

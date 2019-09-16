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
define( 'DB_NAME', 'tiendadota2' );

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
define( 'AUTH_KEY',         'RHx>v.U!/XX6O=5au]g{Q9$ !t[->?upDHaDj3{,_@.n1$P_onYi>o6:-3iKJAo7' );
define( 'SECURE_AUTH_KEY',  'F;;-z],_l Ss_hh6Oyc>U<2V$Z]z=Am4`K9pwdrnxfiR$48?X$gI7JC@TXhn?CVR' );
define( 'LOGGED_IN_KEY',    'u3I+UPXr!|tm~/.6r)DYWV*H _UmbSu-7aozA+c=Lx1G@ u[Nl6&Kv*#P[6I^Sz#' );
define( 'NONCE_KEY',        '8W`6R([Qo!@XXiYEak9X 4Dc&U;$q9(+:nI6%!I)o$Lrp#4m[t%n%Y_w`R]6n<Cj' );
define( 'AUTH_SALT',        'GL np]8S.@fFFIJ7_R$iU(SG9!Wd2GB;9C~vIDgO!bs3)>9P#7-49?I_,gz#@(YJ' );
define( 'SECURE_AUTH_SALT', 'DUZ%4L3>FP;D=;:b.oln&Q<#Le4i7S1wwep6k%ry$$DN;~v^H]y[b 3a+ejHwPg`' );
define( 'LOGGED_IN_SALT',   '!q)am:I!waU`_%H2rBt$yO;q+yEM/6mt8*?>`C@1K;@Lf,FM@`l=y,>;b[4a.oos' );
define( 'NONCE_SALT',       '6=V&IQf~8 T%K1](c~?tg)SX0;2J:pgLCwpL6~s+6fy1tJ=v3ac/mt_r5F*xQ.=x' );

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

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
define( 'DB_NAME', 'task' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';78DXv|@6b&[21/.{r[SInrHf&o=&q5&{6+hL`XcP!<dV@i^zs_&R^I&tX-d-Z3~' );
define( 'SECURE_AUTH_KEY',  'JLXY$A*(,!ZbV,b xG~K]0~*e*mbe^s[20N[_8GO?1<@=zO K%ZW{65o= ]`,0ce' );
define( 'LOGGED_IN_KEY',    '<t`;@#W=qjS3HZL^!Sp.`pdne(X=5mMW?hbw^;iL0aJh*M4%:ZR2kA!I{za4@CH`' );
define( 'NONCE_KEY',        '%9Q1_T{+bgXC&C.dEurZY&DH,-2LdJ[&n8;B+Xsh?L~$f=$ip[zlUyyLv1Hu6K@@' );
define( 'AUTH_SALT',        'bOZx,`cl5.csOscHfs+eX~DoSEq5~{EzP5Hsxrdk7Cs]<yR,TPhtm{>#D~|ISLWp' );
define( 'SECURE_AUTH_SALT', '=b..b@B`RtvwFvW|_azq$d[v_hB9z*LTV$Iu7mW`SZ+%?|>lO3{qXjl{})EN6QDO' );
define( 'LOGGED_IN_SALT',   'm/)rM^Z>)GK?OS6=OKo[%]tbAi8JUA&u(g~Ah{]=NMg?@HGII0N,,k4cqly,#esu' );
define( 'NONCE_SALT',       'F3k^/UU_ZmNRGhH|U*H%m%Yyv*,#fr?3.$f)xryZ6.NJ0,I]lMIIM`*U+`/S*:B@' );

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

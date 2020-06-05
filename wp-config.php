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
define( 'DB_NAME', 'uzair.github' );

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
define( 'AUTH_KEY',         'MH7wpE6mR@Icp;Qu5>Tc/Vc`Szop)m/gc@)qZEc6^{Y1x9NJNS(14<*8-tawW.~z' );
define( 'SECURE_AUTH_KEY',  '+)Qq)B}G=g)fv+q!$E3T;6A*VX/!o5nHkj7H*#&F88C?C-%F~gq~ EtP}XA<vI6k' );
define( 'LOGGED_IN_KEY',    '1@S_Jxd+[Jh!TwzY^1 ytD1rR_G[# hL]:$C8 m!d3n:tJjo&SV#K,hd1pTR53+m' );
define( 'NONCE_KEY',        'oHx~|1y7#+o9=a&(7ddbnF0V^<%MqV7o=|5K90b{+Avca-+;;8$Cy~@+Lco{{|ac' );
define( 'AUTH_SALT',        '<}e{<n5#zA2=$6Q2WC85t9^15NtpZQI[?}:K$2M[gXDd7vcG^h|*89O(9WuUap@e' );
define( 'SECURE_AUTH_SALT', '@`>n?iE)nu#PHc*5t<s5_Q)gN+$8R~z^YK~HJe!vQ7s_i6!#a.[ow]xsV=#9!Md}' );
define( 'LOGGED_IN_SALT',   'Q7~LU7WO&[Sx4pkF)>;7RlN3Eo>40q uE GgxX7an/{oa7~KFQ[MtIh-p1bmxYx[' );
define( 'NONCE_SALT',       'euBF<_7W55Iczd=,  jp]PF~Szs{M!vbmn&|+me{BGvV<Z$h+lo-WQ7Qzz3pi,6(' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'n3I)%NkrA](MxxgPA|a;.RA2a{&5{?g@Rg:pq]UsIIxFSRX<I(iBaM?%q}z1)(mW' );
define( 'SECURE_AUTH_KEY',  '-=M7l@%?v[ohSfZUc%WmZ$tlR<^h/v?SrFfjzE)~8vLe/W8`~ZlL@]^61j,n$&3<' );
define( 'LOGGED_IN_KEY',    '-.?SN]hEmghWV1|PJiy_*_O:f!YsZGuQr0[0>#@,j`@Sfe$H|#K][;q^y[L~QoUI' );
define( 'NONCE_KEY',        '77Qg!X4@+Ht7hv(iSli>)xc.F9mph*?vCppQgHu`?}nE[K)=i:{hxfxeYs!oi%?O' );
define( 'AUTH_SALT',        'InY@Bj%JX*gG S^so(%<@mJPlQ_KNs6>d;m_OmQc?DO8K*!6-(^DW/Rz,.juwfnC' );
define( 'SECURE_AUTH_SALT', '=^&aj(!Q+*p/f/Y s#;Alevwt2{;$AF9|20v><bQLY0RPNe:|o*wqmYCpOp&7c6w' );
define( 'LOGGED_IN_SALT',   ';CQBRreIfx]t5HH(bydiRH69ONmX,+$=j$p4yr%]4nVS:F0&(`KR5@0<VEPSTe~T' );
define( 'NONCE_SALT',       '##mBJlh{Y;:r,jZ+f75s6hpW2Zuuz3VbN)nS1 }2nvj`mj>jr)W2l(=7b(BEjo!=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

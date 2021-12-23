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
define( 'DB_NAME', 'icr_baza_podataka' );

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
define( 'AUTH_KEY',         '<|&7.Et+Zue9yRoe9=xWHcLxbbZUPao+/qNbdT6& 5ZJ@py+Y ^7&6i1DldKM$iW' );
define( 'SECURE_AUTH_KEY',  ']1u1ny?Z(DYApruSWoENoC=ob$M67$ugk0$fdI$U)];OjdmUG!WdV&Hw{)Yl/9rs' );
define( 'LOGGED_IN_KEY',    'm(Z{v6,G(dwu{>}`i;Us97RpMfY(;OJ&pD0r`8le4-~n_x<UXQ~xg?i0)5M{[-q%' );
define( 'NONCE_KEY',        'lqQ?gs-)/)tY! )&CGM@hv2@pOA}Lus9Wj3BZo2]62~xU?10fl=f$le ]~dB$5I#' );
define( 'AUTH_SALT',        'ZEJ=x/vN.ZN$Gm]GA:FM1nQ:n/gdx#&2gQ5lqc `OihSWA>[Lz+$?a-fkv18lZJn' );
define( 'SECURE_AUTH_SALT', 'k.K;_Rf6#PBU%U}4># M>(fS=9J=:!:Y#+Bh6HTPHPx0sulr27d)YHovs2g_tDDg' );
define( 'LOGGED_IN_SALT',   'andEI)O%d{mp[2H^*ilRTVwJGm+HfSx@SSMO8%Qp]27~|)T6!;: |C<>2QU2RV$y' );
define( 'NONCE_SALT',       '/y1E&0Yfx 32@el<G<I@T$76F2Xa;mR0_$Lf5Ga>90DVLgwYVFW[@MQ~nY5qdF2*' );

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

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shady' );

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
define( 'AUTH_KEY',         'K?tDVlh,*41{sh!s{>w:J__37#d]N9LI0z/aH[kk~4*$j89E6B?QRUYwi3d<VU!r' );
define( 'SECURE_AUTH_KEY',  'oYI;x[Glsj<0[(mAgcm49J]IMsO<6m/Q!^WkVe+`BSvyt*=z*1>I70Jn{G9:$z)8' );
define( 'LOGGED_IN_KEY',    'O2L83YL0}I6aQ&j;W; N(AjD;82x&.OV|n22[R_t-lHG._ 97ADkj}z.xZZn)MrI' );
define( 'NONCE_KEY',        '6 :e5A`-eOuQKcRcJK(Z)hC1{}8Z$,68/HT|Y?!+wsvb;U7&o#)MRLZi>=A|P=nk' );
define( 'AUTH_SALT',        'P?bWU^vqK*/85 OqNdLh1$]3t)aw&QuRf8ZeaqK^vKIg[cwBJC/Z0uMW.f3,nt 4' );
define( 'SECURE_AUTH_SALT', '[pU 6>j4NTJggr&Sn%W>x=+}iu]/eyLdh1(o.2HxP*DT5yNe-U<+Gs )+GHVJ^42' );
define( 'LOGGED_IN_SALT',   'P,.[8KSEj jQU$HL$3&U#pe/W aI<t=z-/a+Q|EUm,@y_Fj&vR8<A<sp}b~Ump|B' );
define( 'NONCE_SALT',       '8r`?]>?.p4$g{p[ 3;-FMHU#MpE0(jIYOBg}n=[g7e 9,Xt[jg9f4Zx5zDd_aZeU' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

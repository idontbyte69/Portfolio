<?php


define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'aiyH3P.cqYYlT^cDKlML?s,9^<4);tZRvG)1wyX7fRi5WiZrG$Eh#.u|,/=;~<n.' );
define( 'SECURE_AUTH_KEY',  '=a<Yj%d;C2k5M8ggv,]1#D,>Oe$SP7?%p^y*#Jj.if@RxLP?*xH!byn ~(1k8u]9' );
define( 'LOGGED_IN_KEY',    '3EPzPULpR7f`M-:QWf|f]pgKk0r{u|x#7VtjIOv@iMj/wPf4B_P~*?xkYwgNY/n?' );
define( 'NONCE_KEY',        'w7@*4QXV)~O!Q |HTIvF8iWk]<{]O(E/.!;Z0@#kMnM+wL#!7tEC%[<USMFXS0KV' );
define( 'AUTH_SALT',        'Bez^&u(N?+NJlZm$l0z^~h.ezi-nx+ET%+^a]xpOc2YZa`W{ebJ]Dd=a*|sokST4' );
define( 'SECURE_AUTH_SALT', 'OT6RaU+}TS{&gOfH+OejGj=RAT.pBzoEf2q0CIp<YR?r&Fr`*2!/ut-x=bI.XXPo' );
define( 'LOGGED_IN_SALT',   ',[%C-B9Zmy(Nn~nBq;VC%ULxk}=aMVWTt,k5yo^~,dxb/~)%G$[^c,qK@i_Z9O7d' );
define( 'NONCE_SALT',       ')1x.56Rhp%?.!$`sls[bn,CVktofZ7D5hC]4x<crr8JHrxNr$|yiuR4J,G|<QDNE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_portfolio';

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

define('WP_ALLOW_REPAIR', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

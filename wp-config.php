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
define('DB_NAME', 'cookstop-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ck?OMd$v/ATD6#6/I7{#&%JUM0m%%BUg?M4LG_fJFb}bA}@5lo=B:=_TER hI*#C');
define('SECURE_AUTH_KEY',  '-uF1D}#RtVL=N!H!haL@j_[l0IJ7{*`Q%ZgkqZQ7*}t8@CNAcbL&Jgt6Jz,S+1fH');
define('LOGGED_IN_KEY',    'r}20C?3O(c##@Dr]}}T,:6$|ae%A< 5iSxj0AsM^DQrG0TQ^h)b(|Y_H0/:z*QX|');
define('NONCE_KEY',        'NNg/L)wrG>vI@~sg`Je-%<w+fH~PYTd9u|x=`|_BC-hSACm0Byu#a{.Ffc6#t7?0');
define('AUTH_SALT',        'o cXKvgg{*:w`.K:S</ fJf[7((6G-[GdME_G7[hU$>&$Ejb4m d.g|;z3NbWMI>');
define('SECURE_AUTH_SALT', '7lLtj2BclV7X52Y7{.&Za,$yeg/|r!vc@>pZL`N]K51rgJo/)t|,B=0Ycqs&&[S,');
define('LOGGED_IN_SALT',   ']27]3__ DuxA89dU)>AAH[Hp?d@kq&OoHwQ.OTtrVoO/19MG//Ib%|NF0?kSY`R^');
define('NONCE_SALT',       'By[9:y3Sf_+6x3MigQRrj2s;o2wb4_Yh}nGT2mDR#}0>Tq*b3Qt5^kZLX}mRMR:=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

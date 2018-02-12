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
define('DB_NAME', 'wordpress_front');

/** MySQL database username */
define('DB_USER', 'wordpress_front');

/** MySQL database password */
define('DB_PASSWORD', 'wordpressfront');

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
define('AUTH_KEY',         'KKam3|>]RL{NhuyF,%8xys$vm2qA0%01aIha@kr5nO_*Bm|Njj4R**Z#2.fk#+q)');
define('SECURE_AUTH_KEY',  'Qq5~{UPF[PhE2f)6O}63/m WhW6`B -h>%1|mPq1`&_OaO_ZLrzxA8T(O]FD;cZF');
define('LOGGED_IN_KEY',    '`AQ.qFSft`A -QFU7SX]^3#X.c_wtQ-K6>fqe0J7qcE5v9FYT2l{.!>AuG%DeS./');
define('NONCE_KEY',        'Q]pWR.d>ma,$L?G(b^sh &*bP[)RIPTq/Qk}Pd[VWD35#:ABvp6,ww*cFf=<&|2U');
define('AUTH_SALT',        'L9Q,<nJJk8tF hy,$]5 V6Gs}En:aL#RncB>E3sD)/qQX3a,|U7*fqLsy6)SW[X!');
define('SECURE_AUTH_SALT', '&iYVOe^,=k0 !2sav:f4DiTS)noM0C7M#]Aejgi*<b6kK%Sc%j8Qo|)rH*#]?Sg$');
define('LOGGED_IN_SALT',   '!h)|c#|(cyckA!W@b74F-ma<},K$$/.0n#0jLisQYcB7i-kYJe(i20.o65S?3{]Q');
define('NONCE_SALT',       'e-=arYc57Wd?0lIe?zQ782>JY{ATcTNz?aujE+.dogZGbQiI&)0/Q(?SbptFGK0+');

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

<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lakshma2_wp');

/** MySQL database username */
define('DB_USER', 'lakshma2_wp');

/** MySQL database password */
define('DB_PASSWORD', '*QdSDTc)');

/** MySQL hostname */
define('DB_HOST', 'engr-cpanel-mysql.engr.illinois.edu');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'scmDS9HSb35Z0OJYbwqBiV0Px5D9TGFYsFguMaCe4CnPAe7UW3gnBCLirn3R3daq');
define('SECURE_AUTH_KEY',  '4W_okUAcbasq01R1nEcDvRKvmZkkO2e4dBEkSb4vl2Bz9in6m4G4BbrWGTqSHhNz');
define('LOGGED_IN_KEY',    'd6_ZPAhz8cKGpJpgBmwWktZT2A2hLlZkGcK63S9U31n7g_wjmvsQ62gx1kRXgMdx');
define('NONCE_KEY',        '5JDya0Su9xOU7z2COCK4HfWaBd8UpenXdwThzwlQXrYxmweigtk_hl5ZIDFtv3_h');
define('AUTH_SALT',        'coze1J0Z_6C0amYJzBbLwmsGVg5njHajM01o11z6t3ymQkJNYTzQHm8Wx3iVK7PH');
define('SECURE_AUTH_SALT', 'zwNYmNF6QZiXNoUfKzwyqziw0CrrAlx_IgHQB1zUknkEKuKnW3lGNpFruSgZn6uu');
define('LOGGED_IN_SALT',   '0pUpsS2oz2QEHkee06QyXaQsZjpIiRmhgZrVVyaEAu8fr6uQofdtKOuHXyEhsL3v');
define('NONCE_SALT',       'Q1nQ6x7qjJOnN_p5m9a5cErSRW427qsNPCSUFpsCbZADZOCbxsxOxqo7Xg0RnG3H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

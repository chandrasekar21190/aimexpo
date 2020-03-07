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
define('DB_NAME', 'aimexpo');

/** MySQL database username */
define('DB_USER', 'aimexpo');

/** MySQL database password */
define('DB_PASSWORD', '[CSW!h58p8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '9yvt74fmgbukthhd4yd0aeemttrfg5abc9wcxse2wgsaoqduud2gn11qwegh5lpr');
define('SECURE_AUTH_KEY',  'r6gqbzqbm8wdheqq6ntme1vwxtrmpytw0seyckqiap5qqjgub9alkrkdsrfvyi1b');
define('LOGGED_IN_KEY',    'ufzfhtpyplpxe4ewfqbfduyu37m7vivxbhnj9do5dquhuarn103k4etoi17ezshu');
define('NONCE_KEY',        'gmymtusn4eh6fdgg0xcexjiqskxdnkvsu9cb51ribisgg03wnbfm17nhrciewjus');
define('AUTH_SALT',        'gpknjlw1bvxanqkwzyfiu2pqj2tisuf12l4elzazcfugidrisswbsiq56r9sjzox');
define('SECURE_AUTH_SALT', 'lz16siqeab1fnx7nmdvw8h11iccba9k5kig6wfu0lyovepqced6gektleidhysiq');
define('LOGGED_IN_SALT',   'yxjgfxeimcmfjhcyo9dxzjolqv5v8ejrs61n69vyv5vmk7op8kezyypuo6jmkpbc');
define('NONCE_SALT',       'bbzts4m5yofz11okpugqm9qkznzx17zhy204nbex0xvv9subefnbpjt3cfzrquzu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpst_';

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

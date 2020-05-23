<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tuna42na28475_w45i_tmthwdbjvyemw' );

/** MySQL database username */
define( 'DB_USER', 'nwemibifgxciewwc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mPpGnEn32KJP8YU' );

/** MySQL hostname */
define( 'DB_HOST', 'tuna42na28475.domaincommysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5K){KJXV>lve~{=rI[;bl7!VkTi27t5ZJZJ-6GN=+Wg7Y4|A~ ;u;_#q$_9X1m|K');
define('SECURE_AUTH_KEY',  '_5&3Q%Opjlg/Gy-6)I |Tx&GtTL|9I]7y^URC*+y^34Z=-`7iKNzNG-$p}kWmfk|');
define('LOGGED_IN_KEY',    'X12(?}<kqZvwqZ~-=Tb=#aQTIxh2jWs2OgI{`O@/2M~+eGK5}91-PNw2,1-n`(Oh');
define('NONCE_KEY',        'v_5X5_zKg%|LrRq}U*0C*G|IfVd4zd[E([A?~cLyOP5!A1Q3*N54Tx;,`IclV&4.');
define('AUTH_SALT',        '0kce6%@[)^[75G-g@K~= it@C>_`pxI]|E=Z/};z|QnAhSvpt&Skm{iwZ53E4qT<');
define('SECURE_AUTH_SALT', '*j0YfW@f^Fq>F~&L3,`9Su;YBgM ]`yF-`tE+y$>u0-8HZ@MHei>xE7+H#rB!T6 ');
define('LOGGED_IN_SALT',   'Zo/xw yYl_#S3#mF9q_`#QT1Ej.&n{el}((MD_%e+dwLu,BGh1u?&ljH;qpmlFyZ');
define('NONCE_SALT',       'dwGHw^bZ}<7y%H!&;D3Zq:d>KTD8_vE^>%sKG7W|CC~b-e|kcNjl[m8FAJc|1ccH');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w45i_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');

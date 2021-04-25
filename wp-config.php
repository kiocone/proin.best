<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'proinbes_wp778' );

/** MySQL database username */
define( 'DB_USER', 'proinbes_wp778' );

/** MySQL database password */
define( 'DB_PASSWORD', '4y1T9C)p)S' );

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
define( 'AUTH_KEY',         '7flpld5jef87pozq8ufjhemtfojrwuhxyjdtsofnw289mocixbde3yeozrght7rk' );
define( 'SECURE_AUTH_KEY',  'b4w9laetzmoblb9fwxxkfdp0bwapaxcoo6xhbq3yjptb1we2ay9mxe8va1ige41f' );
define( 'LOGGED_IN_KEY',    'opklzr1kj3rifmwxmsk4l2rab6bdk8z49nfnq342mte2s1rvr3x9h451rfwmaqjz' );
define( 'NONCE_KEY',        '8g3ot9ja37g5kbzx9jxbp4etkmbpufql0qmmcf9hdy35xgfbk2ndmprf90ge7jeh' );
define( 'AUTH_SALT',        'ry9k1w53iqoctk1uwvmhxwpt4xwagn0aosbabtbdblv1hqs0hro92v5bks7gb9zs' );
define( 'SECURE_AUTH_SALT', '3li66su2wq0rj6um8zfcyct7276ir4ydnzno8ud2om1eongzdzv2nxjvej5dwnnu' );
define( 'LOGGED_IN_SALT',   '2xl9elmgisvbfi77kvcpmpspvybf8bwjmjahpb6zteqqpxvxjqbmfje9yu5bisii' );
define( 'NONCE_SALT',       't1lixzlm1lmmx0lqhnkeejwinbgd8jxeeynwklwhmeabwo1zdky9fcsmpx1xco97' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3a_';

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

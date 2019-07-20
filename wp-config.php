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
define( 'DB_NAME', 'zenshinDBxr4j' );

/** MySQL database username */
define( 'DB_USER', 'zenshinDBxr4j' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GSMaUmXRja' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'Q>73Bfy^rz^>JQYiqy$AIPMTbj.{3A7EMqy^.u${bjqsz@|JRkVdks:4C8GNVw@' );
define( 'SECURE_AUTH_KEY',  'CRw@![-:4ZhksdlsCKRZYckr08FBJRY@!>|}48cksow@|FNVcKHa~#]1_]19px~pt' );
define( 'LOGGED_IN_KEY',    'gz@CJRZVdk[08C~#;elt-ipx~DLePWem#;529HPt+*#|:5ls-~pw~OWdlWahp:5O9' );
define( 'NONCE_KEY',        'pt+x*#;PWeml~#KSZdOWdl[DK5DSx~#]-_]ahpxPXfm{2M6EMTu$.{$7bjqyfnuE' );
define( 'AUTH_SALT',        'p9HLS6QM$.{y^<Tbufnu$7EMIQXf,{76ELT.]2.<;6bi+mu+*ELTbXfm{AE^>' );
define( 'SECURE_AUTH_SALT', 'yELPXIPi<6E{3Mqu$.rz!BJQYJRk>04F}4!v@|Vckonv$MUbfQYf}FM7FMQv$0^' );
define( 'LOGGED_IN_SALT',   '~1:5hos-z!>YckrcksCJRVFNVc}4C[0Jow@!el~DKSaHOi_]D;59Hl~#t+_Saimls' );
define( 'NONCE_SALT',       'bmqy6QMIQXf^<AAHPTx*#.]26ai+mqx*PXeLTbi2AIJNUc^>B}48Fkr,v@!>NgoYg' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

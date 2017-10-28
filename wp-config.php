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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id3206568_wp_3b1c9f0415b2da484b65da7d6ba4b1a2' );

/** MySQL database username */
define( 'DB_USER', 'id3206568_wp_3b1c9f0415b2da484b65da7d6ba4b1a2' );

/** MySQL database password */
define( 'DB_PASSWORD', '14c6b3f83badc4913e66f1037640b6478f9b0d55' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'XZV[U{`V#(QYV>WQ|Ew;3l+VuMopWh6TJ{{Amld>Qc^g;,!_W.};S0l}o{DSedRz' );
define( 'SECURE_AUTH_KEY',  'S7j4Z/#2]6]oDFmB4CBq3$7,5E_..Gy3Sv~mbgWMB!#-<jQJJp|(j$))H.# fHBD' );
define( 'LOGGED_IN_KEY',    'R>$2g_`b|7}i3AlLF.5FqzOH<Zj7?XIh?[yiwcs@{F YA~TEz8E<|lx|cj{^QQZ`' );
define( 'NONCE_KEY',        'Y H+G*-`XoW35i>6QD6>.#RC3A}Rwh>.)Le-T<Y{*ZBs4IY^yZjsz#-gGweXVWv8' );
define( 'AUTH_SALT',        ':0}5T~P~qYr6TW5LG@VYnAyHiVR6j/(,eRii7Fm+h4+Hc[gQ~WCK!U6k/DJ}]W~q' );
define( 'SECURE_AUTH_SALT', 'nvOw( W*q9BN->O?3lZC5>*hG8+?I(w~:oD4@]EUlJLU3Z9H)Zku/ytC%:`kK*fI' );
define( 'LOGGED_IN_SALT',   '}-z55rAM>>,qot?-6(gSG>St)o.D+v*&aRv=E[I_Kg}pfM.-ySN4SQd]PeH/oR_:' );
define( 'NONCE_SALT',       '+B+LP{CC-7~&iKBoE+0=7Z>+0NsW$}z%0^l}#5kxW@t,z!13R]|v0$B|JCg_L>BT' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', 'bancodobrasil');
define('DB_NAME', 'fozoa');

/** MySQL database username */
define('DB_USER', 'phpuser');
// define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'php123');
// define('DB_PASSWORD', '12345');

/** MySQL hostname */
define('DB_HOST', '192.168.16.3');
// define('DB_HOST', 'workspace');

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
define('AUTH_KEY',         'cG,{46hO@hTb!j+*l+K{/gxk/()[&W1dfnPf^~^8Vha9Ig@`^C[5ZoGGcGPn+8yQ');
define('SECURE_AUTH_KEY',  '+;S`dT~o:-DYq^g]dCNpmIo,<2p:7vi0^c5u;|+_Vhp*`}yr~bHkwqSVvZtDPF_Y');
define('LOGGED_IN_KEY',    'q~mb(Y{|Jg1SJgJ,!mD9>?l|9LRA?w36C/g@-+-TifT$vFH4d}/SY%g% H<gN#Hw');
define('NONCE_KEY',        '0u=CeO |1z5,=%+1gYzBX~25k)(O*Yh-qZG:`1K8^|F:.k7;gj@pc-Wp-LW@Vz&x');
define('AUTH_SALT',        '5*O&`os5Okc`-]b5;)m4dE6tmagv#+/j}ACMxS+H ^I-L<)2%(208l:uZk93n@0r');
define('SECURE_AUTH_SALT', 'WhjfpH+*|46_90#vpO?TTg8ca8o-T2HN73OB]?4>XJ) jchs+* +J|cV+LDK+ |p');
define('LOGGED_IN_SALT',   '!cbfz;QHciEo=|!0{:RW{qTW<DaQ[G4oxqY#hFi=%~k~Y7_Q<;n;jT]_:>$pmGZP');
define('NONCE_SALT',       '~nSOB[iH3s$@pDtSbdZXGaIArs8$Qjh8$f6,r`c{u}u0zi(v|+m-fB{*|u2|PqbW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('WP_HOME','http://localhost/fozoa');
define('WP_SITEURL','http://localhost/fozoa');   

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

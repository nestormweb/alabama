<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'sitioalabama' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '-U&,y[~m`O3O?p-h@yHS``)U@_E/ahHt=vH<N>XGx^O*&>KfuM<Ph U8rS/>3/ c' );
define( 'SECURE_AUTH_KEY', 'O/xo)`#gug~/ylT:_<BeGhhH3:;n|a!K9(u-WJY$*p!tFsOhdSQtq,X!@y7D,~;!' );
define( 'LOGGED_IN_KEY', 'wp@mc}pNFFY5gDX_52&!:=a)Zre<r~0^5:M*rxyq-C-lX|W`.OKL %jb7p0;P&@)' );
define( 'NONCE_KEY', 'A7vY5rTMaT5}v#`Sk=yk,55&Zsjmkk|D<2pD>krP e}lx%-xW_!d04aom6W .W>6' );
define( 'AUTH_SALT', 'i78ctScG2(4rL>[0j*DT([bt7994|bRRV#{>HJRB/P~:2Kunj0`Lqy?j4,EBKH$3' );
define( 'SECURE_AUTH_SALT', 'h.^iQia Fj;+2>KQ>z>()ac}zAX:1,]hk(+atC*]Q$#?5Cuy0}iUali$Bh7!%~{`' );
define( 'LOGGED_IN_SALT', 'FTc^<syVM[5VTwRPj$@[hLM3I|[lj~#1*/ue3hqMtIuEhJV:=Ci9m73r9Gd);Ve?' );
define( 'NONCE_SALT', '~)]b=zT[o!D#tWxFJI9-|(iN&caUBuO%!=gB1wwbPVuJ=[0=}%8W!sFbhvCSrLS-' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'alab3w_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);
/** Activar WordPress Multisite **/
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/sitio/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


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
define('DB_NAME', 'jusovi_gv');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'jusovi_admin');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'cmea03123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '6V_4WL2+;4.]PcWEs&Ra#:4]3YrC^s@0-uPNV[K4wcH[IF5@x+xCMhy /r*Cc/dd');
define('SECURE_AUTH_KEY', 'OG,KRmd/1T(bMs$n2Rm`3(iIcw]^(GL9Lj= 9BjwD/`[G<5Oa{%+Vi;^& e16]T=');
define('LOGGED_IN_KEY', '$<[=P!M%J<P68h^}o5oU,}+J)?CCE3Ed>IJ!/:vGH:PFOZmJBM&XQ&!+ICIj  8z');
define('NONCE_KEY', '%KY/Pr{M5R-}eAXNvU[2KUmkl1]RTR40X@$[|k}K`OLk2W+Iz`kOm(c7+s/bt#Q_');
define('AUTH_SALT', '9N&NPdcGD7CIg;,b}%X6NXtH?$EVO)&X!CgL$@:f#EMtEUV+#dB?]/M+o64<CROY');
define('SECURE_AUTH_SALT', 'q@b<z`N^: ;3*=4^ 1^)`U1Lf7`&u%1i1[Ix$S_d>7G2*B[w22g_&Ve0}>v fU`h');
define('LOGGED_IN_SALT', 'wV0X31:Z=5:L,p n:G`M%kwSV*4nKK~acL[5nNNo=RQ1~?0YK-sE#S >5|3&mH}K');
define('NONCE_SALT', 'L@qBgTb.xmjo;,HeDa`~>e9@l[}b(*eQURrn9U$_jyrLb<*V_f]kTst;?8&PMj`4');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'w915p_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


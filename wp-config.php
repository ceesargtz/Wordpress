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
define('DB_NAME', 'cursowp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'F~.K*dzwKSr *RN.}&Z=[9zi3EX)DpU!$BX_y$0vW&([?KV}wAU%T]&DPF6X@_12');
define('SECURE_AUTH_KEY', '/1r6j1(W^<fj8rEa2dFAP=J3fR~*C3 #,cB^ ;Bdf%>Ap-@{fic4JBUA: {2p%P<');
define('LOGGED_IN_KEY', '4fWqs,c^HND#qu$(B]k!Xg#,vcjImpFFe!Y<]hj6+cepKj{#lx%MQ@I#f3a?~DwN');
define('NONCE_KEY', 'j)]7j,{_~9u*?uYrNt:b=Xu4(J11A>mUAQ:Zv?SXFw@,A&e[b3+5Msi+xKp36E/w');
define('AUTH_SALT', 'o&LsUh&60-2qc4P]Crn82?q*RFLQSUP_oxA<r}]2N+TW_!v6X<!Ht:t(l(-hMl>B');
define('SECURE_AUTH_SALT', 'i^<pco.zV*K<tND}}Udw{5C%_Q,XQP/vy|up5G,pb^;Dw.iwi?+nwU_;)oHw3H)g');
define('LOGGED_IN_SALT', '7SJf-*3<<)c3w!27r|<Rw1vk@y>gH[<C^_wx~:+Cw!v<)bB4uk,J3NM*Ng^SooT5');
define('NONCE_SALT', 'bP^IF>Q=|jg4VcB*Tnyf$_^h)VhVzLS8q-0OM<6;8hv;|I 7>rQBuGRG:#i+#;nG');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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


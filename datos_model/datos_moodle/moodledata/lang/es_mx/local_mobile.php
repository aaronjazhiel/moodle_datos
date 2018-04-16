<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_mobile', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   local_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpermissions'] = 'Otorgar permisos al rol de usuario autenticado';
$string['allowpermissionsdescription'] = 'Editar el rol de usuario autenticado y permitir la capcidad moodle/webservice:createtoken';
$string['cannotcreatetoken'] = 'La generación automática de fichas (tokens) no está disponible para los administradores del sitio (ellos deben de crear una ficha manualmente en el sitio)';
$string['checkpluginconfiguration'] = 'Revisar configuración del plugin';
$string['clickheretolaunchtheapp'] = 'Por favor, haga click aquí si la App no abre automáticamente';
$string['customlangstrings'] = 'Cadenas personalizadas del idioma';
$string['customlangstrings_desc'] = 'Las palabras y frases mostradas en la App pueden personalizarse aquí. Ingrese cada cadena personalizada de caracteres del idioma en una línea nueva con el formato: identificador_de_la_cadena, cadena personalizada de caracteres del idioma y código del idioma, separados por caracteres de barra vertical |. Por ejemplo:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
Para una lista completa de identificadores de cadenas de caracteres, vea <a href="https://github.com/moodlehq/moodlemobile-phonegapbuild/blob/master/build/lang/en.json">esta lista</a>.';
$string['custommenuitems'] = 'Ítems personalizados del menú';
$string['custommenuitems_desc'] = 'Se pueden añadir ítems adicionales al menú  principal de la App al especificarlos aquí. Ingrese cada ítem personalizado del menú en una línea nueva con el formatto: texto_del_ítem, URL del enlace, método para abrir el enlace  (inappbrowser, browser o embedded) -dentro-del-navegador, navegador o incrustado- y código de idioma (opcional, para mostrarle el ítem solamente a usuarios del idioma especificado), separados por caracteres de barra vertical |. Por ejemplo:
<pre>
Ayuda de la App | https://someurl.xyz/help | inappbrowser | en
Visite nuestro SIS | https://someurl.xyz | browser | en
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | en
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | es
</pre>
Use inappbrowser cuando Usted quiera abrir el enlace en un navegador sin dejar la App, use browser (navegador) para abrir el enlace en el navegador por defecto del dispositivo y use embedded (incrustado) di desea mostrar el enlace incrustado en una página nueva en la App.';
$string['disabledfeatures'] = 'Características deshabilitadas';
$string['disabledfeatures_desc'] = 'Seleccione aquí las características que quiera deshabilitar en la App Mobile para su sitio. Por favor tome nota de que algunas características aquí enlistadas podrían ya estar deshabilitadas mediante otras configuraciones del sitio. Usted tendrá que salir  y re-ingresar en la App para ver los cambios.';
$string['enableadditionalservice'] = 'Habilitar el servicio de características adicionales Moodle Mobile';
$string['enableadditionalservicedescription'] = 'Este servicio debe ser habilitado..';
$string['forcelogout'] = 'Forzar salida';
$string['forcelogout_desc'] = 'Si se habilita, la opción del App \'Cambiar sitio\' es remplazada por \'Salir\'. Esto resulta en que el usuario es expulsado del sitio por completo. El usuario deberá re-ingresar su contraseña la siguiente vez que quiera acceder al sitio.';
$string['local_mobiledescription'] = 'Plugin que extiende las características de los servicios Móviles (Mobile)';
$string['local_mobilesettings'] = 'Configuraciones';
$string['local_mobiletypeoflogin'] = 'Elija el tipo de ingreso al sitio';
$string['local_mobiletypeoflogin_key'] = 'Tipo de ingreso al sitio';
$string['local_mobileurlscheme'] = 'Esquema URL para ingresar mediante una ventana del navegador.';
$string['local_mobileurlscheme_key'] = 'Esquema URL';
$string['loginintheapp'] = 'Mediante el App';
$string['logininthebrowser'] = 'Mediante una ventana del navegador (para plugins SSO)';
$string['loginintheinappbrowser'] = 'Mediante un navegador incrustado (para plugins SSO de acceso único)';
$string['mainmenu'] = 'Menú principal';
$string['mobilefeatures'] = 'Características Mobile';
$string['pluginname'] = 'Características adicionales de Moodle Mobile';
$string['pluginnotenabledorconfigured'] = 'El plugin local de Moodle Mobile debe habilitarse y configurarse para poder desplegar la App';
$string['remoteaddons'] = 'Complementos (add-ons) remotos';

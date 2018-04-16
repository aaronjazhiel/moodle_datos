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
 * Strings for component 'repository_googledocs', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID del cliente';
$string['configplugin'] = 'Configurar plugin de Google Drive';
$string['googledocs:view'] = 'Ver repositorio Google Drive';
$string['oauthinfo'] = '<p>para usar este plugin, Usted debe registrar su sitio con Google, tal como se describe en la documentación <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Como parte del proceso de registro, Usted deberá introducir la siguiente URL como (URLs de redireccionamiento autorizadas) \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p>Una vez registrado, se le proporcionará una ID de cliente y un secreto que podrá entonces emplear para configurar todos los plugins de Google Drive y Picasa.</p><p>Por favor tome nota de que Usted también tendrá que habilitar el servicio  \'Drive API\'.</p>';
$string['pluginname'] = 'Google Drive';
$string['secret'] = 'Secreto';
$string['servicenotenabled'] = 'Acceso no configurado. Asegúrese de que el servicio de \'Drive API\' esté habilitado.';

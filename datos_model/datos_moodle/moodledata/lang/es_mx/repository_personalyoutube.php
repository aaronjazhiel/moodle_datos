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
 * Strings for component 'repository_personalyoutube', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   repository_personalyoutube
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID del cliente';
$string['configplugin'] = 'Configuración para repositorio personal YouTube';
$string['oauthinfo'] = '<p>Para usar este plugin, Usted debe registrar su sitio con Google, como se describe en la documentación <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Como parte del proceso de registro, Usted necesitará ingresar la siguiente URL como (URIs de Redirección Autorizadas) \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p><p>Una vez registrado, a Usted se  le proporcionará un secreto y una ID de cliente, las que  puede usar para configurar todos los plugins de servicios de Google.</p><p>Por favor también tome nota de que Usted necesitará habilitar el servicio de \'YouTube API\'.</p>';
$string['personalyoutube:view'] = 'Ver repositorio personal YouTube';
$string['pluginname'] = 'YouTube personal';
$string['pluginname_help'] = 'Subir y publicar videos YouTube personal';
$string['search'] = 'Buscar';
$string['secret'] = 'Secreto';
$string['uploads'] = 'Subidas';

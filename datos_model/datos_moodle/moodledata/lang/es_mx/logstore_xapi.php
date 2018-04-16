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
 * Strings for component 'logstore_xapi', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   logstore_xapi
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundmode'] = '¿Enviar oraciones por quehacer agendado?';
$string['backgroundmode_desc'] = 'Esto forzará a Moodle a mandar las oraciones al LRS en segundo plano mediante un quehacer cron. Esto hará que el proceso esté menos apegado a tiempo real, pero ayudará a prevenir desempeño imprevisto de Moodle ligado al desempeño del LRS.';
$string['endpoint'] = 'Punto_final (endpoint)';
$string['filters'] = 'Bitácoras de filtro';
$string['filters_help'] = 'Habilitar filtros que INCLUYEN algunas acciones a ser enviadas a bitácora.';
$string['logguests'] = 'Mandar a bitácora acciones de invitado';
$string['maxbatchsize'] = 'Tamaño máximo del lote';
$string['maxbatchsize_desc'] = 'Las oraciones son enviadas al LRS en lotes. esta configuración controla el número máximo de oraciones que serán enviadas en una sola operación. El cnfigurar esto a cero causará que todas las oraciones sisponibles sean enviadas de una sola vez, aunque esto no se recomienda.';
$string['mbox'] = 'Mandar email usuario';
$string['mbox_desc'] = 'Las oraciones identifican al usuario con su Email (mbox) o con su id_de_usuario en la plataforma Moodle (cuenta). el activar esto enviará el Email (mbox).';
$string['password'] = 'Contraseña';
$string['pluginadministration'] = 'Administración del almacén_de_bitácora xAPI';
$string['pluginname'] = 'Almacén_de_bitácora xAPI';
$string['routes'] = 'Incluir acciones con estas rutas';
$string['settings'] = 'Configuraciones generales';
$string['submit'] = 'Enviar';
$string['taskemit'] = 'Emitir registros a LRS';
$string['username'] = 'Nombre_de_usuario';
$string['xapi'] = 'xAPI';
$string['xapifieldset'] = 'Conjunto_de_campo de ejemplo persnalizado';
$string['xapisettingstitle'] = 'Configuraciones de Logstore xAPI';

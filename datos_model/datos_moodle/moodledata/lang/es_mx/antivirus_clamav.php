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
 * Strings for component 'antivirus_clamav', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV no se ha ejecutado. El mensaje de error de retorno es {$a}. Ésta es la salida de Clam:';
$string['clamfailureonupload'] = 'Cuando falle ClamAV';
$string['configclamactlikevirus'] = 'Tratar los archivos como si efectivamente fueran virus';
$string['configclamdonothing'] = 'Tratar los archivos como si estuvieran OK';
$string['configclamfailureonupload'] = 'Si Usted ha configurado Clam para que revise los archivos subidos, pero estuviera configurado incorrectamente, o no corriera por alguna razón desconocida, ¿cómo debería de comportarse? Si Usted elige \'Tratar archivos como virus\', serán movidos adentro del área de cuarentena, o serán eliminados. Si Usted elige \'Tratar archivos como OK\', los archivos serán movidos al directorio de destino como normalmente. En cualquier caso, los administradores serán alertados de que Clam ha fallado. Si Usted elige \'Tratar archivos como virus\' y por alguna razón Clam no funcionara (usualmente debido a que Usted ha ingresado una ruta-hacia-Clam inválida), TODOS los archivos que sean subidos serán movidos al área dada de cuarentena, o serán eliminados. Sea cuidadoso con ésta configuración.';
$string['configpathtoclam'] = 'Ruta hacia ClamAV. Probablemente algo similar a /usr/bin/clamscan o /usr/bin/clamdscan. Usted necesita ésto para que funcione ClamAV.';
$string['configquarantinedir'] = 'Si Usted quiere que ClamAV mueva los archivos infectados a un directorio de cuarentena, escríbalo aquí. Debe de ser escribible por el servidor web. Si Usted deja ésto vacío, o si Usted escribe un directorio que no existe o que no es escribible, los archivos infectados serán eliminados. No incluya una diagonal final.';
$string['invalidpathtoclam'] = 'Moodle está configurado para ejecutar Clam al cargar un archivo, pero la ruta para Clam AV, {$a}, no es válida.';
$string['pathtoclam'] = 'Ruta hacia ClamAV';
$string['pluginname'] = 'Antivirus ClamAV';
$string['quarantinedir'] = 'Directorio de cuarentena';
$string['unknownerror'] = 'Se ha producido un error desconocido con Clam.';

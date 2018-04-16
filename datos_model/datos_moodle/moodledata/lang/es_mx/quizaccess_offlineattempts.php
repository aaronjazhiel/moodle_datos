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
 * Strings for component 'quizaccess_offlineattempts', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   quizaccess_offlineattempts
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowofflineattempts'] = 'Permitirle al examen que sea intentado fuera-de-línea en la App Mobile';
$string['allowofflineattempts_help'] = 'Si se selecciona, el usuario podrá descargar el examen para intentar resolverlo fuera-de-línea usando la App Mobile. Si el usuario descarga un examen para fuera-de-línea, se creará un nuevo intento. Este intento estará vacío hasta que el usuario sincronice los resultados del intento en la App Mobile.';
$string['confirmdatasaved'] = 'Yo confirmo que no tengo trabajo no-guardado en mis dispositivos móviles antes de continuar este intento.';
$string['mobileapp'] = 'App Mobile';
$string['offlineattemptserror'] = 'Los exámenes fuera-de-línea no son compatibles con los exámenes que usen cronómetros descendientes, restricción del acceso por contraseña o subred, ni con exámenes que usen comportamientos diferentes de retroalimentación diferida con o sin Puntuación Basada en Certeza.';
$string['offlinedatamessage'] = 'Usted ha trabajado en este intento en un dispositivo móvil, y esos datos fueron guardados por última vez en este sitio hace  {$a}.';
$string['pleaseconfirm'] = 'Por favor, confirme que Usted no tienen trabajo no-guardado en sus dispositivos.';
$string['pluginname'] = 'Regla de acceso a intentos fuera-de-línea';

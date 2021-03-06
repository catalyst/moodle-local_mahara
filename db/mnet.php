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
 * MNet publishers/subscribers definition.
 *
 * @package    local_mahara
 * @copyright  2015 Catalyst IT Ltd. (@link http://www.catalyst.net.nz/)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$publishes = array(
    // Show up as the assign_submission plugin in the services list. Makes it less confusing
    'assign_submission_mahara' => array(
        'apiversion' => 1,
        'classname'  => 'mnetservice_local_mahara',
        'filename'   => 'mnetlib.php',
        'methods'    => array(
            'donothing',
            'can_view_view',
        ),
    ),
);

<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace mod_equella;

/**
 * Hook callbacks for mod_equella.
 *
 * @package   mod_equella
 * @copyright 2025 Catalyst IT
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hook_callbacks {

    /**
     * Runs after config has been set.
     *
     * @param \core\hook\after_config $hook
     * @return void
     */
    public static function after_config(\core\hook\after_config $hook) {
        global $CFG;

        if (during_initial_install()) {
            // Do nothing if plugin install not completed.
            return;
        }

        require_once($CFG->dirroot . '/mod/equella/lib.php');

        mod_equella_after_config();
    }
}

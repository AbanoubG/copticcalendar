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
 * The Coptic calendar type.
 *
 * @package    calendartype_coptic
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace calendartype_coptic;
use core_calendar\type_base;
use core_calendar\type_factory;

defined('MOODLE_INTERNAL') || die();

/**
 * Handles calendar functions for the Coptic calendar.
 *
 * @package calendartype_coptic
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class structure extends type_base {
    /** @var array number of days each Gregorian month would have in a non-leap year */
    private $gdaysinmonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
  
    /** @var array number of days each Coptic month would have in a non-leap year */
    private $cdaysinmonth = array(30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 5);
    /**
     * Returns the name of the calendar.
     *
     * This is the non-translated name, usually just
     * the name of the folder.
     *
     * @return string the calendar name
     */
    public function get_name() {
        return 'Coptic';
    }



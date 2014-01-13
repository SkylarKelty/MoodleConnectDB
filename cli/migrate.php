<?php
/**
 * Connect's DB Migration scripts.
 *
 * @author Skylar Kelty <s.kelty@kent.ac.uk>
 */

global $CFG;
$CFG = new \stdClass();

require_once(dirname(__FILE__) . "/../vendor/autoload.php");

unikent\LARS\Connect\DB::migrate();
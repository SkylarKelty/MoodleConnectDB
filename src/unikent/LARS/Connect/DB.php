<?php
/**
 * Connect's DB Migration scripts.
 *
 * @author Skylar Kelty <s.kelty@kent.ac.uk>
 */

namespace unikent\LARS\Connect;

require_once("/var/www/releases/config/connect/database.php");

/**
 * Connect Migration Helper
 */
class DB {
	public static function migrate() {
		global $CFG;
		\SkylarK\Fizz\FizzConfig::setDB($CFG->dsn, $CFG->user, $CFG->password);
		unikent\LARS\Connect\Models\Course::migrate();
	}
}

<?php
/**
 * Connect's DB Migration scripts.
 * Designed to be run via CLI.
 *
 * @author Skylar Kelty <s.kelty@kent.ac.uk>
 */

namespace unikent\LARS\Connect\Models;

/**
 * Moodle->SDS Courses Mapping
 */
class Course {
	public static function migrate() {
		$table = new \SkylarK\Fizz\Util\FizzMigrate("mdl_course");
		$table->addField("id", "bigint(11)");
		$table->addField("session_code", "varchar(4)");
		$table->addField("module_delivery_key", "varchar(36)");
		$table->addField("moodle_key", "varchar(4)");
		$table->addField("moodle_id", "bigint(11)");
		$table->setPrimary("id", true);
		$table->commit();
	}
}
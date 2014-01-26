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
		$table = new \SkylarK\Fizz\Util\FizzMigrate("course_list");
		$table->addField("id", "bigint(11)", true, array("auto_increment"));
		$table->addField("moodle_env", "varchar(24)");
		$table->addField("moodle_dist", "varchar(24)");
		$table->addField("moodle_id", "bigint(11)");
		$table->addField("shortname", "varchar(255)");
		$table->addField("fullname", "varchar(254)");
		$table->addField("summary", "longtext", true);
		$table->setPrimary("id");
		$table->setIndex(array("moodle_env", "moodle_dist"));
		$table->setIndex("moodle_id");
		$table->setIndex("shortname");
		$table->commit();
	}
}

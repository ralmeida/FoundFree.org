<?php
/* FoundItemImage Fixture generated on:
 Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Los_Angeles' for 'PDT/-7.0/DST' instead in /Server/cake/console/templates/default/classes/fixture.ctp on line 24
 2011-04-20 13:02:48 : 1303329768 */
class FoundItemImageFixture extends CakeTestFixture {
	var $name = 'FoundItemImage';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'found_item_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'image' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'image_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
	array(
			'id' => 1,
			'found_item_id' => 1,
			'image' => 'Lorem ipsum dolor sit amet',
			'image_type' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-04-20 13:02:48'
			),
			);
}
?>
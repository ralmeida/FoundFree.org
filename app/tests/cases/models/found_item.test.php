<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Los_Angeles' for 'PDT/-7.0/DST' instead in /Server/cake/console/templates/default/classes/test.ctp on line 22
/* FoundItem Test cases generated on: 2011-04-20 13:02:20 : 1303329740*/
App::import('Model', 'FoundItem');

class FoundItemTestCase extends CakeTestCase {
	var $fixtures = array('app.found_item', 'app.user', 'app.signup', 'app.app_release_comment', 'app.feed_post', 'app.found_item_comment', 'app.user_group', 'app.group', 'app.found_item_cat', 'app.found_item_image');

	function startTest() {
		$this->FoundItem =& ClassRegistry::init('FoundItem');
	}

	function endTest() {
		unset($this->FoundItem);
		ClassRegistry::flush();
	}

}
?>
<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Los_Angeles' for 'PDT/-7.0/DST' instead in /Server/cake/console/templates/default/classes/test.ctp on line 22
/* UserGroup Test cases generated on: 2011-04-20 12:56:26 : 1303329386*/
App::import('Model', 'UserGroup');

class UserGroupTestCase extends CakeTestCase {
	var $fixtures = array('app.user_group', 'app.user', 'app.signup', 'app.app_release_comment', 'app.feed_post', 'app.found_item_comment', 'app.found_item', 'app.group');

	function startTest() {
		$this->UserGroup =& ClassRegistry::init('UserGroup');
	}

	function endTest() {
		unset($this->UserGroup);
		ClassRegistry::flush();
	}

}
?>
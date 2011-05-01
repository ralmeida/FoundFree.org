<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Los_Angeles' for 'PDT/-7.0/DST' instead in /Server/cake/console/templates/default/classes/test.ctp on line 22
/* FoundItemComment Test cases generated on: 2011-04-20 13:03:12 : 1303329792*/
App::import('Model', 'FoundItemComment');

class FoundItemCommentTestCase extends CakeTestCase {
	var $fixtures = array('app.found_item_comment', 'app.found_item', 'app.user', 'app.signup', 'app.app_release_comment', 'app.feed_post', 'app.user_group', 'app.group', 'app.found_item_cat', 'app.found_item_image');

	function startTest() {
		$this->FoundItemComment =& ClassRegistry::init('FoundItemComment');
	}

	function endTest() {
		unset($this->FoundItemComment);
		ClassRegistry::flush();
	}

}
?>
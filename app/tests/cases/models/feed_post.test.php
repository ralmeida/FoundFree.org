<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Los_Angeles' for 'PDT/-7.0/DST' instead in /Server/cake/console/templates/default/classes/test.ctp on line 22
/* FeedPost Test cases generated on: 2011-04-20 13:03:48 : 1303329828*/
App::import('Model', 'FeedPost');

class FeedPostTestCase extends CakeTestCase {
	var $fixtures = array('app.feed_post', 'app.user', 'app.signup', 'app.app_release_comment', 'app.found_item_comment', 'app.found_item', 'app.found_item_cat', 'app.found_item_image', 'app.user_group', 'app.group');

	function startTest() {
		$this->FeedPost =& ClassRegistry::init('FeedPost');
	}

	function endTest() {
		unset($this->FeedPost);
		ClassRegistry::flush();
	}

}
?>
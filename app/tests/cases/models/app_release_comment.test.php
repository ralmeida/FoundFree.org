<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Los_Angeles' for 'PDT/-7.0/DST' instead in /Server/cake/console/templates/default/classes/test.ctp on line 22
/* AppReleaseComment Test cases generated on: 2011-04-20 13:04:37 : 1303329877*/
App::import('Model', 'AppReleaseComment');

class AppReleaseCommentTestCase extends CakeTestCase {
	var $fixtures = array('app.app_release_comment', 'app.app_release', 'app.user', 'app.signup', 'app.feed_post', 'app.found_item_comment', 'app.found_item', 'app.found_item_cat', 'app.found_item_image', 'app.user_group', 'app.group');

	function startTest() {
		$this->AppReleaseComment =& ClassRegistry::init('AppReleaseComment');
	}

	function endTest() {
		unset($this->AppReleaseComment);
		ClassRegistry::flush();
	}

}
?>
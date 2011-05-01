<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Los_Angeles' for 'PDT/-7.0/DST' instead in /Server/cake/console/templates/default/classes/test.ctp on line 22
/* AppRelease Test cases generated on: 2011-04-20 13:04:15 : 1303329855*/
App::import('Model', 'AppRelease');

class AppReleaseTestCase extends CakeTestCase {
	var $fixtures = array('app.app_release', 'app.app_release_comment');

	function startTest() {
		$this->AppRelease =& ClassRegistry::init('AppRelease');
	}

	function endTest() {
		unset($this->AppRelease);
		ClassRegistry::flush();
	}

}
?>
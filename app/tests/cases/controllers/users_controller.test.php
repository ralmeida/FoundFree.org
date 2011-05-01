<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Los_Angeles' for 'PDT/-7.0/DST' instead in /Server/cake/console/templates/default/classes/test.ctp on line 22
/* Users Test cases generated on: 2011-04-20 13:06:11 : 1303329971*/
App::import('Controller', 'Users');

class TestUsersController extends UsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.signup', 'app.app_release_comment', 'app.app_release', 'app.feed_post', 'app.found_item_comment', 'app.found_item', 'app.found_item_cat', 'app.found_item_image', 'app.user_group', 'app.group');

function startTest() {
	$this->Users =& new TestUsersController();
	$this->Users->constructClasses();
}

function endTest() {
	unset($this->Users);
	ClassRegistry::flush();
}

function testIndex() {

}

function testView() {

}

function testAdd() {

}

function testEdit() {

}

function testDelete() {

}

function testAdminIndex() {

}

function testAdminView() {

}

function testAdminAdd() {

}

function testAdminEdit() {

}

function testAdminDelete() {

}

}
?>
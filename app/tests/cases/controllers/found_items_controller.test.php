<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Los_Angeles' for 'PDT/-7.0/DST' instead in /Server/cake/console/templates/default/classes/test.ctp on line 22
/* FoundItems Test cases generated on: 2011-04-20 15:22:07 : 1303338127*/
App::import('Controller', 'FoundItems');

class TestFoundItemsController extends FoundItemsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FoundItemsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.found_item', 'app.user', 'app.signup', 'app.app_release_comment', 'app.app_release', 'app.feed_post', 'app.found_item_comment', 'app.user_group', 'app.group', 'app.found_item_cat', 'app.found_item_image');

function startTest() {
	$this->FoundItems =& new TestFoundItemsController();
	$this->FoundItems->constructClasses();
}

function endTest() {
	unset($this->FoundItems);
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
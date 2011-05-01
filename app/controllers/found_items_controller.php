<?php

class FoundItemsController extends AppController {

	var $name = 'FoundItems';

	function beforeFilter() {
		$this->Auth->allow('index','view','tIndex');
		parent::beforeFilter();
	}

	function index() {
		$this->FoundItem->recursive = 0;
		$this->set('foundItems', $this->paginate());
	}

	function tIndex() {
		$this->FoundItem->recursive = 0;
		$data = $this->paginate();
		$data = Set::extract($data, "{n}.FoundItem.json");
		foreach($data as $key=>$row) {
			foreach($row as $k=>$rVal) {
				$rows[$k] = (object)$rVal;
			}
		}
		$return["rows"] = $data = $rows;
		$return["nRows"] = count($data);
		$this->_doJsonJayout($return);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid found item', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('foundItem', $this->FoundItem->read(null, $id));
	}

	function mystuff() {

	}

	function add() {
		if (!empty($this->data)) {
			$this->FoundItem->create();
			if ($this->FoundItem->save($this->data)) {
				$this->Session->setFlash(__('The found item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item could not be saved. Please, try again.', true));
			}
		}
		$users = $this->FoundItem->User->find('list');
		$foundItemCats = $this->FoundItem->FoundItemCat->find('list');
		$this->set(compact('users', 'foundItemCats'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid found item', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FoundItem->save($this->data)) {
				$this->Session->setFlash(__('The found item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FoundItem->read(null, $id);
		}
		$users = $this->FoundItem->User->find('list');
		$foundItemCats = $this->FoundItem->FoundItemCat->find('list');
		$this->set(compact('users', 'foundItemCats'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for found item', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->FoundItem->delete($id)) {
			$this->Session->setFlash(__('Found item deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Found item was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->FoundItem->recursive = 0;
		$this->set('foundItems', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid found item', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('foundItem', $this->FoundItem->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->FoundItem->create();
			if ($this->FoundItem->save($this->data)) {
				$this->Session->setFlash(__('The found item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item could not be saved. Please, try again.', true));
			}
		}
		$users = $this->FoundItem->User->find('list');
		$foundItemCats = $this->FoundItem->FoundItemCat->find('list');
		$this->set(compact('users', 'foundItemCats'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid found item', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FoundItem->save($this->data)) {
				$this->Session->setFlash(__('The found item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FoundItem->read(null, $id);
		}
		$users = $this->FoundItem->User->find('list');
		$foundItemCats = $this->FoundItem->FoundItemCat->find('list');
		$this->set(compact('users', 'foundItemCats'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for found item', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->FoundItem->delete($id)) {
			$this->Session->setFlash(__('Found item deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Found item was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

}

?>
<?php

class FoundItemImagesController extends AppController {

	var $name = 'FoundItemImages';

	function beforeFilter() {
		$this->Auth->allow('view');
		parent::beforeFilter();
	}

	function index() {
		$this->FoundItemImage->recursive = 0;
		$this->set('foundItemImages', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->FoundItemImage->create();
			if ($this->FoundItemImage->save($this->data)) {
				$this->Session->setFlash(__('The found item image has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item image could not be saved. Please, try again.', true));
			}
		}
		$foundItems = $this->FoundItemImage->FoundItem->find('list');
		$this->set(compact('foundItems'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid found item image', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FoundItemImage->save($this->data)) {
				$this->Session->setFlash(__('The found item image has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item image could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FoundItemImage->read(null, $id);
		}
		$foundItems = $this->FoundItemImage->FoundItem->find('list');
		$this->set(compact('foundItems'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for found item image', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->FoundItemImage->delete($id)) {
			$this->Session->setFlash(__('Found item image deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Found item image was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->FoundItemImage->recursive = 0;
		$this->set('foundItemImages', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid found item image', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('foundItemImage', $this->FoundItemImage->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->FoundItemImage->create();
			if ($this->FoundItemImage->save($this->data)) {
				$this->Session->setFlash(__('The found item image has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item image could not be saved. Please, try again.', true));
			}
		}
		$foundItems = $this->FoundItemImage->FoundItem->find('list');
		$this->set(compact('foundItems'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid found item image', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FoundItemImage->save($this->data)) {
				$this->Session->setFlash(__('The found item image has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item image could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FoundItemImage->read(null, $id);
		}
		$foundItems = $this->FoundItemImage->FoundItem->find('list');
		$this->set(compact('foundItems'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for found item image', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->FoundItemImage->delete($id)) {
			$this->Session->setFlash(__('Found item image deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Found item image was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

}

?>
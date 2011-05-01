<?php
class FoundItemCatsController extends AppController {

	var $name = 'FoundItemCats';

	function index() {
		$this->FoundItemCat->recursive = 0;
		$this->set('foundItemCats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid found item cat', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('foundItemCat', $this->FoundItemCat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FoundItemCat->create();
			if ($this->FoundItemCat->save($this->data)) {
				$this->Session->setFlash(__('The found item cat has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item cat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid found item cat', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FoundItemCat->save($this->data)) {
				$this->Session->setFlash(__('The found item cat has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item cat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FoundItemCat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for found item cat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FoundItemCat->delete($id)) {
			$this->Session->setFlash(__('Found item cat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Found item cat was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->FoundItemCat->recursive = 0;
		$this->set('foundItemCats', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid found item cat', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('foundItemCat', $this->FoundItemCat->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->FoundItemCat->create();
			if ($this->FoundItemCat->save($this->data)) {
				$this->Session->setFlash(__('The found item cat has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item cat could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid found item cat', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FoundItemCat->save($this->data)) {
				$this->Session->setFlash(__('The found item cat has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The found item cat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FoundItemCat->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for found item cat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FoundItemCat->delete($id)) {
			$this->Session->setFlash(__('Found item cat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Found item cat was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
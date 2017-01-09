<?php
App::uses('AppController', 'Controller');
/**
 * Purchases Controller
 *
 * @property Purchase $Purchase
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PurchasesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Purchase->recursive = 0;
		$this->set('purchases', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Purchase->exists($id)) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		$options = array('conditions' => array('Purchase.' . $this->Purchase->primaryKey => $id));
		$this->set('purchase', $this->Purchase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Purchase->create();
			if ($this->Purchase->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Purchase->exists($id)) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Purchase->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Purchase.' . $this->Purchase->primaryKey => $id));
			$this->request->data = $this->Purchase->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Purchase->id = $id;
		if (!$this->Purchase->exists()) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Purchase->delete()) {
			$this->Session->setFlash(__('The purchase has been deleted.'));
		} else {
			$this->Session->setFlash(__('The purchase could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Purchase->recursive = 0;
		$this->set('purchases', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Purchase->exists($id)) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		$options = array('conditions' => array('Purchase.' . $this->Purchase->primaryKey => $id));
		$this->set('purchase', $this->Purchase->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Purchase->create();
			if ($this->Purchase->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Purchase->exists($id)) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Purchase->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Purchase.' . $this->Purchase->primaryKey => $id));
			$this->request->data = $this->Purchase->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Purchase->id = $id;
		if (!$this->Purchase->exists()) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Purchase->delete()) {
			$this->Session->setFlash(__('The purchase has been deleted.'));
		} else {
			$this->Session->setFlash(__('The purchase could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Transports Controller
 *
 * @property Transport $Transport
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TransportsController extends AppController {

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
		$this->Transport->recursive = 0;
		$this->set('transports', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Transport->exists($id)) {
			throw new NotFoundException(__('Invalid transport'));
		}
		$options = array('conditions' => array('Transport.' . $this->Transport->primaryKey => $id));
		$this->set('transport', $this->Transport->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transport->create();
			if ($this->Transport->save($this->request->data)) {
				$this->Session->setFlash(__('The transport has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transport could not be saved. Please, try again.'));
			}
		}
		$stores = $this->Transport->Store->find('list');
		$posts = $this->Transport->Post->find('list');
		$this->set(compact('stores', 'posts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Transport->exists($id)) {
			throw new NotFoundException(__('Invalid transport'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Transport->save($this->request->data)) {
				$this->Session->setFlash(__('The transport has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transport could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Transport.' . $this->Transport->primaryKey => $id));
			$this->request->data = $this->Transport->find('first', $options);
		}
		$stores = $this->Transport->Store->find('list');
		$posts = $this->Transport->Post->find('list');
		$this->set(compact('stores', 'posts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Transport->id = $id;
		if (!$this->Transport->exists()) {
			throw new NotFoundException(__('Invalid transport'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Transport->delete()) {
			$this->Session->setFlash(__('The transport has been deleted.'));
		} else {
			$this->Session->setFlash(__('The transport could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Transport->recursive = 0;
		$this->set('transports', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Transport->exists($id)) {
			throw new NotFoundException(__('Invalid transport'));
		}
		$options = array('conditions' => array('Transport.' . $this->Transport->primaryKey => $id));
		$this->set('transport', $this->Transport->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Transport->create();
			if ($this->Transport->save($this->request->data)) {
				$this->Session->setFlash(__('The transport has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transport could not be saved. Please, try again.'));
			}
		}
		$stores = $this->Transport->Store->find('list');
		$posts = $this->Transport->Post->find('list');
		$this->set(compact('stores', 'posts'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Transport->exists($id)) {
			throw new NotFoundException(__('Invalid transport'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Transport->save($this->request->data)) {
				$this->Session->setFlash(__('The transport has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transport could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Transport.' . $this->Transport->primaryKey => $id));
			$this->request->data = $this->Transport->find('first', $options);
		}
		$stores = $this->Transport->Store->find('list');
		$posts = $this->Transport->Post->find('list');
		$this->set(compact('stores', 'posts'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Transport->id = $id;
		if (!$this->Transport->exists()) {
			throw new NotFoundException(__('Invalid transport'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Transport->delete()) {
			$this->Session->setFlash(__('The transport has been deleted.'));
		} else {
			$this->Session->setFlash(__('The transport could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

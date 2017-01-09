<?php
App::uses('AppController', 'Controller');
/**
 * Sales Controller
 *
 * @property Sale $Sale
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SalesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	
	public $helpers = array('Js');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sale->recursive = 0;
		$this->set('sales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sale->exists($id)) {
			throw new NotFoundException(__('Invalid sale'));
		}
		$options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
		$this->set('sale', $this->Sale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			if( ($this->request->data != null) && ($this->request->data['Sale'] != null) ) {
				

			} else {
				$this->Sale->create();
				if ($this->Sale->save($this->request->data)) {
					$this->Session->setFlash(__('The sale has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The sale could not be saved. Please, try again.'));
				}
			}
		}
		
		$customers = $this->Sale->Customer->find('list',array('fields' => array('customer_id', 'full_name')));
		$addresses = $this->Sale->Address->find('list');
		$phones = $this->Sale->Phone->find('list');
		$transports = $this->Sale->Transport->find('list');
		$saleUsers = $this->Sale->SaleUser->find('list');
		$aprovalUsers = $this->Sale->AprovalUser->find('list');
		$this->set(compact('customers', 'addresses', 'phones', 'transports', 'saleUsers', 'aprovalUsers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sale->exists($id)) {
			throw new NotFoundException(__('Invalid sale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sale->save($this->request->data)) {
				$this->Session->setFlash(__('The sale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
			$this->request->data = $this->Sale->find('first', $options);
		}
		$customers = $this->Sale->Customer->find('list');
		$addresses = $this->Sale->Address->find('list');
		$phones = $this->Sale->Phone->find('list');
		$transports = $this->Sale->Transport->find('list');
		$saleUsers = $this->Sale->SaleUser->find('list');
		$aprovalUsers = $this->Sale->AprovalUser->find('list');
		$this->set(compact('customers', 'addresses', 'phones', 'transports', 'saleUsers', 'aprovalUsers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sale->id = $id;
		if (!$this->Sale->exists()) {
			throw new NotFoundException(__('Invalid sale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sale->delete()) {
			$this->Session->setFlash(__('The sale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	/**
	 * add method
	 *
	 * @return void
	 */
	public function sale_call() {
		if ($this->request->is('post')) {
			
			if( count($this->request->data) > 0 ) {
				if( array_key_exists('SelectCustomer',$this->request->data) && array_key_exists('id', $this->request->data['SelectCustomer']) ) {
					$id = $this->request->data['SelectCustomer']['id'];
					$customer = $this->Sale->Customer->find('first',
							array(
									'conditions' => array('customer_id' => $id),
									'recursive' => 2)
						);
					$this->set(compact('customer'));
#			 		$addresses = $this->Sale->Customer->Address->find('all', array('conditions' => array('Address.customer_id' => $id)));
				}
			} else {
				$this->Sale->create();
				if ($this->Sale->save($this->request->data)) {
					$this->Session->setFlash(__('The sale has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The sale could not be saved. Please, try again.'));
				}
			}
		}
	
// 		$customers = $this->Sale->Customer->find('list',array('fields' => array('customer_id', 'full_name')));
// 		$phones = $this->Sale->Phone->find('list');
// 		$transports = $this->Sale->Transport->find('list');
// 		$saleUsers = $this->Sale->SaleUser->find('list');
// 		$aprovalUsers = $this->Sale->AprovalUser->find('list');
// 		$this->set(compact('customers', 'addresses', 'phones', 'transports', 'saleUsers', 'aprovalUsers'));
	}
	
	
	
	
/* 
 * ==================================================================================================
 * ADMIN METHODS
 * ==================================================================================================
 */	
	
	
	
	
	
	
	
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Sale->recursive = 0;
		$this->set('sales', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Sale->exists($id)) {
			throw new NotFoundException(__('Invalid sale'));
		}
		$options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
		$this->set('sale', $this->Sale->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Sale->create();
			if ($this->Sale->save($this->request->data)) {
				$this->Session->setFlash(__('The sale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Sale->Customer->find('list');
		$addresses = $this->Sale->Address->find('list');
		$phones = $this->Sale->Phone->find('list');
		$transports = $this->Sale->Transport->find('list');
		$saleUsers = $this->Sale->SaleUser->find('list');
		$aprovalUsers = $this->Sale->AprovalUser->find('list');
		$this->set(compact('customers', 'addresses', 'phones', 'transports', 'saleUsers', 'aprovalUsers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Sale->exists($id)) {
			throw new NotFoundException(__('Invalid sale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sale->save($this->request->data)) {
				$this->Session->setFlash(__('The sale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
			$this->request->data = $this->Sale->find('first', $options);
		}
		$customers = $this->Sale->Customer->find('list');
		$addresses = $this->Sale->Address->find('list');
		$phones = $this->Sale->Phone->find('list');
		$transports = $this->Sale->Transport->find('list');
		$saleUsers = $this->Sale->SaleUser->find('list');
		$aprovalUsers = $this->Sale->AprovalUser->find('list');
		$this->set(compact('customers', 'addresses', 'phones', 'transports', 'saleUsers', 'aprovalUsers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Sale->id = $id;
		if (!$this->Sale->exists()) {
			throw new NotFoundException(__('Invalid sale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sale->delete()) {
			$this->Session->setFlash(__('The sale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 */
class MenusController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');



    public function beforeFilter() {
	//check login or notice

		parent::beforeFilter();

		$this->Auth->allow();
	}

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Menu->recursive = 0;
		$this->set('menus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
		$this->set('menu', $this->Menu->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Menu->create();
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
			}
		}
		$users = $this->Menu->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
			$this->request->data = $this->Menu->find('first', $options);
		}
		$users = $this->Menu->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Menu->delete()) {
			$this->Session->setFlash(__('The menu has been deleted.'));
		} else {
			$this->Session->setFlash(__('The menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}





	public function populate($value) {


		$classifier = Inflector::classify($value);

		$this->loadModel($classifier);
	
		echo json_encode($this->$classifier->find('list'));

		exit;
}

	
	public function header_menu() {
		
		if (empty($this->request->params['requested'])) {
			throw new ForbiddenException();
		}
		
		$options = array('conditions' => array('Menu.status' => 'Active'));
		return $this->Menu->find('all', $options);
		
	}

	public function default_page(){


		$options = array('conditions'=>array('Menu.status'=>'Active','Menu.default'=>'1'));

		$abc = $this->Menu->find('first',$options);

		$this->redirect(array('controller'=>$abc['Menu']['parent_type'],'action'=>'view',$abc['Menu']['parent_id']));

		return $abc;

	}


	public function admin_default_page(){


		$options = array('conditions'=>array('Menu.status'=>'Active','Menu.default'=>'1'));

		$abc = $this->Menu->find('first',$options);

		$this->redirect(array('controller'=>$abc['Menu']['parent_type'],'action'=>'view',$abc['Menu']['parent_id']));

		return $abc;

	}
}
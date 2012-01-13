<?php

class UserController extends AppController {
	
	var $helpers = array ('Html','Form');
	var $name = 'User';
	
	function login() {
	} 
	
	function logout() {    
		$this->Session->setFlash("Você foi deslogado com sucesso.");
		$this->redirect($this->Auth->logout());
	}	

	function index() {
		$this->set('users', $this->User->find('all'));
	}
	
	function view($id = null) {
		$this->User->id = $id;   
		$this->set('users', $this->User->read());
	}
	
	function add() {
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash('Usuário adicionado.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
		
}
?>

    

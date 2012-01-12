<?php

class UserController extends AppController {
	
	var $helpers = array ('Html','Form');
	var $name = 'User';

	function index() {
		$this->set('users', $this->User->find('all'));
	}
	
	function view($id = null) {
		$this->User->id = $id;   
		$this->set('users', $this->User->read());
	}
}
?>

    

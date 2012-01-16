<?php

class AppController extends Controller {
	
	var $components = array('Auth');
	
	function beforeFilter() {
		$this->Auth->User = 'User';
		$this->Auth->fields = array('username' => 'login', 'password' => 'pass');
		$this->Auth->loginAction = array('admin' => false, 'controller' => 'user', 'action' => 'login');
		$this->Auth->loginRedirect = array('controller' => 'user', 'action' => 'index');
	}
	

}

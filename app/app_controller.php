<?php
class AppController extends Controller {

	private $ext  = '.php';
	var $components = array('Auth');

	function beforeFilter(){

		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
		$this->Auth->loginRedirect = array('controller' => 'pages', 'display' => 'home');
		$this->Auth->logoutRedirect = '/';
		$this->Auth->allow('display');
		
		$this->Auth->authorize = 'controller';
		
		$this->Auth->userScope = array('Users.active' => 1);
	}

	function isAuthorized() {
		if (isset($this->params[Configure::read('Routing.admin')])) {
			if ($this->Auth->user('profile_id') != 1) {
				return false;
			}
		}
		return true;
   }
}
?>

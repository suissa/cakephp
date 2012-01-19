<?php
class AppController extends Controller {

	private $ext  = '.php';

	public $components = array(
	        'Session',
	        'Auth' => array(
	            'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
	            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
		)
	);
	
	function beforeFilter() {
		$this->Auth->allow('index', 'view');
	}
	

// 	function isAuthorized() {
// 		if (isset($this->params[Configure::read('Routing.admin')])) {
// 			if ($this->Auth->user('profile_id') != 1) {
// 				return false;
// 			}
// 		}
// 		return true;
//    } 

}
?>

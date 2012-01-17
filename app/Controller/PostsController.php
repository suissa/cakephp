<?php
class PostsController extends AppController {
	var $helpers = array ('Html','Form');
	var $name = 'Posts';
	var $components = array('Session');

	function index() {
		$this->set('posts', $this->Post->find('all'));
	}
	
	function view($id = null) {
		$this->Post->id = $id;   
		$this->set('post', $this->Post->read());
	}
	
	function add() {
		if (!empty($this->data)) {
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash('Seu comentário foi salvo.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
}
?>
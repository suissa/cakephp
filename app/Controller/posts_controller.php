<?php
class PostsController extends AppController {

	public $name = 'Posts';

	public function index() {
		$params = array(
			'fields' => array('titulo', 'texto', 'autor'),
//			'fields' => array('Post.titulo', ),
//			'conditions' => array('title' => 'Nononon'),
//			'conditions' => array('autor' => array('$gt' => '10', '$lt' => '34')),
//			'order' => array('title' => 1, 'texto' => 1),
			'order' => array('_id' => -1),
			'limit' => 35,
			'page' => 1,
		);
		$results = $this->Post->find('all', $params);
//		$result = $this->Post->find('count', $params);
		$this->set(compact('results'));
	}

	public function add() {
		if (!empty($this->data)) {

			$this->Post->create();
			if ($this->Post->save($this->data)) {
				$this->flash(__('Comentário salvo.', true), array('action' => 'index'));
			} else {
			}
		}
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(__('Comentário inválido', true), array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Post->save($this->data)) {
				$this->flash(__('O comentário foi salvo.', true), array('action' => 'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Post->read(null, $id);
//			$this->data = $this->Post->find('first', array('conditions' => array('_id' => $id)));
		}
	}

	public function delete($id = null) {
		if (!$id) {
			$this->flash(__('Comentário inválido', true), array('action' => 'index'));
		}
		if ($this->Post->delete($id)) {
			$this->flash(__('Comentário apagado', true), array('action' => 'index'));
		} else {
			$this->flash(__('Falha ao pagar o comentário', true), array('action' => 'index'));
		}
	}


	public function deleteall() {
		$conditions = array('titulo' => 'aa');
		if ($this->Post->deleteAll($conditions)) {
			$this->flash(__('Post deleteAll success', true), array('action' => 'index'));

		} else {
			$this->flash(__('Post deleteAll Fail', true), array('action' => 'index'));
		}
	}


	public function updateall() {
		$conditions = array('title' => 'tit2' );

		$field = array('title' => 'tit' );

		if ($this->Post->updateAll($field, $conditions)) {
			$this->flash(__('Post updateAll success', true), array('action' => 'index'));

		} else {
			$this->flash(__('Post updateAll Fail', true), array('action' => 'index'));
		}
	}

	public function createindex() {
		$mongo = ConnectionManager::getDataSource($this->Post->useDbConfig);
		$mongo->ensureIndex($this->Post, array('title' => 1));

	}
}

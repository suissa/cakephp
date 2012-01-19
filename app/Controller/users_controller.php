<?
class UsersController extends AppController{
		
    public $name = 'Users'; 
    public $ext;  
    var $helpers = array('Html', 'Form', 'Session' );
    var $components = array('Auth');
    
    
    function admin_index() {
    $this->User->recursive = 0;
    $this->set('users', $this->paginate());
    }
    
    function admin_view($id = null) {
    if (!$id) {
    $this->Session->setFlash('Usuário inválido.');
    			$this->redirect(array('action'=>'index'), null, true);
    }
    $this->set('user', $this->User->read(null, $id));
    }
    
    function admin_edit($id = null) {
    if (!$id && empty($this->data)) {
    $this->Session->setFlash('Usuário inválido.');
    $this->redirect(array('action'=>'index'), null, true);
    }
    		if (!empty($this->data)) {
    if ($this->User->save($this->data))
    {
    $this->Session->setFlash('Usuário salvo');
    $this->redirect(array('action'=>'index'), null, true);
    }
    			else
    {
    				$this->Session->setFlash('O usuário não pode ser salvo, tente novamente');
    			}
    		}
    		if (empty($this->data)) {
    			$this->data = $this->User->read(null, $id);
    }
    $groups = $this->User->Profile->find('list');
    $this->set(compact('profiles'));
    }
    
    function admin_delete($id = null) {
    		if (!$id) {
    $this->Session->setFlash('Invalid id for User');
    $this->redirect(array('action'=>'index'), null, true);
    }
    if ($this->User->del($id)) {
    $this->Session->setFlash('User #'.$id.' deleted');
    $this->redirect(array('action'=>'index'), null, true);
    		}
    	}
    
    function admin_add() {
    if (!empty($this->data)) {
    $this->User->create();
    if ($this->User->save($this->data))
    {
    $this->Session->setFlash('The User has been saved');
    $this->redirect(array('action'=>'index'), null, true);
    		} else 
    			{
    				$this->Session->setFlash('The User could not be saved. Please, try again.');
    }
    }
    $groups = $this->User->Profile->find('list');
    		$this->set(compact('profiles'));
    	}

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('login');
	}
	

	public function login() {
		if ($this->Auth->login()) {
			$this->redirect($this->Auth->redirect());
		} else {
			$this->Session->setFlash(__('Usuário ou senha inválida, tente novamente'));
		}
	}
	
	public function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	
	public function index(){
		$this->set('results', $this->User->find('all'));
		$this->set(compact('users'));
	}
	
	
	public function view($id = null) {
		$this->User->id = $id;
		if($this->User->id){
			$this->set('results', $this->User->read());
		}
		else{
			$this->set('results', $this->User->find('all'));
		}
		$this->set('user', $this->User->read(null, $id));;
	}
   
	public function save() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Cadastrado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Houve um erro ao cadastrar usuario.'));
			}
		}
	}
    
    public function update($id = null){
	if($this->data){
	    if($this->User->save($this->data))
		$this->Session->setFlash(__('Editado com sucesso!'));
	    $this->redirect(array('controller' => 'users','action' => 'index'));
	}
		else{
		    $this->data = $this->User->read(null,$id);
		}
    }
    public function delete($id = null){
	if(is_int($id)){
	    if($this->User->delete($id))
		$this->Session->setFlash(__('Deletado com sucesso!'));
	    $this->redirect(array('controller' => 'users','action' => 'index'));
	}
		elseif(is_string($id)){
		    //criar funcao de deletar pelo valor do name
		}
    }
    
}
?>

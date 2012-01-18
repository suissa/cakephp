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
		$this->set('users', $this->User->read(null, $id));
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
				$this->Session->setFlash('O usuário não pode ser salvo. Por favor, tente de novo.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Profile->find('list');
		$this->set(compact('profile'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('ID inválido para este usuário');
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
				$this->Session->setFlash('Usuário salvo');
				$this->redirect(array('action'=>'index'), null, true);
		} else 
			{
				$this->Session->setFlash('O usuário não pode ser salvo. Por favor, tente de novo.');
			}
		}
		$groups = $this->User->Profile->find('list');
		$this->set(compact('profile'));
	}


    
    
	function login()
	{
	}
	 
	function logout(){
	    $this->Session->setFlash('Logout');
	    $this->redirect($this->Auth->logout());
	}	

       
    public function index(){	
		$this->set('results', $this->User->find('all'));
		//debug($this->User);		
    }

 /*      
    function view($id = null) {
	$this->User->id = $id;   
	if($this->User->id){
	    $this->set('result', $this->User->read());
	}
		else{	    
			$this->set('results', $this->User->find('all'));
		}
    }
    
    public function save(){
    	if($this->data){
    		if($this->User->save($this->data))
    		$this->Session->setFlash('Cadastrado com sucesso!');
    		$this->redirect(array('action'=>'login'));
    	} else{
    		$this->Session->setFlash('Houve um erro ao cadastrar usuario.');
    	}
    }	
    
    public function update($id = null){
	if($this->data){
	    if($this->User->save($this->data))
		$this->Session->setFlash('Editado com sucesso!');
	    $this->redirect(array('controller' => 'users','action' => 'index'));
	}
		else{
		    $this->data = $this->User->read(null,$id);
		}
    }
    public function delete($id = null){
	if(is_int($id)){
	    if($this->User->delete($id))
		$this->Session->setFlash('Deletado com sucesso!');
	    $this->redirect(array('controller' => 'users','action' => 'index'));
	}
		elseif(is_string($id)){
		    //criar funcao de deletar pelo valor do name
		}
    }

*/
    
}
?>

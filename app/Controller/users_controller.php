<?
class UsersController extends AppController{
		
    public $name = 'Users'; 
    public $ext;  
    var $helpers = array('Html', 'Form', 'Session' );
    var $components = array('Auth');
    
    
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
    
}
?>

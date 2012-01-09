<?
class UserController extends AppController{
 
    public $name = 'User';
 
    public function index(){
	$posts = $this->User->find('all');
	$this->set(compact('user'));
    }

    public function create(){
	$field = $this->data[$this->name];

	if($this->data){
	    if(is_string($field["login"])){
		if($this->User->save($this->data))
		    $this->Session->setFlash('Cadastrado com sucesso!');
		$this->data = array();
	    }	
	    else{
		    $this->Session->setFlash('ERROR!');
		
	    }
	}
    }
    
    public function retrieve(){
     if($this->data){
      if($this->User->save($this->data))
       $this->Session->setFlash('Cadastrado com sucesso!');
      $this->data = array();
     }
    }
    
    public function update($id = null){
	if($this->data){
	    if($this->User->save($this->data))
		$this->Session->setFlash('Editado com sucesso!');
	    $this->redirect(array('controller' => 'user','action' => 'index'));
	}
	else{
	    $this->data = $this->User->read(null,$id);
	}
    }
   
    
}
?>
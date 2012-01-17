<?
class UserController extends AppController{
		
    public $name = 'User'; 
          
    function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('signup');
        
        parent::beforeFilter();
        $this->Auth->allow('display');
    }

    public function signup()
    {
        if ($this->request->is('post'))
        {
            $this->User->create();

            if ($this->User->save($this->request->data))
            {
                $this->Session->setFlash(__('Sua conta foi criada'));
                $this->Auth->login($this->request->data);
                return $this->redirect($this->Auth->redirect());
            } else
            {
                $this->Session->setFlash(__('Sua conta não pode ser salva'));
            }
        }
    }

 /*       
    public function index(){	
		$this->set('results', $this->User->find('all'));
	
    }

    public function save(){
	if($this->data){
		if($this->User->save($this->data))
		    $this->Session->setFlash('Cadastrado com sucesso!');
		$this->data = array();		
	    
	}
	
        $this->redirect(array('controller' => 'user', 'action' => 'index'));
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
    public function delete($id = null){
	if(is_int($id)){
	    if($this->User->delete($id))
		$this->Session->setFlash('Deletado com sucesso!');
	    $this->redirect(array('controller' => 'user','action' => 'index'));
	}
	elseif(is_string($id)){
	    //criar funcao de deletar pelo valor do name
	}
    }
    
    */
    
}
?>
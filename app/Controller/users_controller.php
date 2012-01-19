<?
class UsersController extends AppController{
		
    public $name = 'Users'; 
    public $ext;  
    var $helpers = array('Html', 'Form', 'Session' );
    var $components = array('Auth');

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('save');
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

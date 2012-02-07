<?
class CartaoinformacoesController extends AppController{
		
    public $name = 'Cartaoinformacoes'; 
    public $ext;  
    var $helpers = array('Html', 'Form', 'Session' );
    
    
	
	public function index(){
		$this->set('results', $this->Cartaoinformacao->find('all'));
		$this->set(compact('cartaoinformacoes'));
	}
	
	
	public function view($id = null) {
		$this->Cartaoinformacao->id = $id;
		if($this->Cartaoinformacao->id){
			$this->set('results', $this->Cartaoinformacao->read());
		}
		else{
			$this->set('results', $this->Cartaoinformacao->find('all'));
		}
		$this->set('cartaoinformacoes', $this->Cartaoinformacao->read(null, $id));;
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

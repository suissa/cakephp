<?
class ProfilesController extends AppController{
 
    public $name = 'Profiles';     
    public $ext;
    
    var $components = array('RequestHandler');
    
    private function findAll(){
	return $this->Profile->find('all');
    }
    
    private function redirectIndex(){
	return $this->redirect(array('controller' => strtolower($this->name), 'action' => 'index'));
    }
    
    
    public function index(){
//	$posts = $this->Profile->find('all');
	
	$this->set('results', $this->findAll());
//	$this->set(compact('profile'));
	$this->render('index.php');
    }


    function beforeFilter () {
	//testar se o cara esta logado sempre!!!
	if($this->RequestHandler->isAjax()){
	}
    }

    
    
    public function save(){
	//$id = $this->data["id"];
	if($this->RequestHandler->isAjax()){
	    $this->autoRender = false;		
	    $this->layout = 'ajax';
	    return ($this->Profile->save($this->data)) ? $this->Profile->getLastInsertID() : 0;
		
	}else{
	    if($this->data){
	       // if(is_string($field["name"])){
		    if($this->Profile->save($this->data))
			$this->Session->setFlash('Cadastrado com sucesso!');
		    $this->data = array();
		//}	
    //	    else{
    //		    $this->Session->setFlash('ERROR!');
    //		
    //	    }
	    }
	    $this->redirectIndex();
	}
	
    }
    
    public function view($id = null) {
	$this->Profile->id = (int)$id;   
	if($this->Profile->id){
	    $this->set('results', $this->Profile->read());
	}
	else{	    
	    $this->set('results', $this->Profile->find('all'));
	}
	$this->render('view.php');
    }
    
    public function edit($id = null){
	$this->Profile->id = (int)$id;   
	if($this->Profile->id){
	    $this->set('result', $this->Profile->read());
	}
//	if($this->data){
//	    if($this->Profile->save($this->data))
//		$this->Session->setFlash('Editado com sucesso!');
//	    $this->redirect(array('controller' => 'profile','action' => 'index'));
//	}
//	else{
//	    $this->data = $this->Profile->read(null,$id);
//	}
	$this->render('edit.php');
    }
    public function delete($id = null){	
	$this->Profile->id = (int)$id;   
	if(is_int($this->Profile->id)){
	    if($this->Profile->delete($this->Profile->id))
		$this->Session->setFlash('Deletado com sucesso!');
	}
	elseif(is_string($id)){
	    //criar funcao de deletar pelo valor do name
	}
	$this->set('results', $this->findAll());
	$this->render('delete.php');
//	$this->redirectIndex();
    }
    
    
    //Testes
    public function renderForm(){
	$this->render('form.php');
	
    }
    public function listTabelas(){
	$this->autoRender = false;		
	$this->layout = 'ajax';
	$sql = "SHOW TABLES";
	$lista = $this->Profile->query($sql);
	var_dump($lista);
	$this->set('menu', $lista);
    }
}
?>
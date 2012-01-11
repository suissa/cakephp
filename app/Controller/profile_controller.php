<?
class ProfileController extends AppController{
 
    public $name = 'Profile'; 
    public $scaffold = 'Profile';
    public function index() {

	}
//    public function index(){
//	$posts = $this->Profile->find('all');
//	$this->set(compact('profile'));
//    }
//
//    public function create(){
//	$field = $this->data[$this->name];
////	var_dump(is_string($field["name"]));
////	die();
//	if($this->data){
//	    if(is_string($field["name"])){
//		if($this->Profile->save($this->data))
//		    $this->Session->setFlash('Cadastrado com sucesso!');
//		$this->data = array();
//	    }	
//	    else{
//		    $this->Session->setFlash('ERROR!');
//		
//	    }
//	}
//    }
//    
//    public function retrieve(){
//     if($this->data){
//      if($this->Profile->save($this->data))
//       $this->Session->setFlash('Cadastrado com sucesso!');
//      $this->data = array();
//     }
//    }
//    
//    public function update($id = null){
//	if($this->data){
//	    if($this->Profile->save($this->data))
//		$this->Session->setFlash('Editado com sucesso!');
//	    $this->redirect(array('controller' => 'profile','action' => 'index'));
//	}
//	else{
//	    $this->data = $this->Profile->read(null,$id);
//	}
//    }
//    public function delete($id = null){
//	if(is_int($id)){
//	    if($this->Profile->delete($id))
//		$this->Session->setFlash('Deletado com sucesso!');
//	    $this->redirect(array('controller' => 'profile','action' => 'index'));
//	}
//	elseif(is_string($id)){
//	    //criar funcao de deletar pelo valor do name
//	}
//    }
    
}
?>
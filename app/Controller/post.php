<?
class PostsController extends AppController{
 
 public $name = 'Posts';
 
 public function index(){
     $posts = $this->Post->find('all');
     $this->set(compact('posts'));
    }
    public function add(){
     if($this->data){
      if($this->Post->save($this->data))
       $this->Session->setFlash('Cadastrado com sucesso!');
      $this->data = array();
     }
    }
    
    public function edit($id = null){
     if($this->data){
      if($this->Post->save($this->data))
       $this->Session->setFlash('Editado com sucesso!');
      $this->redirect(array('controller' => 'posts','action' => 'index'));
     }else{
      $this->data = $this->Post->read(null,$id);
     }
    }
    public function delete($id = null){
     if($id){
      if($this->Post->delete($id))
       $this->Session->setFlash('Deletado com sucesso!');
      $this->redirect(array('controller' => 'posts','action' => 'index'));
     }
    }
    
}
?>

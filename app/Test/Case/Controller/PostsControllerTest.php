<?
class PostsControllerTest extends ControllerTestCase{
 public function testIndex(){
     $results = $this->testAction('posts/index/');
     debug($results);
    }
    public function testAdd(){
     $data = array(
      'Post' => array(
       'titulo' => 'titulo',
       'texto' => 'Lorem ipsum dolor sit amet, consectetur dipisicin'
      )  
     );
     $results = $this->testAction('posts/add',array('data' => $data,'method' => 'post'));
     debug($results);   
    }
    public function testEdit(){
     $results1 = $this->testAction('posts/edit/1');
     debug($results1);

     $data = array(
      'Post' => array(
       'id' => 1,
       'titulo' => 'teste update',
       'texto' => 'teste de update do texto'
      )
     );  
     $results2 = $this->testAction('posts/edit',array('data' => $data,'method' => 'post'));
     debug($results2);
    }
    
    public function testDelete(){
     $results = $this->testAction('posts/delete/1');
     debug($results);
    }
    
}
?>
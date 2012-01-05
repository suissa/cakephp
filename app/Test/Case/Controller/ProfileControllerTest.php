<?
class ProfileControllerTest extends ControllerTestCase{
 public function testIndex(){
     $results = $this->testAction('profile/index/');
     debug($results);
    }
    public function testCreate(){
     $data = array(
      'Profile' => array(
       'name' => 'admin'
      )  
     );
     $results = $this->testAction('profile/create',array('data' => $data,'method' => 'post'));
     
     //teste BOOL
     $data = array(
      'Profile' => array(
       'name' => (bool)TRUE
      )  
     );
     $results .= $this->testAction('profile/create',array('data' => $data,'method' => 'post'));
     
     //teste INT
     $data = array(
      'Profile' => array(
       'name' => (int)1
      )  
     );
     $results .= $this->testAction('profile/create',array('data' => $data,'method' => 'post'));
     
     debug($results);   
    }
    public function testUpdate(){
     $results1 = $this->testAction('profile/update/1');
     debug($results1);

     $data = array(
      'Post' => array(
       'id' => 1,
       'titulo' => 'teste update',
       'texto' => 'teste de update do texto'
      )
     );  
     $results2 = $this->testAction('profile/update',array('data' => $data,'method' => 'post'));
     debug($results2);
    }
    
    public function testDelete(){
     $results = $this->testAction('profile/delete/1');
     debug($results);
    }
    
}
?>
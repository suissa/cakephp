<?
class UserControllerTest extends ControllerTestCase{
	var $scaffold;
 public function testIndex(){
     $results = $this->testAction('user/index/');
     debug($results);
    }
    public function testCreate(){
	//$name = "login";
	$data = array(
		'User' => array(
		'login' => "login",
		'pass' => "pass",
		'email' => "mail@domain.com",
		'dt_created' => "2012-01-06",
		'profile_id' => "1",
	    )  
	);
 
    $results = $this->testAction('user/create',array('data' => $data,'method' => 'post'));
    debug($results);
    }
    
    
    
    public function testUpdate(){
     $results1 = $this->testAction('user/update/1');
     debug($results1);

     $data = array(
      'Post' => array(
       'id' => 1,
       'titulo' => 'teste update',
       'texto' => 'teste de update do texto'
      )
     );  
     $results2 = $this->testAction('user/update',array('data' => $data,'method' => 'post'));
     debug($results2);
    }
    
    
    
}
?>
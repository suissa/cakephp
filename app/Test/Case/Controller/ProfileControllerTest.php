<?
class ProfileControllerTest extends ControllerTestCase{
 public function testIndex(){
     $results = $this->testAction('profile/index/');
     debug($results);
    }
    public function testCreate(){
	$name = "admin";
	$data = array(
	    'Profile' => array(
		'name' => $name
	    )  
	);
	$results = $this->testAction('profile/create',array('data' => $data,'method' => 'post'));
	$results .= $this->assertEqual(is_string($name), true, "Teste de tipagem do name string");
	
	//teste BOOL
	$name = (bool)true;
	$data = array(
	    'Profile' => array(
		'name' => $name
	    )  
	);
	$results .= $this->testAction('profile/create',array('data' => $data,'method' => 'post'));
	$results .= $this->assertEqual(is_string($name), true, "Teste de tipagem do name com bool");

	//teste INT
	$name = (int)1;
	$data = array(
	    'Profile' => array(
		'name' => $name
	    )  
	);
	$results .= $this->testAction('profile/create',array('data' => $data,'method' => 'post'));
	$results .= $this->assertEqual(is_string($name), true, "Teste de tipagem do name int");

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
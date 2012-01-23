  <?php
	App::uses('User','Model');
    
    class UserTestCase extends CakeTestCase {

        public $fixtures = array( 'app.user' );
    
        public function setUp() {
        parent::setUp();
        $this->User = ClassRegistry::init('User');
    	}

		public function testFind(){
			$result = $this->User->find('all');
			$expected = array(
				array('User' => array ('id' => 1, 'username' => 'testfix01', 'password' => '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'fname' => 'Teste', 'lname' => 'Fixture 01', 'email' => 'email@domain.com', 'profile_id' => '2',  'active' => '1', 'created' => '2012-01-01 10:20:30', 'modiefied' => '2012-01-01 10:20:40')),
				array('User' => array ('id' => 2, 'username' => 'testfix02', 'password' => '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'fname' => 'Teste', 'lname' => 'Fixture 02', 'email' => 'email@domain.com', 'profile_id' => '2',  'active' => '1', 'created' => '2012-01-01 10:20:30', 'modiefied' => '2012-01-01 10:20:40')),
				array('User' => array ('id' => 3, 'username' => 'testfix03', 'password' => '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'fname' => 'Teste', 'lname' => 'Fixture 03', 'email' => 'email@domain.com', 'profile_id' => '1',  'active' => '0', 'created' => '2012-01-01 10:20:30', 'modiefied' => '2012-01-01 10:20:40')),
				array('User' => array ('id' => 4, 'username' => 'testfix04', 'password' => '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'fname' => 'Teste', 'lname' => 'Fixture 04', 'email' => 'email@domain.com', 'profile_id' => '1',  'active' => '0', 'created' => '2012-01-01 10:20:30', 'modiefied' => '2012-01-01 10:20:40')),
			);
			$this->assertEqual($result, $expected);
		}

		public function Published(){
			$conditions = array('conditions' => array('active' => '1'));
			$results = $this->find('all',$conditions);
			return $results;
		}
    
		public function testPublished(){
			$result = $this->User->Published();
			$expected = array(
				array('User' => array ('id' => 1, 'username' => 'testfix01', 'password' => '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'fname' => 'Teste', 'lname' => 'Fixture 01', 'email' => 'email@domain.com', 'profile_id' => '2',  'active' => '1', 'created' => '2012-01-01 10:20:30', 'modiefied' => '2012-01-01 10:20:40')),
				array('User' => array ('id' => 2, 'username' => 'testfix02', 'password' => '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'fname' => 'Teste', 'lname' => 'Fixture 02', 'email' => 'email@domain.com', 'profile_id' => '2',  'active' => '1', 'created' => '2012-01-01 10:20:30', 'modiefied' => '2012-01-01 10:20:40')),
			);
			$this->assertEqual($result, $expected);
		}

    }
?>    

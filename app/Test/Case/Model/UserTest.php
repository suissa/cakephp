  <?php
    App::import('Model', 'User');
    
    class UserTestCase extends CakeTestCase {

        var $fixtures = array( 'app.user' );
    
        public function setUp() {
        parent::setUp();
        $this->User = ClassRegistry::init('User');
    	}
    
		public function testPublished() {
        $result = $this->User->published(array('id', 'username'));
        $expected = array(
                array('User' => array( 'id' => 1, 'username' => 'Pedro' )),
                array('User' => array( 'id' => 2, 'username' => 'Maria' )),
                array('User' => array( 'id' => 3, 'username' => 'João' ))
            );
    
            $this->assertEqual($result, $expected);
        }
    }
?>    

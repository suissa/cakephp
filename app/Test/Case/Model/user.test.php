  <?php
    App::import('Model', 'User');
    
    class UserTestCase extends CakeTestCase {
        var $fixtures = array( 'app.user' );
    
        function testPublished() {
            $this->User = ClassRegistry::init('User');
    
            $result = $this->User->published(array('id', 'login'));
            $expected = array(
                array('User' => array( 'id' => 1, 'login1' => 'Primeiro usuario' )),
                array('User' => array( 'id' => 2, 'login2' => 'Segundo usuario' )),
                array('User' => array( 'id' => 3, 'login3' => 'Terceiro usuario' ))
            );
    
            $this->assertEqual($result, $expected);
        }
    }
    ?>

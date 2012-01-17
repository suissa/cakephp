<?php
class AppController extends Controller 
{

    var $components = array('Auth','Session');
    var $current_user = false;
    var $ext  = '.php';

    function beforeFilter()
    {

        $this->Auth->loginAction = array('controller' => 'sessions', 'action' => 'create');
        $this->Auth->loginRedirect = '/';
        $this->Auth->logoutRedirect = '/';

        $this->Auth->authenticate = array(
            AuthComponent::ALL => array(
                'fields' => array(
                    'username' => 'email',
                    'password' => 'password'),
                'userModel' => 'Users.User'
            ), 'Form'
        );

        $this->current_user = $this->Auth->user();
    }

    function beforeRender()
    {
        $this->set('current_user',$this->current_user );
    }
}
?>

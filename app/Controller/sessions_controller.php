<?php
class SessionsController extends AppController
{
    var $uses = array("User");

    function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('create');
    }

    public function create()
    {
        if ($this->request->is('post') )
        {
            if( $this->Auth->login() )
            {
                return $this->redirect( $this->Auth->redirect() );
            }
            else
            {
                $this->Session->setFlash(__('Login/senha inválida',true));
            }
        }
    }

    public function destroy()
    {
        $this->Session->setFlash('Conectado!');
        $this->redirect( $this->Auth->logout() );
    }   
}
?>
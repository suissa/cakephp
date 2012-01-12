<?php

class AppController extends Controller {

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
        )
    );

    function beforeFilter() {
        $this->Auth->allow('index', 'view');
    }

}
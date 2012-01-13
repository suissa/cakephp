<?php
class AppController extends Controller {
    var $components = array('Auth');
    var $helpers = array('Html', 'Form', 'Session');

    function beforeFilter() {
       $this->Auth->allow('index','view');        
    }
}
?>

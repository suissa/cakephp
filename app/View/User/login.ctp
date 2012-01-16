<?php
echo $this->Session->flash('auth');
echo $this->Session->flash();
echo $this->Form->create('User', array('action' => 'login'));
echo $this->Form->input('Login');
echo $this->Form->input('Pass', array('type' => 'password'));
echo $this->Form->end('Entrar');

?>
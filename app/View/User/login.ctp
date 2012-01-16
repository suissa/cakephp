<?php

echo $this->Session->flash('auth');
echo $this->Session->flash();
echo $this->Form->create('User', array('action' => 'login'));
echo $this->Form->input('email');
echo $this->Form->input('pass', array('type' => 'password'));
echo $this->Form->end('Entrar');

?>
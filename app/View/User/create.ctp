<?php
echo $this->Form->create('User', array(
    'url' => array('controller'=>'sessions','action' => 'create')
));
echo $this->Form->input('login');
echo $this->Form->input('pass');
echo $this->Form->end("Login");
?>
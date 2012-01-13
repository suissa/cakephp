<?php
	if($session->check('Message.flash')) $session->flash();
	if($session->check('Message.auth')) $session->flash('auth');
	echo $form->create('User', array('action' => 'login'));
	echo $form->input('login');
	echo $form->input('pass');
	echo $form->end('Entrar');
?>

<?php

class AppController extends Controller {

	public $components = array('Session', 'Cookie', 'Auth');

	public function beforeFilter() {

		// Model de usuários
		$this->Auth->User = 'User';

		// Campos de usuário e senha
		$this->Auth->fields = array(
			'login' => 'login',
			'password' => 'pass'
		);

	//	// Condição de usuário ativo/válido (opcional)
	//	$this->Auth->userScope = array(
	//		'User.ativo' => true
	//	);

		// Action da tela de login
		$this->Auth->loginAction = array(
			'controller' => 'user',
			'action' => 'login'
		);

		// Action da tela após o login (com sucesso)
		$this->Auth->loginRedirect = array(
			'controller' => 'user',
			'action' => 'home'
		);

		// Action para redirecionamento após o logout
		$this->Auth->logoutRedirect = array(
			'controller' => 'posts',
			'action' => 'display', 'home'
		);

		// Mensagens de erro
		$this->Auth->loginError = __('Usuário e/ou senha incorreto(s)', true);
		$this->Auth->authError = __('Você precisa fazer login para acessar esta página', true);
	}

}

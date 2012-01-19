<?php
class User extends AppModel {

		public $name = 'User';
//		public $displayField = 'name';

		public $validate = array(

// 	 		'name'=>array(
// 	 			'Please enter your name.'=>array(
// 	 				'rule'=>'notEmpty',
// 	 				'message'=>'Por favor, informe o seu nome'
// 	 			)
// 	 		),

			'username'=>array(
				'The username must be between 5 and 15 characters.'=>array(
					'rule'=>array('between', 5, 15),
					'message'=>'Seu login deverá ter de 5 a 15 caracteres'
				),
				'That username has already been taken'=>array(
					'rule'=>'isUnique',
					'message'=>'Este login já existe no sistema'
				)
			),
			'email'=>array(
				'Valid email'=>array(
					'rule'=>array('email'),
					'message'=>'Por favor, entre com um endereço de email válido'
				)
			),
			'password'=>array(
				'Not empty'=>array(
				    'rule'=>'notEmpty',
				    'message'=>'Por favor, informe a sua senha'
				),
				'Match passwords'=>array(
				    'rule'=>'matchPasswords',
				    'message'=>'Suas senhas não conferem'
				)
			),
			'password_confirmation'=>array(
				'Not empty'=>array(
				    'rule'=>'notEmpty',
				    'message'=>'Por favor, confirme a sua senha'
				)
			)
		);
	
		public function matchPasswords($data) {
			if ($data['password'] == $this->data['User']['password_confirmation']) {
			    return true;
			}
			$this->invalidate('password_confirmation', 'Your passwords do not match');
			return false;
		}

		
	
		public function beforeSave() {
			if (isset($this->data['User']['password'])) {
			    $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
			}
			return true;
		}
	
	

}
?>

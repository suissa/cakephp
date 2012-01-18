<?php
echo $this->Form->create('User', array(
    'url' => array('controller'=>'sessions','action' => 'create')
));

    echo $this->Form->input('username', array(
        'label' => __('Username', true),
        'error' => array(
            'name-not-empty-rule'       => __("Você deve informar um login",true)
        )
    ));

    echo $this->Form->input('email', array(
        'type' => 'email',
        'error' => array(
            'email'     => __("Este endereço de e-mail não é válido",true),
            'isUnique'  => __("Já existe uma conta registrada neste endereço de e-mail",true),
            'notEmpty'  => __("Você deve informar um endereço de e-mail",true)
        )
    ));

    echo $this->Form->input('password', array(
        'error' => array(
            'notEmpty'      => __("Você deve informar uma senha",true),
            'minLength' => __("A senha deve conter no mínimo 5 caracteres",true)
        )
    ));

    echo $this->Form->input('password_confirm', array(
        'type'  => 'password',
        'error' => array(
            'comparePasswords'  => __("A sua senha não confere",true)
        )
    ));

echo $this->Form->end(__('Sign up',true));
?>

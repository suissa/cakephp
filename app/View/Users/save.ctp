<h1>Users</h1>

<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Novo usuário'); ?></legend>
    <?php
        echo $this->Form->input('username', array( 'label' => 'Login' ) );
        echo $this->Form->input('password', array( 'label' => 'Senha' ) );
        echo $this->Form->input('password_confirmation', array( 'label' => 'Repita a senha', 'type' => 'password' ) );
        echo $this->Form->input('fname', array( 'label' => 'Nome' ) );
        echo $this->Form->input('lname', array( 'label' => 'Sobrenome' ) );
        echo $this->Form->input('email', array( 'label' => 'Email' ) );
        echo $this->Form->input('profile_id', array( 'label' => 'Perfil' ) );
        echo $this->Form->input('active', array( 'label' => 'Status' ) );
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Enviar'));?>
</div>

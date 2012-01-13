
<h1>Adicionar usuário</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('login');
echo $this->Form->input('pass');
echo $this->Form->input('email');
echo $this->Form->end('Salvar');
?>
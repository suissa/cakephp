
<h1>Adicionar comentário</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('titulo');
echo $this->Form->input('texto', array('rows' => '3'));
echo $this->Form->end('Salvar');
?>
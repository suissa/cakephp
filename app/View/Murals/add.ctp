<div class="posts form">
<?php echo $this->Form->create('Post' , array( 'type' => 'post' ));?>
	<fieldset>
 		<legend><?php __('Editar mural');?></legend>
	<?php
		echo $this->Form->hidden('_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('titulo');
		echo $this->Form->input('texto');
		echo $this->Form->input('data_criacao', array('type' => 'hidden','value' => mktime()) );
		echo $this->Form->input('usuarios_id', array('type' => 'hidden','value' => 1) );
	?>
	</fieldset>
<?php echo $this->Form->end('Salvar');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Todos', true), array('action'=>'index'));?></li>
	</ul>
</div>

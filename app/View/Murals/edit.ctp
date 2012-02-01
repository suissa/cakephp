<div class="posts form">
<?php echo $this->Form->create('Post' , array( 'type' => 'post' ));?>
	<fieldset>
 		<legend><?php __('Editar comentário');?></legend>
	<?php
		echo $this->Form->hidden('_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('texto');
		echo $this->Form->input('autor');
	?>
	</fieldset>
<?php echo $this->Form->end('Salvar');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Todos os comentários', true), array('action'=>'index'));?></li>
	</ul>
</div>

<div class="posts form">
<?php echo $this->Form->create('Usuario' , array( 'type' => 'post' ));?>
	<fieldset>
 		<legend><?php __('Add Usuário');?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('login');
		echo $this->Form->input('senha', array('type' => 'password'));
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('List Usuários', true), array('action'=>'index'));?></li>
	</ul>
</div>

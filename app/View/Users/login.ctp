<div class="user">
<?php echo $this->Form->create('User', array('action' => 'login')); ?>
	<fieldset>
 		<legend>User Login</legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end('Entrar'); ?>
</div>
<div class="user">
<?php echo $form->create('User', array('action' => 'login'));?>
	<fieldset>
 		<legend>User Login</legend>
	<?php
		echo $form->input('login');
		echo $form->input('pass');
	?>
	</fieldset>
<?php echo $form->end('Sign In');?>
</div>
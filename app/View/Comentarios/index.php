TESTE
<?php foreach($usuarios as $usuario): ?>
			
			<strong>Nome: </strong><?php echo $usuario['Usuario']['nome'] ?></span>
			<strong>Login: </strong><?php echo $usuario['Usuario']['login'] ?></span>
			
			<br /><br />
<?php endforeach; ?>

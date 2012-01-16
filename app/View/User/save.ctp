<h1>Users</h1>

<form action="./save/" method="post" id="form_cadastro">
    
	<ul>
	    <li>
		<label for="name">Login:</label>
		<input type="" name="login" />
	    </li>
	    <li>
		<label for="name">Email:</label>
		<input type="" name="email" />
	    </li>
	    <li>
		<input type="submit" value="enviar" />
	    </li>
	    
	</ul>
</form>

<table>
	<tr>
		<th>Id</th>
		<th>User</th>
		<th>Email</th>
	</tr>

	<?php foreach ($results as $result): ?>
	<tr>
		<td><?php echo $result['User']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($result['User']['login'], array('controller' => 'user', 'action' => 'view', $result['User']['id'])); ?>
		</td>
		<td><?php echo $result['User']['email']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>

<h1>Usuários</h1>
<table>
	<tr>
		<th>Id</th>
		<th>login</th>
		
	</tr>

	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($user['User']['login'], array('controller' => 'user', 'action' => 'view', $user['User']['id'])); ?>
		</td>
		
	</tr>
	<?php endforeach; ?>

</table>

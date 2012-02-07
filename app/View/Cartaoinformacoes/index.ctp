<h1>Users</h1>

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
			<?php echo $this->Html->link($result['User']['username'], array('controller' => 'users', 'action' => 'view', $result['User']['id'])); ?>
		</td>
		<td><?php echo $result['User']['email']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>

<?php if(isset($result)):
    echo "<h1>".$result['Profile']['name']."</h1>";
endif; ?>
<table>
	<tr>
		<th>Id</th>
		<th>Profile</th>
	</tr>

	<?php foreach ($results as $result): ?>
	<tr>
		<td><?php echo $result['Profile']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($result['Profile']['name'], array('controller' => 'profile', 'action' => 'view', $result['Profile']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>
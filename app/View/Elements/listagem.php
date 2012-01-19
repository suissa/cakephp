<table id="listagem">
	<tr>
		<th>Id</th>
		<th>Profile</th>
		<th>Alterar</th>
		<th>Deletar</th>
	</tr>
	<tbody>
	<?php foreach ($results as $result): ?>
	<tr>
		<td><?php echo $result['Profile']['id']; ?></td>
		<td>
		    <?php echo $this->Html->link($result['Profile']['name'], array('controller' => $__controller, 'action' => $__actionView, $result['Profile']['id'])); ?>
		</td>
		<td>
		    <?php echo $this->Html->link("alterar", array('controller' => $__controller, 'action' => $__actionEdit, $result['Profile']['id'])); ?>
		</td>
		<td>
		    <?php echo $this->Html->link("deletar", array('controller' => $__controller, 'action' => $__actionDelete, $result['Profile']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>